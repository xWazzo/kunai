<?php 
/**
	Admin Page Framework v3.7.12 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/fen>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class fen_AdminPageFramework_Form_post_meta_box extends fen_AdminPageFramework_Form_Meta {
    public $sStructureType = 'post_meta_box';
    public function construct() {
        $this->_addDefaultResources();
    }
    private function _addDefaultResources() {
        $_oCSS = new fen_AdminPageFramework_Form_View___CSS_meta_box;
        $this->addResource('inline_styles', $_oCSS->get());
    }
}
