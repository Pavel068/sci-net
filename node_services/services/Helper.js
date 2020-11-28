require('datejs');

const Helper = {
    async delay(ms) {
        return new Promise(res => {
            setTimeout(() => {
                res()
            }, ms);
        })
    },
    timeLog(message) {
        console.log(`${(new Date).toString('yyyy-MM-dd HH:mm:ss')}: ${message}`);
    }
}

module.exports = Helper;
