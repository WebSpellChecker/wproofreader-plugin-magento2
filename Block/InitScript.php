<?php

namespace WebSpellChecker\WProofreader\Block;

use Magento\Framework\View\Element\Template;

use WebSpellChecker\WProofreader\Helper\Data;
use WebSpellChecker\WProofreader\Api\LicenseKeyInterface;

/**
 * Class InitScript
 * @package WebSpellChecker\WProofreader\Block
 */
class InitScript extends Template
{
    /**
     * @var Data
     */
    protected $_helper;

    /**
     * InitScript constructor.
     * @param Template\Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_helper = $helper;
    }

    /**
     * @return bool
     */
    public function isEnable()
    {
        return (bool) $this->_helper->isEnable();
    }

    /**
     * @return bool
     */
    public function isEnableBadge()
    {
        return (bool) $this->_helper->isEnableBadge();
    }

    /**
     * @return mixed|string
     */
    public function getLicenseKey()
    {
        return $this->_helper->getLicenseKey();
    }

    /**
     * @return bool
     */
    public function isTrial()
    {
        return $this->getLicenseKey() === LicenseKeyInterface::LICENSE_KEY;
    }

    /**
     * @return mixed
     */
    public function getDefaultLanguage()
    {
        return $this->_helper->getDefaultLanguage();
    }
}
