import IFileSystem from './types/IFileSystem';
import IModuleDirectoryLocator from './types/IModuleDirectoryLocator';
import IPackageJsonReader from './types/IPackageJsonReader';
/**
 * Locates module directories for given filenames by searching
 * the directory tree for package.json files.
 */
export default class ModuleDirectoryLocator implements IModuleDirectoryLocator {
    private fileSystem;
    private buildRoot;
    private packageJsonReader;
    constructor(fileSystem: IFileSystem, buildRoot: string, packageJsonReader: IPackageJsonReader);
    getModuleDir(filename: string): string | null;
    private checkModuleDir;
}
