<?php

namespace WebSpellChecker\WProofreader\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

use WebSpellChecker\WProofreader\Api\LicenseKeyInterface;

/**
 * Class Data
 * @package WebSpellChecker\WProofreader\Helper
 */
class Data extends AbstractHelper
{
    /**
     * XML PATH MODULE ENABLE
     */
    const XML_PATH_MODULE_ENABLE = 'webspellcheker_wproofreader/settings/is_enable';

    /**
     * XML PATH MODULE ENABLE BADGE
     */
    const XML_PATH_MODULE_ENABLE_BADGE = 'webspellcheker_wproofreader/settings/is_enable_badge';

    /**
     * XML PATH MODULE LICENSE KEY
     */
    const XML_PATH_MODULE_LICENSE_KEY = 'webspellcheker_wproofreader/settings/license_key';

    /**
     * XML PATH MODULE DEFAULT LANGUAGE
     */
    const XML_PATH_MODULE_DEFAULT_LANGUAGE = 'webspellcheker_wproofreader/settings/default_language';

    /**
     * @return bool
     */
    public function isEnable()
    {
        return $this->scopeConfig->isSetFlag(static::XML_PATH_MODULE_ENABLE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return bool
     */
    public function isEnableBadge()
    {
        return $this->scopeConfig->isSetFlag(static::XML_PATH_MODULE_ENABLE_BADGE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed|string
     */
    public function getLicenseKey()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_MODULE_LICENSE_KEY, ScopeInterface::SCOPE_STORE) ?? LicenseKeyInterface::LICENSE_KEY;
    }

    /**
     * @return mixed
     */
    public function getDefaultLanguage()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_MODULE_DEFAULT_LANGUAGE, ScopeInterface::SCOPE_STORE);
    }
}
