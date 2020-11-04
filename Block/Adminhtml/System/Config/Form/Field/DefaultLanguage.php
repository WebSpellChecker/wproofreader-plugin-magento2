<?php
namespace WebSpellChecker\WProofreader\Block\Adminhtml\System\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field as FormField;

use WebSpellChecker\WProofreader\Api\DefaultLanguageInterface;

/**
 * Class LicenseKey
 * @package WebSpellChecker\WProofreader\Block\System\Config\Form\Field
 */
class DefaultLanguage extends FormField
{
    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $html = '<select id="webspellcheker_wproofreader_settings_default_language" name="groups[settings][fields][default_language][value]" class=" select admin__control-select" data-ui-id="adminhtml-system-config-form-field-defaultlanguage-0-select-groups-settings-fields-default-language-value">';
        $value = $element->getData('value');

        foreach (DefaultLanguageInterface::DEFAULT_LANGUAGES as $code => $label) {
            if($code === $value) {
                $html .= '<option value="' . $code . '" selected="selected">' . __($label) . '</option>';
            } else {
                $html .= '<option value="' . $code . '">' . __($label) . '</option>';
            }
        }

        $html .= '</select>';

        return $html;
    }
}
