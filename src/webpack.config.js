const path = require('path');
const entry = require('webpack-glob-entry');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const webpack = require('webpack');

const env = process.env.NODE_ENV;

module.exports = {
    entry: entry("./assets/js/*.js", "./assets/css/importer.less"),
    devtool: 'inline-source-map',
    output: {
        filename: '[name].min.js',
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: env === 'production'
                ? ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [ 'css-loader' ]
                })
                : [ 'style-loader', 'css-loader' ]
            },
            {
                test: /\.less$/,
                use: [
                    {
                        loader: 'style-loader'
                    },
                    {
                        loader: 'css-loader'
                    },
                    {
                        loader: 'less-loader', options: {
                            strictMath: true,
                            noIeCompat: true
                        }
                    }
                ]
            },
            {
                test: /\.(png|svg|jpg|gif)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            publicPath: 'dist/'
                        }
                    }
                ]
            }
        ]
    },
    plugins: env === 'production'
        ? [
            new ExtractTextPlugin({
                filename: '[name].min.css'
            }),
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery"
            })
        ]
        : [
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery"
            })
        ],
    mode: "development"
};