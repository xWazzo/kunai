<?php
/**
 * Front End Ninja
 * http://frontend.ninja
 */

/**
 * Settings Apparience
 * 
 * @date        08/03/2017
 * @since       1.0.0
 * @package     Front End Ninja
 */

class APF_Fen_Settings_Social_Networks {

  public function __construct( $oFactory, $sPageSlug, $sTabSlug ) {
  
    $this->oFactory     = $oFactory;
    $this->sClassName   = $oFactory->oProp->sClassName;
    $this->sPageSlug    = $sPageSlug; 
    $this->sTabSlug     = $sTabSlug;
    $this->sSectionID   = $this->sTabSlug;
         
    $this->_addTab();
  
  }
  
  private function _addTab() {
    
    $this->oFactory->addInPageTabs(    
      $this->sPageSlug, // target page slug
      array(
        'tab_slug'      => $this->sTabSlug,
        'title'         => __( 'Social Networks', 'front-end-ninja' ),
      )
    );  
    
    // load + page slug + tab slug
    add_action( 'load_' . $this->sPageSlug . '_' . $this->sTabSlug, array( $this, 'replyToLoadTab' ) );
  
  }
  
  /**
   * Triggered when the tab is loaded.
   */
  public function replyToLoadTab( $oAdminPage ) {
    
    
    // $this->registerFieldTypes( $this->sClassName );
    
    add_action( 'do_' . $this->sPageSlug . '_' . $this->sTabSlug, array( $this, 'replyToDoTab' ) );
    
    // Section
    $oAdminPage->addSettingSections(    
      $this->sPageSlug, // the target page slug                
      array(
        'section_id'    => $this->sSectionID,
        'tab_slug'      => $this->sTabSlug,
        'section_tab_slug'  => 'social_network_link',
        'title'         => __( 'Social Networks', 'front-end-ninja' ),
        'description'   => __( 'Agrega las redes sociales al sitio web.', 'front-end-ninja' ),
        'repeatable'        => true,
        'sortable'          => true,
      )
    );        
    
    $oAdminPage->addSettingFields(
      $this->sSectionID, // the target section id
      array(
        'field_id'      => 'tab_title',
        'type'          => 'section_title',
      ),
      array(
        'field_id'      => 'title',
        'title'         => __( 'Texto', 'front-end-ninja' ),
        'description'         => __( 'Este título es el que aparecerá a un lado del ícono.', 'front-end-ninja' ),
        'type'          => 'text',
        'attributes'       => array(
        'placeholder '  => 'Facebook',
        ),
      ),
      array(
        'field_id'      => 'select',
        'title'         => __( 'Ícono', 'front-end-ninja' ),
        'type'          => 'select',
        'default'       => '',
        'label'         => array(
        ''                  =>  '',
        '500px'             =>  '500px',
        'amazon'            =>  'Amazon',
        'android'           =>  'Android',
        'behance'           =>  'Behance',
        'behance-square'    =>  'Behance-square',
        'deviantart'        =>  'Deviantart',
        'dropbox'           =>  'Dropbox',
        'envelope'          =>  'Mail',
        'facebook'          =>  'Facebook',
        'facebook-official' =>  'Facebook-official',
        'facebook-square'   =>  'Facebook-square',
        'flickr'            =>  'Flickr',
        'foursquare'        =>  'Foursquare',
        'google-plus'       =>  'Google-plus',
        'instagram'         =>  'Instagram',
        'linkedin'          =>  'Linkedin',
        'linkedin-square'   =>  'Linkedin-square',
        'pinterest'         =>  'Pinterest',
        'pinterest-p'       =>  'Pinterest-p',
        'pinterest-square'  =>  'Pinterest-square',
        'skype'             =>  'Skype',
        'spotify'           =>  'Spotify',
        'tumblr'            =>  'Tumblr',
        'tumblr-square'     =>  'Tumblr-square',
        'twitter'           =>  'Twitter',
        'twitter-square'    =>  'Twitter-square',
        'vimeo'             =>  'Vimeo',
        'vimeo-square'      =>  'Vimeo-square',
        'vine'              =>  'Vine',
        'whatsapp'          =>  'Whatsapp',
        'yelp'              =>  'Yelp',
        'youtube'           =>  'Youtube',
        'youtube-play'      =>  'Youtube-play',
        'youtube-square'    =>  'Youtube-square',
        ),
      ),
      array(
        'field_id'      => 'custom_icon',
        'title'         => __( 'Ícono de Font Awesome', 'front-end-ninja' ),
        'description'   => __( 'Agrega otro ícono de <a href="http://fortawesome.github.io/Font-Awesome/icons/" rel="no_follow">FontAwesome</a> escribiendo su nombre en este campo*. <br><small>*Si se escribe algo en este campo y se selecciona un ícono en la opción superior, <code>tendrá prioridad este campo</code>.</small>', 'front-end-ninja' ),
        'type'          => 'text',
        'attributes'       => array(
        'placeholder '  => 'circle-o',
        ),
      ),
      array(
        'field_id'      => 'link_url',
        'title'         => __( 'Link', 'front-end-ninja' ),
        'type'          => 'text',
        'attributes'       => array(
        'placeholder '  => 'http://www.',
        ),
      )
    );
    
  }
      
  
  public function replyToDoTab() {        
    submit_button();
  }
  
}