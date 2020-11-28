const puppeteer = require('puppeteer');
const path = require('path');
const fs = require('fs');

class Puppeteer {
    constructor() {
        if (!!Puppeteer.instance) {
            return Puppeteer.instance;
        }

        Puppeteer.instance = this;

        this.browser = null;
        this.browserWSEndpoint = null;

        return this;
    }

    async init(navigationTimeout = 30000) {
        if (!this.browser) {
            this.browser = await puppeteer.launch({
                headless: true,
                userDataDir: path.join(__dirname, '../tmp'),
                ignoreHTTPSErrors: true,
                args: [
                    '--lang=en-US,en',
                    '--disable-dev-shm-usage',
                    '--disable-crash-reporter',
                    '--disable-breakpad',
                    '--no-sandbox',
                    '--disable-setuid-sandbox',
                    '--disable-infobars',
                    '--window-position=0,0',
                    '--ignore-certifcate-errors',
                    '--ignore-certifcate-errors-spki-list',
                    '--user-agent="Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3312.0 Safari/537.36"'
                ]
            });
        }

        const browserWSEndpoint = this.browser.wsEndpoint();
        this.browser = await puppeteer.connect({browserWSEndpoint});

        const page = await this.browser.newPage();
        await page.setViewport({width: 1920, height: 926});
        await page.setCacheEnabled(false);

        const preloadFile = fs.readFileSync(path.join(__dirname, '../../storage/puppeteer/preload.js'), 'utf8');
        await page.evaluateOnNewDocument(preloadFile);

        await page.setDefaultNavigationTimeout(navigationTimeout);

        await page.setRequestInterception(true);
        page.on('request', request => {
            // Do nothing in case of non-navigation requests.
            if (!request.isNavigationRequest()) {
                request.continue();
                return;
            }
            // Add a new header for navigation request.
            const headers = request.headers();
            request.continue({headers});
        });

        await page.goto('about:blank');

        return [this.browser, page];
    }
}

module.exports = Puppeteer;
