/** ↓ エディタで補完を効かせるための JSDoc */
/** @type {import('webpack').Configuration} */
const webpack = require("webpack");
module.exports = {
  entry: ["{{entryPath}}"],
  mode: "none",
  output: {
    path: "{{jsDir}}",
    filename: "{{jsName}}", //ビルドした後のファイル名
    environment: {
      arrowFunction: false,
    },
  },
  module: {
    rules: [
      {
        // 拡張子 js のファイル（正規表現）
        test: /\.ts$/,
        // ローダーの指定
        use: [
          {
            loader: "ts-loader",
            options: {
              configFile: "{{tsSorceDir}}/tsconfig.json", // tsconfig.jsonの場所
            },
          },
        ],
      },
      {
        // 拡張子 js のファイル（正規表現）
        test: /\.js$/,
        // ローダーの指定
        loader: "babel-loader",
      },
    ],
  },
  resolve: {
    modules: ["{{npmPath}}/node_modules/"],
    // 拡張子を配列で指定
    extensions: [".ts", ".js"],
  },
  //plugins: [
  //  new webpack.ProvidePlugin({
  //    $: 'jquery'
  //  })
  //],
  externals: [
    {
      jquery: "jQuery",
    },
  ],
};
