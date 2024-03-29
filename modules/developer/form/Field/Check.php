<?php
/**
 * @package ImpressPages
 *
 */

/**
 * 
 * Antispam field. Add it to the form and you will be
 * protected agains spam bots.
 * Add captcha if you like to protect your self from human bots :)
 * This field is not called antispam because some templates might 
 * try to add field type as a classname. In that case it would be easier
 * for spamers. So let it be 'Check'. Ok?
 * 
 * ATTENTION!
 * This field is being added automatically to all ImpressPages forms.
 * Use $form->setAntispamEnabled(false) to disable it.
 * 
 * How it works:
 * 
 * 1. It inserts input field that is hidden using inline style. If robots fills in this field,
 * form doesn't validate. Real users doesn't see this value. So they don't fill this field :)
 * 
 * 2. It adds md5 coded value mixed of some website data and current date. That means,
 * if someone would try to write a bot particulary for your website, they 
 * will need to get new pass from your website every day. Offten they just don't
 * try so hard.
 * 
 * If you know any better ways, please contribute on GitHub.
 * 
 * 
 * @author Mangirdas
 *
 */
namespace Modules\developer\form\Field;


class Check extends Field{
    
    public function __construct($options) {
        parent::__construct($options);
        $this->removeAttribute('id'); //this field has two inputs. We need to implement support of two different ID's or remove such feature :)
        $this->addValidator('Check');
    }
    
    public function render($doctype) {
        $attributesStr = '';
        
        return '
<input '.$this->getAttributesStr($doctype).' class="'.implode(' ',$this->getClasses()).'" name="'.htmlspecialchars($this->getName()).'[]"  '.$this->getValidationAttributesStr($doctype).' type="hidden" value="" />
<input '.$this->getAttributesStr($doctype).' class="'.implode(' ',$this->getClasses()).'" name="'.htmlspecialchars($this->getName()).'[]"  '.$this->getValidationAttributesStr($doctype).' type="hidden" value="'.htmlspecialchars(md5(date("Y-m-d").SESSION_NAME)).'" />
';
    }
    
    public function getLayout() {
        return self::LAYOUT_BLANK;
    }
    
    public function getType() {
        return self::TYPE_SYSTEM;
    }
    
    /**
    * CSS class that should be applied to surrounding element of this field. By default empty. Extending classes should specify their value.
    */
    public function getTypeClass() {
        return 'check';
    }    
    
}