<?php
/**
 * @package ImpressPages
 *
 */

namespace Modules\developer\form\Field;


class Text extends Field{
    
    public function render($doctype) {
        $attributesStr = '';
        return '<input '.$this->getAttributesStr($doctype).' class="form-control '.implode(' ',$this->getClasses()).'" name="'.htmlspecialchars($this->getName()).'" '.$this->getValidationAttributesStr($doctype).' type="text" value="'.htmlspecialchars($this->getDefaultValue()).'" />';
    }
    
    /**
    * CSS class that should be applied to surrounding element of this field. By default empty. Extending classes should specify their value.
    */
    public function getTypeClass() {
        return 'text';
    }
    
}