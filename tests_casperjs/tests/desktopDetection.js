// get the url from the cli

var url = casper.cli.get( "url" );

// pull in define device data

var imported = require('../casperjs_test_config.js');
var device = imported.device;

casper.test.begin( "Desktop Detection", function suite( test ) {

    casper.userAgent( device.chrome );

    // Start page
    casper.start(url, function () {
        test.assertHttpStatus( 200 );
        test.assertTitle( "Mobile Testing Theme" );
        test.assertExists( "h1" );
        test.assertSelectorContains( ".detected_device", device.computer );
    } )

    .run( function () {
        test.done();
    } );
} );
