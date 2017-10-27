var Encore = require('@symfony/webpack-encore');
const rootDir='./src/CoreBundle/Resources/public/';
Encore
// directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/build')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // will output as web/build/app.js
    .addEntry('app', rootDir+'app.js')
    //
    .addStyleEntry('style', rootDir+'styles/style.scss')

    // allow sass/scss files to be processed
    .enableSassLoader()

    .autoProvidejQuery()
    .autoProvideVariables({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
        Popper: ['popper.js', 'default'],
        // In case you imported plugins individually, you must also require them here:
        Util: "exports-loader?Util!bootstrap/js/dist/util",
        Dropdown: "exports-loader?Dropdown!bootstrap/js/dist/dropdown"
    })
    .enableSourceMaps(!Encore.isProduction())

    .enableVersioning(Encore.isProduction())
;
module.exports = Encore.getWebpackConfig();