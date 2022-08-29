const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

let config = {
    entry: "./assets/app.js",
    output: {
        path: path.resolve(__dirname, "./src/Resources/public"),
        filename: "./[name].js"
    },
    plugins: [new MiniCssExtractPlugin()],
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [MiniCssExtractPlugin.loader, "css-loader"],
            },
        ],
    },
    optimization: {
        splitChunks: {
            chunks: 'all',
        },
    },
}

module.exports = config;