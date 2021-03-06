const webpack = require("webpack");

module.exports = {
  runtimeCompiler: true,
  outputDir: "public",
  publicPath: "public",
  lintOnSave: false,
  chainWebpack: config => {
    config.optimization.delete("splitChunks");
  },
  configureWebpack: {
    plugins: [
      new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery",
        "window.jQuery": "jquery",
        Popper: ["popper.js", "default"]
      })
    ]
  },
  pages: {
    admin: {
      entry: "resources/js/admin/app.js",
      template: "resources/js/admin/views/admin/index.html",
      filename: "index.html",
      assetsDir: "resources/js/admin/assets",
      publicPath: "resources/js/admin/assets"
    }
  }
};
