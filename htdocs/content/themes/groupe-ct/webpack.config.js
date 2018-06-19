var webpack = require('webpack'),
    path = require('path');
const ExtractTextPlugin = require('extract-text-plugin');

module.exports = {
    cache: true,
    target: 'web',
    entry: {
        theme: path.join(__dirname, 'assets/js/theme.js')
    },
    output: {
        path: path.join(__dirname, 'dist/js'),
        publicPath: '',
        filename: '[name].min.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
                query: {
                   presets: ['es2015', ]
                }
            },
            

        ]
    },
    externals: {
        jquery: 'jQuery',
        backbone: 'Backbone',
        underscore: '_'
    },
    plugins: [
        new webpack.ProvidePlugin({
            // Automatically detect jQuery and $ as free var in modules
            // and inject the jquery library
            // This is required by many jquery plugins
            jquery: "jQuery",
            $: "jQuery",
            backbone: "Backbone",
            underscore: "_"
        }),
        new ExtractTextPlugin({
            ''
        }),
    ],
    resolve: {
    }
};