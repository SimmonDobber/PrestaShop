"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
// readFileSync(path: string): Buffer;
// readlink(path: string, callback: (err: Error | undefined | null, linkString: string) => void): void;
// readlinkSync(path: string): string;
// statSync(path: string): any;
var WebpackFileSystem = /** @class */ (function () {
    function WebpackFileSystem(fs) {
        this.fs = fs;
    }
    WebpackFileSystem.prototype.pathExists = function (filename) {
        try {
            this.fs.statSync(filename);
            return true;
        }
        catch (e) {
            return false;
        }
    };
    WebpackFileSystem.prototype.readFile = function (filename) {
        return this.fs.readFileSync(filename).toString('utf8');
    };
    WebpackFileSystem.prototype.listPaths = function (dir) {
        return this.fs.readdirSync(dir);
    };
    return WebpackFileSystem;
}());
exports.default = WebpackFileSystem;
//# sourceMappingURL=WebpackFileSystem.js.map