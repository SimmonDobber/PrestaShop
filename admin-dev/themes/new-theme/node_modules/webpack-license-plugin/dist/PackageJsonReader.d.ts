import IFileSystem from './types/IFileSystem';
import IPackageJson from './types/IPackageJson';
export default class PackageJsonReader {
    private fileSystem;
    private cache;
    constructor(fileSystem: IFileSystem);
    readPackageJson(moduleDir: string): IPackageJson;
}
