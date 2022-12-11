import IAssetManager from './types/IAssetManager';
import ILicenseMetaAggregator from './types/ILicenseMetaAggregator';
import IModuleDirectoryLocator from './types/IModuleDirectoryLocator';
import IPluginOptions from './types/IPluginOptions';
export default class LicenseFileWriter {
    private assetManager;
    private moduleDirectoryLocator;
    private licenseMetaAggregator;
    constructor(assetManager: IAssetManager, moduleDirectoryLocator: IModuleDirectoryLocator, licenseMetaAggregator: ILicenseMetaAggregator);
    writeLicenseFiles(filenames: string[], options: IPluginOptions): Promise<void>;
    getModuleDirs(filenames: string[]): string[];
}
