<?php 
/**
	Admin Page Framework v3.7.12 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/fen>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class fen_AdminPageFramework_Property_Base extends fen_AdminPageFramework_FrameworkUtility {
    private static $_aStructure_CallerInfo = array('sPath' => null, 'sType' => null, 'sName' => null, 'sURI' => null, 'sVersion' => null, 'sThemeURI' => null, 'sScriptURI' => null, 'sAuthorURI' => null, 'sAuthor' => null, 'sDescription' => null,);
    static public $_aLibraryData;
    public $_sPropertyType = '';
    public $oCaller;
    public $sCallerPath;
    public $aScriptInfo;
    public $aOptions;
    public $sClassName;
    public $sClassHash;
    public $sScript = '';
    public $sStyle = '';
    public $sStyleIE = '';
    public $aFieldTypeDefinitions = array();
    public static $_sDefaultScript = "";
    public static $_sDefaultStyle = "";
    public static $_sDefaultStyleIE = '';
    public $aEnqueuingScripts = array();
    public $aEnqueuingStyles = array();
    public $aResourceAttributes = array();
    public $iEnqueuedScriptIndex = 0;
    public $iEnqueuedStyleIndex = 0;
    public $bIsAdmin;
    public $bIsMinifiedVersion;
    public $sCapability;
    public $sStructureType;
    public $sTextDomain;
    public $sPageNow;
    public $_bSetupLoaded;
    public $bIsAdminAjax;
    public $sLabelPluginSettingsLink = null;
    public $aFooterInfo = array('sLeft' => '__SCRIPT_CREDIT__', 'sRight' => '__FRAMEWORK_CREDIT__',);
    public $_sFormRegistrationHook = 'current_screen';
    public $aFormArguments = array('caller_id' => '', 'structure_type' => '', 'action_hook_form_registration' => '',);
    public $aFormCallbacks = array('hfID' => null, 'hfTagID' => null, 'hfName' => null, 'hfNameFlat' => null, 'hfInputName' => null, 'hfInputNameFlat' => null, 'hfClass' => null,);
    public $sScriptType = 'unknown';
    public $sSettingNoticeActionHook = 'admin_notices';
    public $aHelpTabText = array();
    public $aHelpTabTextSide = array();
    public $sTitle = '';
    public function __construct($oCaller, $sCallerPath, $sClassName, $sCapability, $sTextDomain, $sStructureType) {
        $this->oCaller = $oCaller;
        $this->sCallerPath = $sCallerPath;
        $this->sClassName = $sClassName;
        $this->sCapability = empty($sCapability) ? 'manage_options' : $sCapability;
        $this->sTextDomain = empty($sTextDomain) ? 'fen' : $sTextDomain;
        $this->sStructureType = $sStructureType;
        $this->sPageNow = $this->getPageNow();
        $this->bIsAdmin = is_admin();
        $this->bIsAdminAjax = in_array($this->sPageNow, array('admin-ajax.php'));
        unset($this->aScriptInfo, $this->aOptions, $this->sScriptType, $this->sClassHash);
        $this->_setGlobals();
    }
    private function _setGlobals() {
        if (!isset($GLOBALS['afen_AdminPageFramework'])) {
            $GLOBALS['afen_AdminPageFramework'] = array('aFieldFlags' => array());
        }
    }
    public function setFormProperties() {
        $this->aFormArguments = $this->getFormArguments();
        $this->aFormCallbacks = $this->getFormCallbacks();
    }
    public function getFormArguments() {
        return array('caller_id' => $this->sClassName, 'structure_type' => $this->_sPropertyType, 'action_hook_form_registration' => $this->_sFormRegistrationHook,) + $this->aFormArguments;
    }
    public function getFormCallbacks() {
        return array('is_in_the_page' => array($this->oCaller, '_replyToDetermineWhetherToProcessFormRegistration'), 'load_fieldset_resource' => array($this->oCaller, '_replyToFieldsetResourceRegistration'), 'is_fieldset_registration_allowed' => null, 'capability' => array($this->oCaller, '_replyToGetCapabilityForForm'), 'saved_data' => array($this->oCaller, '_replyToGetSavedFormData'), 'section_head_output' => array($this->oCaller, '_replyToGetSectionHeaderOutput'), 'fieldset_output' => array($this->oCaller, '_replyToGetFieldOutput'), 'sectionset_before_output' => array($this->oCaller, '_replyToFormatSectionsetDefinition'), 'fieldset_before_output' => array($this->oCaller, '_replyToFormatFieldsetDefinition'), 'fieldset_after_formatting' => array($this->oCaller, '_replyToModifyFieldsetDefinition'), 'fieldsets_after_formatting' => array($this->oCaller, '_replyToModifyFieldsetsDefinitions'), 'is_sectionset_visible' => array($this->oCaller, '_replyToDetermineSectionsetVisibility'), 'is_fieldset_visible' => array($this->oCaller, '_replyToDetermineFieldsetVisibility'), 'secitonsets_before_registration' => array($this->oCaller, '_replyToModifySectionsets'), 'fieldsets_before_registration' => array($this->oCaller, '_replyToModifyFieldsets'), 'handle_form_data' => array($this->oCaller, '_replyToHandleSubmittedFormData'), 'hfID' => array($this->oCaller, '_replyToGetInputID'), 'hfTagID' => array($this->oCaller, '_replyToGetInputTagIDAttribute'), 'hfName' => array($this->oCaller, '_replyToGetFieldNameAttribute'), 'hfNameFlat' => array($this->oCaller, '_replyToGetFlatFieldName'), 'hfInputName' => array($this->oCaller, '_replyToGetInputNameAttribute'), 'hfInputNameFlat' => array($this->oCaller, '_replyToGetFlatInputName'), 'hfClass' => array($this->oCaller, '_replyToGetInputClassAttribute'), 'hfSectionName' => array($this->oCaller, '_replyToGetSectionName'),) + $this->aFormCallbacks;
    }
    static public function _setLibraryData() {
        self::$_aLibraryData = array('sName' => fen_AdminPageFramework_Registry::NAME, 'sURI' => fen_AdminPageFramework_Registry::URI, 'sScriptName' => fen_AdminPageFramework_Registry::NAME, 'sLibraryName' => fen_AdminPageFramework_Registry::NAME, 'sLibraryURI' => fen_AdminPageFramework_Registry::URI, 'sPluginName' => '', 'sPluginURI' => '', 'sThemeName' => '', 'sThemeURI' => '', 'sVersion' => fen_AdminPageFramework_Registry::getVersion(), 'sDescription' => fen_AdminPageFramework_Registry::DESCRIPTION, 'sAuthor' => fen_AdminPageFramework_Registry::AUTHOR, 'sAuthorURI' => fen_AdminPageFramework_Registry::AUTHOR_URI, 'sTextDomain' => fen_AdminPageFramework_Registry::TEXT_DOMAIN, 'sDomainPath' => fen_AdminPageFramework_Registry::TEXT_DOMAIN_PATH, 'sNetwork' => '', '_sitewide' => '',);
        return self::$_aLibraryData;
    }
    static public function _getLibraryData() {
        return isset(self::$_aLibraryData) ? self::$_aLibraryData : self::_setLibraryData();
    }
    protected function getCallerInfo($sCallerPath = '') {
        if (isset(self::$_aScriptDataCaches[$sCallerPath])) {
            return self::$_aScriptDataCaches[$sCallerPath];
        }
        $_aCallerInfo = self::$_aStructure_CallerInfo;
        $_aCallerInfo['sPath'] = $sCallerPath;
        $_aCallerInfo['sType'] = $this->_getCallerType($_aCallerInfo['sPath']);
        if ('unknown' == $_aCallerInfo['sType']) {
            self::$_aScriptDataCaches[$sCallerPath] = $_aCallerInfo;
            return $_aCallerInfo;
        }
        if ('plugin' == $_aCallerInfo['sType']) {
            self::$_aScriptDataCaches[$sCallerPath] = $this->getScriptData($_aCallerInfo['sPath'], $_aCallerInfo['sType']) + $_aCallerInfo;
            return self::$_aScriptDataCaches[$sCallerPath];
        }
        if ('theme' == $_aCallerInfo['sType']) {
            $_oTheme = wp_get_theme();
            self::$_aScriptDataCaches[$sCallerPath] = array('sName' => $_oTheme->Name, 'sVersion' => $_oTheme->Version, 'sThemeURI' => $_oTheme->get('ThemeURI'), 'sURI' => $_oTheme->get('ThemeURI'), 'sAuthorURI' => $_oTheme->get('AuthorURI'), 'sAuthor' => $_oTheme->get('Author'),) + $_aCallerInfo;
            return self::$_aScriptDataCaches[$sCallerPath];
        }
        self::$_aScriptDataCaches[$sCallerPath] = array();
        return self::$_aScriptDataCaches[$sCallerPath];
    }
    static private $_aScriptDataCaches = array();
    protected function _getCallerType($sScriptPath) {
        if (isset(self::$_aCallerTypeCache[$sScriptPath])) {
            return self::$_aCallerTypeCache[$sScriptPath];
        }
        $sScriptPath = str_replace('\\', '/', $sScriptPath);
        if (false !== strpos($sScriptPath, '/themes/')) {
            self::$_aCallerTypeCache[$sScriptPath] = 'theme';
            return 'theme';
        }
        if (false !== strpos($sScriptPath, '/plugins/')) {
            self::$_aCallerTypeCache[$sScriptPath] = 'plugin';
            return 'plugin';
        }
        self::$_aCallerTypeCache[$sScriptPath] = 'unknown';
        return 'unknown';
    }
    static private $_aCallerTypeCache = array();
    protected function _getOptions() {
        return array();
    }
    public function __get($sName) {
        if ('aScriptInfo' === $sName) {
            $this->sCallerPath = $this->sCallerPath ? $this->sCallerPath : $this->getCallerScriptPath(__FILE__);
            $this->aScriptInfo = $this->getCallerInfo($this->sCallerPath);
            return $this->aScriptInfo;
        }
        if ('aOptions' === $sName) {
            $this->aOptions = $this->_getOptions();
            return $this->aOptions;
        }
        if ('sClassHash' === $sName) {
            $this->sClassHash = md5($this->sClassName);
            return $this->sClassHash;
        }
        if ('sScriptType' === $sName) {
            $this->sScriptType = $this->_getCallerType($this->sCallerPath);
            return $this->sScriptType;
        }
        if ('oUtil' === $sName) {
            $this->oUtil = new fen_AdminPageFramework_WPUtility;
            return $this->oUtil;
        }
    }
}