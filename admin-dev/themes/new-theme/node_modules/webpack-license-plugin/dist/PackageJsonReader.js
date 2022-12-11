"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var path_1 = require("path");
var PackageJsonReader = /** @class */ (function () {
    function PackageJsonReader(fileSystem) {
        this.fileSystem = fileSystem;
        this.cache = {};
    }
    PackageJsonReader.prototype.readPackageJson = function (moduleDir) {
        if (!this.cache[moduleDir]) {
            var path = path_1.join(moduleDir, 'package.json');
            var meta = JSON.parse(this.fileSystem.readFile(path));
            this.cache[moduleDir] = meta;
        }
        return this.cache[moduleDir];
    };
    return PackageJsonReader;
}());
exports.default = PackageJsonReader;
//# sourceMappingURL=PackageJsonReader.js.map