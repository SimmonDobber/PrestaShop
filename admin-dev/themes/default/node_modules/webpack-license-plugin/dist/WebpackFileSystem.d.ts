import IFileSystem from './types/IFileSystem';
export default class WebpackFileSystem implements IFileSystem {
    private fs;
    constructor(fs: any);
    pathExists(filename: string): boolean;
    readFile(filename: string): string;
    listPaths(dir: string): string[];
}
