import IAlertAggregator from './types/IAlertAggregator';
import IFileSystem from './types/IFileSystem';
import ILicenseIdentifier from './types/ILicenseIdentifier';
import ILicenseMetaAggregator from './types/ILicenseMetaAggregator';
import ILicenseTextReader from './types/ILicenseTextReader';
import IPackageJson from './types/IPackageJson';
import IPackageJsonReader from './types/IPackageJsonReader';
import IPackageLicenseMeta from './types/IPackageLicenseMeta';
import IPluginOptions from './types/IPluginOptions';
export default class LicenseMetaAggregator implements ILicenseMetaAggregator {
    private options;
    private packageJsonReader;
    private licenseIdentifier;
    private licenseTextReader;
    constructor(fileSystem: IFileSystem, alertAggregator: IAlertAggregator, options: IPluginOptions, packageJsonReader: IPackageJsonReader, licenseIdentifier?: ILicenseIdentifier, licenseTextReader?: ILicenseTextReader);
    aggregateMeta(moduleDirs: string[]): Promise<IPackageLicenseMeta[]>;
    getAuthor(meta: Pick<IPackageJson, 'author'>): string;
    getRepository(meta: Pick<IPackageJson, 'repository'>): string;
}
