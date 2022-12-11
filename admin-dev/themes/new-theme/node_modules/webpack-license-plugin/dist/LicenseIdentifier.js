"use strict";
var __values = (this && this.__values) || function(o) {
    var s = typeof Symbol === "function" && Symbol.iterator, m = s && o[s], i = 0;
    if (m) return m.call(o);
    if (o && typeof o.length === "number") return {
        next: function () {
            if (o && i >= o.length) o = void 0;
            return { value: o && o[i++], done: !o };
        }
    };
    throw new TypeError(s ? "Object is not iterable." : "Symbol.iterator is not defined.");
};
Object.defineProperty(exports, "__esModule", { value: true });
// @ts-ignore
var validate = require("spdx-expression-validate");
/**
 * Identifies license type based on package.json and selects
 * preferred license type if multiple are found
 *
 * @todo handle spdx OR case
 * @todo handle license ambiguity via option (default to choosing the first)
 */
var LicenseIdentifier = /** @class */ (function () {
    function LicenseIdentifier(alertAggregator, preferredLicenses) {
        if (preferredLicenses === void 0) { preferredLicenses = []; }
        this.alertAggregator = alertAggregator;
        this.preferredLicenses = preferredLicenses;
    }
    LicenseIdentifier.prototype.identifyLicense = function (meta, options) {
        var id = meta.name + "@" + meta.version;
        var license;
        if (options.licenseOverrides[id]) {
            license = options.licenseOverrides[id];
        }
        else if (typeof meta.license === 'object') {
            license = meta.license.type;
        }
        else if (meta.license) {
            license = meta.license;
        }
        else if (Array.isArray(meta.licenses) && meta.licenses.length > 0) {
            // handle deprecated `licenses` field
            license =
                this.findPreferredLicense(meta.licenses.map(function (l) { return l.type; })) ||
                    meta.licenses[0].type;
        }
        else if (typeof meta.licenses === 'string') {
            // handle invalid string values for deprecated `licenses` field
            // unfortunately, these are rather common
            license = meta.licenses;
        }
        if (!license) {
            this.alertAggregator.addError("Could not find license info for " + id);
        }
        else if (options.unacceptableLicenseTest(license)) {
            this.alertAggregator.addError("Found unacceptable license \"" + license + "\" for " + id);
        }
        else if (!validate(license)) {
            this.alertAggregator.addError("License \"" + license + "\" for " + id + " is not a valid SPDX expression!");
        }
        return license || null;
    };
    LicenseIdentifier.prototype.findPreferredLicense = function (licenseTypes) {
        var e_1, _a, e_2, _b;
        try {
            for (var _c = __values(this.preferredLicenses), _d = _c.next(); !_d.done; _d = _c.next()) {
                var preferredLicenseType = _d.value;
                try {
                    for (var licenseTypes_1 = (e_2 = void 0, __values(licenseTypes)), licenseTypes_1_1 = licenseTypes_1.next(); !licenseTypes_1_1.done; licenseTypes_1_1 = licenseTypes_1.next()) {
                        var licenseType = licenseTypes_1_1.value;
                        if (preferredLicenseType === licenseType) {
                            return preferredLicenseType;
                        }
                    }
                }
                catch (e_2_1) { e_2 = { error: e_2_1 }; }
                finally {
                    try {
                        if (licenseTypes_1_1 && !licenseTypes_1_1.done && (_b = licenseTypes_1.return)) _b.call(licenseTypes_1);
                    }
                    finally { if (e_2) throw e_2.error; }
                }
            }
        }
        catch (e_1_1) { e_1 = { error: e_1_1 }; }
        finally {
            try {
                if (_d && !_d.done && (_a = _c.return)) _a.call(_c);
            }
            finally { if (e_1) throw e_1.error; }
        }
        return null;
    };
    return LicenseIdentifier;
}());
exports.default = LicenseIdentifier;
//# sourceMappingURL=LicenseIdentifier.js.map