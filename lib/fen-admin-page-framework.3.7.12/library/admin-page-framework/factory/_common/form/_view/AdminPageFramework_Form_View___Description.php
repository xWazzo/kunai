<?php 
/**
	Admin Page Framework v3.7.12 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/fen>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class fen_AdminPageFramework_Form_View___Description extends fen_AdminPageFramework_FrameworkUtility {
    public $aDescriptions = array();
    public $sClassAttribute = 'fen-form-element-description';
    public function __construct() {
        $_aParameters = func_get_args() + array($this->aDescriptions, $this->sClassAttribute,);
        $this->aDescriptions = $this->getAsArray($_aParameters[0]);
        $this->sClassAttribute = $_aParameters[1];
    }
    public function get() {
        if (empty($this->aDescriptions)) {
            return '';
        }
        $_aOutput = array();
        foreach ($this->aDescriptions as $_sDescription) {
            $_aOutput[] = "<p class='" . esc_attr($this->sClassAttribute) . "'>" . "<span class='description'>" . $_sDescription . "</span>" . "</p>";
        }
        return implode(PHP_EOL, $_aOutput);
    }
}
