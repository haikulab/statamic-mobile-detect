/**
 * CasperJs
 * ----------------------------------------------------------------------------
 */

// run tests with
// casperjs test --url="http://statamic176.dev/" tests/

/**
* URLs
* ----------------------------------------------------------------------------
*/

var url = casper.cli.get("url");

var device = {
    iphone: 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25',
    ipad: 'Mozilla/5.0 (iPad; CPU OS 6_1_2 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) CriOS/25.0.1364.124 Mobile/10B146 Safari/8536.25',
    chrome: 'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1667.0 Safari/537.36',
    computer: 'computer',
    tablet  : 'tablet',
    phone  : 'phone'
};

exports.device = device;

