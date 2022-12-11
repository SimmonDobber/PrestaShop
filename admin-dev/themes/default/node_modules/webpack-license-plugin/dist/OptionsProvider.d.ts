import IAlertAggregator from './types/IAlertAggregator';
import IPluginOptions from './types/IPluginOptions';
export default class OptionsProvider {
    private readonly alertAggregator;
    constructor(alertAggregator: IAlertAggregator);
    getOptions(inputOptions: Partial<IPluginOptions>): IPluginOptions;
    validateOptions(inputOptions: Partial<IPluginOptions>): void;
}
