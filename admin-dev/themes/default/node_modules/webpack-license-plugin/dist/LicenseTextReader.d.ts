import IAlertAggregator from './types/IAlertAggregator';
import IDefaultLicenseTextProvider from './types/IDefaultLicenseTextProvider';
import IFileSystem from './types/IFileSystem';
import IPackageJson from './types/IPackageJson';
import IPluginOptions from './types/IPluginOptions';
/**
 * Reads license text from license file.
 *
 * If no license file is found, default license texts can automatically
 * be added (either retrieved from spdx github repository or read from
 * a directory).
 */
export default class LicenseTextReader {
    private alertAggregator;
    private fileSystem;
    private options;
    private defaultLicenseReader;
    constructor(alertAggregator: IAlertAggregator, fileSystem: IFileSystem, options: Pick<IPluginOptions, 'replenishDefaultLicenseTexts'>, defaultLicenseReader?: IDefaultLicenseTextProvider);
    readLicenseText(meta: IPackageJson, license: string, moduleDir: string): Promise<string | null>;
    getLicenseFilename(paths: string[]): string | null;
    readFile(directory: string, filename: string): string;
    getDefaultLicenseText(license: string): Promise<string>;
}
