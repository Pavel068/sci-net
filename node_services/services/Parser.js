const Puppeteer = require('./Puppeteer');
const Helper = require('./Helper');

class Parser {
    constructor() {
        this.browser = null;
        this.page = null;
        this.target_page = 'https://www.elibrary.ru';

        this.author_id = 881618;
    }

    async init() {
        const puppeteerInstance = new Puppeteer();
        const browserPage = await puppeteerInstance.init();
        this.browser = browserPage[0];
        this.page = browserPage[1];
    }

    async parseHrefs() {
        Helper.timeLog('Go to Elibrary author page');
        await this.page.goto(this.target_page + `/author_items.asp?authorid=${881618}&show_option=1&show_refs=1`);
        await Helper.delay(10000);
        Helper.timeLog('Loaded');
        const articles = await this.page.$$('#restab tr[valign="middle"] td[align="left"]>a');

        let hrefs = [];

        for (const article of articles) {
            hrefs.push(await this.page.evaluate(el => el.getAttribute("href"), article));
        }

        return hrefs;
    }

    async parseArticleParams() {
        const article = {
            name: '',
            authors: '',
            year: '',
            pages: '',
            annotation: '',
            keywords: '',
        }

        const name = await this.page.$('.bigtext');
        article.name = (await this.page.evaluate(element => element.textContent, name)).trim();

        return article;
    }

    async parseArticleByHref(href) {
        try {
            Helper.timeLog(`Go to Elibrary article page ${href}`);
            await this.page.goto(this.target_page + href);
            await Helper.delay(10000);
            Helper.timeLog('Loaded');

            const article = await this.parseArticleParams();

            return article;
        } catch (e) {

        }
    }

    async parse() {
        const articles = [];

        const hrefs = await this.parseHrefs();
        for (const href of hrefs) {
            try {
                Helper.timeLog(`Go to Elibrary article page ${href}`);
                await this.page.goto(this.target_page + href);
                await Helper.delay(10000);
                Helper.timeLog('Loaded');

                const article = await this.parseArticleParams();

                articles.push(article);
            } catch (e) {

            }
        }

        return articles;
    }
}

module.exports = Parser;
