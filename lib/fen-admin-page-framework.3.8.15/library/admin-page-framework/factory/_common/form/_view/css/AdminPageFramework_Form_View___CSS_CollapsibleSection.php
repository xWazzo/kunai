<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/fen>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class fen_AdminPageFramework_Form_View___CSS_Base extends fen_AdminPageFramework_FrameworkUtility {
    public $aAdded = array();
    public function add($sCSSRules) {
        $this->aAdded[] = $sCSSRules;
    }
    public function get() {
        $_sCSSRules = $this->_get() . PHP_EOL;
        $_sCSSRules.= $this->_getVersionSpecific();
        $_sCSSRules.= implode(PHP_EOL, $this->aAdded);
        return $_sCSSRules;
    }
    protected function _get() {
        return '';
    }
    protected function _getVersionSpecific() {
        return '';
    }
}
class fen_AdminPageFramework_Form_View___CSS_CollapsibleSection extends fen_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getCollapsibleSectionsRules();
    }
    private function _getCollapsibleSectionsRules() {
        $_sCSSRules = ".fen-collapsible-sections-title.fen-collapsible-type-box, .fen-collapsible-section-title.fen-collapsible-type-box{font-size:13px;background-color: #fff;padding: 1em 2.6em 1em 2em;border-top: 1px solid #eee;border-bottom: 1px solid #eee;}.fen-collapsible-sections-title.fen-collapsible-type-box.collapsed.fen-collapsible-section-title.fen-collapsible-type-box.collapsed {border-bottom: 1px solid #dfdfdf;margin-bottom: 1em; }.fen-collapsible-section-title.fen-collapsible-type-box {margin-top: 0;}.fen-collapsible-section-title.fen-collapsible-type-box.collapsed {margin-bottom: 0;}#poststuff .fen-collapsible-sections-title.fen-collapsible-type-box.fen-section-title > .section-title-outer-container > .section-title-container > .section-title,#poststuff .fen-collapsible-section-title.fen-collapsible-type-box.fen-section-title > .section-title-outer-container > .section-title-container > .section-title{font-size: 1em;margin: 0 1em 0 0; }#poststuff .fen-collapsible-section-title.fen-collapsible-type-box.fen-section-title > .section-title-outer-container > .section-title-container > fieldset {line-height: 0; }#poststuff .fen-collapsible-section-title.fen-collapsible-type-box.fen-section-title > .section-title-outer-container > .section-title-container > fieldset .fen-field {margin: 0;padding: 0;}.fen-collapsible-sections-title.fen-collapsible-type-box.accordion-section-title:after,.fen-collapsible-section-title.fen-collapsible-type-box.accordion-section-title:after {top: 0.88em;top: 34%;right: 15px;}right: 15px;}}*/.fen-collapsible-sections-title.fen-collapsible-type-box.accordion-section-title:after,.fen-collapsible-section-title.fen-collapsible-type-box.accordion-section-title:after {content: '\\f142';}.fen-collapsible-sections-title.fen-collapsible-type-box.accordion-section-title.collapsed:after,.fen-collapsible-section-title.fen-collapsible-type-box.accordion-section-title.collapsed:after {content: '\\f140';} .fen-collapsible-sections-content.fen-collapsible-content.accordion-section-content,.fen-collapsible-section-content.fen-collapsible-content.accordion-section-content,.fen-collapsible-sections-content.fen-collapsible-content-type-box, .fen-collapsible-section-content.fen-collapsible-content-type-box{border: 1px solid #dfdfdf;border-top: 0;background-color: #fff;}tbody.fen-collapsible-content {display: table-caption; padding: 10px 20px 15px 20px;}tbody.fen-collapsible-content.table-caption {display: table-caption; }.fen-collapsible-toggle-all-button-container {margin-top: 1em;margin-bottom: 1em;width: 100%;display: table; }.fen-collapsible-toggle-all-button.button {height: 36px;line-height: 34px;padding: 0 16px 6px;font-size: 20px;width: auto;}.flipped > .fen-collapsible-toggle-all-button.button.dashicons {-moz-transform: scaleY(-1);-webkit-transform: scaleY(-1);transform: scaleY(-1);filter: flipv; }.fen-collapsible-section-title.fen-collapsible-type-box .fen-repeatable-section-buttons {margin: 0; }.fen-collapsible-section-title.fen-collapsible-type-box .fen-repeatable-section-buttons.section_title_field_sibling {margin-top: 0;}.fen-collapsible-section-title.fen-collapsible-type-box .repeatable-section-button {background: none; line-height: 1.8em; margin: 0;padding: 0;width: 2em;height: 2em;text-align: center;}.fen-collapsible-sections-title.fen-collapsible-type-box .section-title-height-fixer, .fen-collapsible-section-title.fen-collapsible-type-box .section-title-height-fixer {height: 100%;width: 0;display: inline-block;vertical-align: middle;}.fen-collapsible-sections-title.fen-collapsible-type-box .section-title-outer-container, .fen-collapsible-section-title.fen-collapsible-type-box .section-title-outer-container {width: 88%;display: inline-block;text-align: left;vertical-align: middle;}.fen-collapsible-sections-title.fen-collapsible-type-box .fen-repeatable-section-buttons-outer-container,.fen-collapsible-section-title.fen-collapsible-type-box .fen-repeatable-section-buttons-outer-container {width: 10.88%;min-width: 60px; display: inline-block;text-align: right;vertical-align: middle;}@media only screen and ( max-width: 782px ) {.fen-collapsible-sections-title.fen-collapsible-type-box .section-title-outer-container, .fen-collapsible-section-title.fen-collapsible-type-box .section-title-outer-container {width: 87.8%;}}.accordion-section-content.fen-collapsible-content-type-button {background-color: transparent;}.fen-collapsible-button {color: #888;margin-right: 0.4em;font-size: 0.8em;}.fen-collapsible-button-collapse {display: inline;} .collapsed .fen-collapsible-button-collapse {display: none;}.fen-collapsible-button-expand {display: none;}.collapsed .fen-collapsible-button-expand {display: inline;}.fen-collapsible-section-title .fen-fields {display: inline;vertical-align: middle; line-height: 1em; }.fen-collapsible-section-title .fen-field {float: none;}.fen-collapsible-section-title .fen-fieldset {display: inline;margin-right: 1em;vertical-align: middle; }#poststuff .fen-collapsible-title.fen-collapsible-section-title .section-title-container.has-fields .section-title{width: auto;display: inline-block;margin: 0 1em 0 0.4em;vertical-align: middle;}";
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".fen-collapsible-sections-title.fen-collapsible-type-box.accordion-section-title:after,.fen-collapsible-section-title.fen-collapsible-type-box.accordion-section-title:after {content: '';top: 18px;}.fen-collapsible-sections-title.fen-collapsible-type-box.accordion-section-title.collapsed:after,.fen-collapsible-section-title.fen-collapsible-type-box.accordion-section-title.collapsed:after {content: '';} .fen-collapsible-toggle-all-button.button {font-size: 1em;}.fen-collapsible-section-title.fen-collapsible-type-box .fen-repeatable-section-buttons {top: -8px;}";
        }
        return $_sCSSRules;
    }
}
