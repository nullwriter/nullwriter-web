const path = require('path');
const webpack = require('webpack');

module.exports = {
    mode: 'development',
    entry: {
        'app':'src/js/app.js'
    },
    resolve: {
        modules: [
            '.',
            'node_modules',
        ],
    },
    output: {
        path: path.resolve(__dirname, './dist'),
        filename: '[name].bundle.js',
        publicPath: './dist/',
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: /node_modules/,
                options: {
                    plugins: ['transform-runtime'],
                    presets: ['es2015'],
                },
            },
            {
                test: /\.css$/,
                loader: ['style-loader', 'css-loader'],
            },
            {
                test: /\.(eot|svg|ttf|woff|woff2)$/,
                loader: 'file-loader',
                options: {
                    outputPath: 'fonts/'
                }
            },
            {
                 test: /\.jpe?g$|\.gif$|\.png$/i,
                 loader: "file-loader?name=src/images/[name].[ext]",
                 options: {
                     name: '[name].[ext]',
                     outputPath: 'dist/images/'
                 }
            }
        ],
    },
    plugins: [
        new webpack.ProvidePlugin({
            jQuery: 'jquery',
        }),
    ]
    
};