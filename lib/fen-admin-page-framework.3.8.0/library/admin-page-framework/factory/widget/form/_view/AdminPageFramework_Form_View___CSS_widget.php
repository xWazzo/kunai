<?php 
/**
	Admin Page Framework v3.8.0 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/fen>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class fen_AdminPageFramework_Form_View___CSS_widget extends fen_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getWidgetRules();
    }
    private function _getWidgetRules() {
        return ".widget .fen-section .form-table > tbody > tr > td,.widget .fen-section .form-table > tbody > tr > th{display: inline-block;width: 100%;padding: 0;float: right;clear: right; }.widget .fen-field,.widget .fen-input-label-container{width: 100%;}.widget .sortable .fen-field {padding: 4% 4.4% 3.2% 4.4%;width: 91.2%;}.widget .fen-field input {margin-bottom: 0.1em;margin-top: 0.1em;}.widget .fen-field input[type=text],.widget .fen-field textarea {width: 100%;} @media screen and ( max-width: 782px ) {.widget .fen-fields {width: 99.2%;}.widget .fen-field input[type='checkbox'], .widget .fen-field input[type='radio'] {margin-top: 0;}}";
    }
    protected function _getVersionSpecific() {
        $_sCSSRules = '';
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".widget .fen-section table.mceLayout {table-layout: fixed;}";
        }
        if (version_compare($GLOBALS['wp_version'], '3.8', '>=')) {
            $_sCSSRules.= ".widget .fen-section .form-table th{font-size: 13px;font-weight: normal;margin-bottom: 0.2em;}.widget .fen-section .form-table {margin-top: 1em;}";
        }
        return $_sCSSRules;
    }
}