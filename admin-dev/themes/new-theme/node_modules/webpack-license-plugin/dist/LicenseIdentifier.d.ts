import IAlertAggregator from './types/IAlertAggregator';
import IPackageJson from './types/IPackageJson';
import IPluginOptions from './types/IPluginOptions';
/**
 * Identifies license type based on package.json and selects
 * preferred license type if multiple are found
 *
 * @todo handle spdx OR case
 * @todo handle license ambiguity via option (default to choosing the first)
 */
export default class LicenseIdentifier {
    private alertAggregator;
    private readonly preferredLicenses;
    constructor(alertAggregator: IAlertAggregator, preferredLicenses?: string[]);
    identifyLicense(meta: IPackageJson, options: Pick<IPluginOptions, 'licenseOverrides' | 'unacceptableLicenseTest'>): string | null;
    private findPreferredLicense;
}
