var webpack = require('webpack'),
    path = require('path');

// const { VueLoaderPlugin } = require('vue-loader');

module.exports = {
    cache: true,
    target: 'web',
    entry: {
        theme: path.join(__dirname, 'assets/js/theme.js'),
    },
    output: {
        path: path.join(__dirname, 'dist/js'),
        publicPath: '',
        filename: '[name].min.js'
    },
    watch: true,
    watchOptions: {
      
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
            // {
            //     test: /\.vue$/,
            //     exclude: /node_modules/,
            //     use: 'vue-loader', 
            // }
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
        // new VueLoaderPlugin(),
    ],
    resolve: {
        // alias: {
        //     'vue$': 'vue/dist/vue.esm.js'
        // }
    }
};