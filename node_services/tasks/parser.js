const Parser = require('../services/Parser');
const ParserInstance = new Parser();

(async () => {
    await ParserInstance.init();
    // const result = await ParserInstance.parseArticleByHref('/item.asp?id=36364003');
    const result = await ParserInstance.parse();

    console.log(result);
})();
