<?php
/**
 * Microweber auto provision plesk plugin
 * Author: Bozhidar Slaveykov
 * @email: info@microweber.com
 * Copyright: Microweber CMS
 */

class Modules_Microweber_LicenseData
{
    public static function getAppInstallationsCount()
    {
        return (int) pm_Settings::get('mw_installations_count');
    }

    public static function hasActiveLicense()
    {
        $limitations = self::getLimitations();
        if ($limitations['app_installations_freeze']) {
            return false;
        }

        return true;
    }

    public static function getLimitations()
    {
        // Licenses
        $appInstallationsLimit = 'nolimit';

        $license = pm_License::getAdditionalKey('microweber');
        if (!empty($license)) {
            $keyBody = $license->getProperty('key-body');
            if (!empty($keyBody)) {
                $keyBodyJson= json_decode($keyBody, true);
                if (!empty($keyBodyJson)) {
                    if (isset($keyBodyJson['limit'])) {
                        $appInstallationsLimit = $keyBodyJson['limit'];
                    }
                }
            }
        }

        $appInstallationsCount = self::getAppInstallationsCount();

        // Freeze app installations
        $appInstallationsFreeze = true;
        if (is_numeric($appInstallationsLimit)) {
            if ($appInstallationsCount < ($appInstallationsLimit + 1)) {
                $appInstallationsFreeze = false;
            }
        }

        if ($appInstallationsLimit == 'nolimit') {
            $appInstallationsFreeze = false;
        }

        return [
            'app_installations_limit'=>$appInstallationsLimit,
            'app_installations_count'=>$appInstallationsCount,
            'app_installations_freeze'=>$appInstallationsFreeze,
        ];
    }

	public static function getLicenseData($whiteLabelKey = false, $relType = 'modules/white_label')
	{
		if ($whiteLabelKey) {

			$whiteLabelKey = trim($whiteLabelKey);

			$checkUrl = Modules_Microweber_Config::getUpdateAppUrl() . "/?api_function=validate_licenses&local_key=$whiteLabelKey&rel_type=$relType";
            $data = Modules_Microweber_Helper::getJsonFromUrl($checkUrl);

			if ($data and isset($data[$relType])) {
				$keyData = $data[$relType];
				return $keyData;
			}
		}
	}
	
}
