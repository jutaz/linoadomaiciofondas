<?php
/**
 * @package ImpressPages
 *
 */

namespace Modules\developer\form\Field;


class Submit extends Field{
    
    public function render($doctype) {
        return '<input '.$this->getAttributesStr($doctype).' class="btn btn-default '.implode(' ',$this->getClasses()).'" name="'.htmlspecialchars($this->getName()).'" '.$this->getValidationAttributesStr($doctype).' type="submit" value="'.htmlspecialchars($this->getDefaultValue()).'" />';
    }
    
    public function getLayout() {
        return self::LAYOUT_DEFAULT;
    }
    
    
    public function getType() {
        return self::TYPE_SYSTEM;
    }
    
    /**
    * CSS class that should be applied to surrounding element of this field. By default empty. Extending classes should specify their value.
    */
    public function getTypeClass() {
        return 'submit';
    }    
    
}