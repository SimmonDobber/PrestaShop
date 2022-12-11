"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var path_1 = require("path");
/**
 * Locates module directories for given filenames by searching
 * the directory tree for package.json files.
 */
var ModuleDirectoryLocator = /** @class */ (function () {
    function ModuleDirectoryLocator(fileSystem, buildRoot, packageJsonReader) {
        this.fileSystem = fileSystem;
        this.buildRoot = buildRoot;
        this.packageJsonReader = packageJsonReader;
    }
    ModuleDirectoryLocator.prototype.getModuleDir = function (filename) {
        var moduleDir = filename.substring(0, filename.lastIndexOf(path_1.sep));
        return this.checkModuleDir(moduleDir);
    };
    ModuleDirectoryLocator.prototype.checkModuleDir = function (moduleDir, prevModuleDir) {
        var _this = this;
        if (prevModuleDir === void 0) { prevModuleDir = null; }
        var checkParent = function () {
            return _this.checkModuleDir(path_1.resolve("" + moduleDir + path_1.sep + ".." + path_1.sep), moduleDir);
        };
        var isNotPartOfPackage = moduleDir === prevModuleDir || moduleDir === this.buildRoot;
        if (isNotPartOfPackage) {
            return null;
        }
        var hasPackageJson = this.fileSystem.pathExists("" + moduleDir + path_1.sep + "package.json");
        if (!hasPackageJson) {
            return checkParent();
        }
        var packageMeta = this.packageJsonReader.readPackageJson(moduleDir);
        if (packageMeta.name === undefined || packageMeta.version === undefined) {
            return checkParent();
        }
        return moduleDir;
    };
    return ModuleDirectoryLocator;
}());
exports.default = ModuleDirectoryLocator;
//# sourceMappingURL=ModuleDirectoryLocator.js.map