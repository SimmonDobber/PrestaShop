"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var WebpackAssetManager = /** @class */ (function () {
    function WebpackAssetManager(compilation) {
        this.compilation = compilation;
    }
    WebpackAssetManager.prototype.addFile = function (filename, contents) {
        this.compilation.assets[filename] = {
            source: function () { return contents; },
            size: function () { return contents.length; },
        };
    };
    return WebpackAssetManager;
}());
exports.default = WebpackAssetManager;
//# sourceMappingURL=WebpackAssetManager.js.map