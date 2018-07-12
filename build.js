const sass = require('node-sass');
const fs = require('fs');
const chalk = require('chalk'); // Just for a colorful console
const { log } = console;

const SOURCE_FILE = './scss/styles.scss';
const TARGET_PATH = './css/';

/**
 * 
 * @param {String} fileName Your filename: foobar.css
 * @param {Object} extOptions Node-Sass specific options
 * @returns {Promise}
 */
function renderStyles(fileName, extOptions = {}) {
    if (!fileName) {
        log(chalk.red('No filename was given'));
        return;
    }

    log(chalk.blue(`Start: ${fileName}`));

    return new Promise((resolve, reject) => {
        const options = Object.assign({
            file: SOURCE_FILE,
        }, extOptions);

        sass.render(options, (err, result) => {
            if (err) {
                log(chalk.red(err));
                reject(err);
                return;
            }

            fs.writeFile(`${TARGET_PATH}${fileName}`, result.css, function (err) {
                if (err) {
                    log(chalk.red(err));
                    reject(err);
                    return;
                }

                resolve();
                log(chalk.green(`File ${fileName} written.`));
            });
        });
    })
}

/**
 * Let's do the magic: Build two css-files
 */
Promise.all([
    renderStyles('styles.css'),
    renderStyles('styles.min.css', {
        outputStyle: 'compressed'
    }),
]).then(() => {
    log(chalk.green('Job complete'));
    }).catch(e => log(chalk.red(e)));