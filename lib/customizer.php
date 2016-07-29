<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

function customize_register($wp_customize) {

	// Textarea control
	class Customize_Textarea_Control extends \WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() {
	        ?>
	        <label>
	        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>
	        <?php
	    }
	}
	// Hidden control
	class Customize_Hidden_Control extends \WP_Customize_Control {
	    public $type = 'hidden';

	    public function render_content() {
	        ?>
	        <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea( $this->value() ); ?>">
	        <?php
	    }
	}

	/**
	 * Add postMessage support
	 */
	$wp_customize->get_setting('blogname')->transport = 'postMessage';

	/**
	* Create Logo Setting and Upload Control
	*/
	// add a setting for the site logo
	$wp_customize->add_setting('site_logo');
	$wp_customize->add_setting('site_logo_alt');

	// Add a control to upload the logo
	$wp_customize->add_control( new \WP_Customize_Media_Control( $wp_customize, 'site_logo', array(
		'label' => 'Upload Logo',
		'section' => 'title_tagline',
		'settings' => 'site_logo',
		'mime_type' => 'image',
		'priority' => 40,
	) ) );
	$wp_customize->add_control( new \WP_Customize_Media_Control( $wp_customize, 'site_logo_alt', array(
		'label' => 'Upload Alternative Logo',
		'section' => 'title_tagline',
		'settings' => 'site_logo_alt',
		'mime_type' => 'image',
		'priority' => 50,
	) ) );

	/**
	* Create Logo Setting and Upload Control
	*/
	// add a setting for the site logo
	$wp_customize->add_setting('site_logo');
	// Add a control to upload the logo
	$wp_customize->add_control( new \WP_Customize_Media_Control( $wp_customize, 'site_logo', array(
		'label' => 'Upload Logo',
		'section' => 'title_tagline',
		'settings' => 'site_logo',
		'mime_type' => 'image'
	) ) );

	/**
	* Navbar Microcopy
	*/
	// add section
	$wp_customize->add_section( 'mix_header' , array(
	  'title' => 'Header',
	  'priority' => 30
	) );
	// add setting
	$wp_customize->add_setting('mix_nav_microcopy');
	// Add controls
	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_nav_microcopy', array(
		'label' => 'Navbar Microcopy',
		'section' => 'mix_header',
		'setting' => 'mix_nav_microcopy',
		'type'    => 'textarea',
	) ) );


	/********************************************
	!  Contact Details
	*********************************************/
	// add section
	$wp_customize->add_panel( 'mix_contact_panel', array(
	  'title' => __( 'Contact Details' ),
	  'description' => '', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	$wp_customize->add_section( 'mix_address' , array(
	  'title' => 'Address',
	    'panel' => 'mix_contact_panel',
	) );
	$wp_customize->add_section( 'mix_contact' , array(
	    'title'      => 'Phone',
	    'priority'   => 30,
	    'panel' => 'mix_contact_panel',
	) );
	$wp_customize->add_section( 'mix_contact_emails' , array(
	    'title'      => 'Email',
	    'priority'   => 50,
	    'panel' => 'mix_contact_panel',
	) );


	/**
	* Phone
	*/
	// add setting
	$wp_customize->add_setting('mix_phone_1');
	$wp_customize->add_setting('mix_phone_2');
	$wp_customize->add_setting('mix_email_1');
	$wp_customize->add_setting('mix_company');
	$wp_customize->add_setting('mix_address_1');
	$wp_customize->add_setting('mix_address_2');
	$wp_customize->add_setting('mix_citytown');
	$wp_customize->add_setting('mix_state');
	$wp_customize->add_setting('mix_postcode');
	$wp_customize->add_setting('mix_lat');
	$wp_customize->add_setting('mix_long');

	// Add controls
	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_phone_1', array(
		'label' => 'Phone Number (primary)',
		'section' => 'mix_contact',
		'setting' => 'mix_phone_1',
		'type'    => 'text',
		'priority' => 200,
	) ) );
	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_phone_2', array(
		'label' => 'Phone Number (secondary)',
		'section' => 'mix_contact',
		'setting' => 'mix_phone_2',
		'type'    => 'text',
		'priority' => 200,
	) ) );
	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_email_1', array(
		'label' => 'Email (primary)',
		'section' => 'mix_contact_emails',
		'setting' => 'mix_email_1',
		'type'    => 'email',
		'priority' => 300,
	) ) );

	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_company', array(
		'label' => 'Company Name',
		'section' => 'mix_address',
		'setting' => 'mix_company',
		'type'    => 'text',
		'priority' => 500,
	) ) );

	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_address_1', array(
		'label' => 'Address Line 1',
		'section' => 'mix_address',
		'setting' => 'mix_address_1',
		'type'    => 'text',
		'priority' => 600,
	) ) );
	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_address_2', array(
		'label' => 'Address Line 2',
		'section' => 'mix_address',
		'setting' => 'mix_address_2',
		'type'    => 'text',
		'priority' => 700,
	) ) );
	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_citytown', array(
		'label' => 'City/Town',
		'section' => 'mix_address',
		'setting' => 'mix_citytown',
		'type'    => 'text',
		'priority' => 800,
	) ) );
	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_state', array(
		'label' => 'State',
		'section' => 'mix_address',
		'setting' => 'mix_state',
		'type'    => 'text',
		'priority' => 900,
	) ) );

	$wp_customize->add_control( new \WP_Customize_Control( $wp_customize, 'mix_postcode', array(
		'label' => 'Postcode',
		'section' => 'mix_address',
		'setting' => 'mix_postcode',
		'type'    => 'text',
		'priority' => 1000,
	) ) );

	$wp_customize->add_control( new Customize_Hidden_Control( $wp_customize, 'mix_lat', array(
		'label' => 'Latitude',
		'section' => 'mix_address',
		'setting' => 'mix_lat',
		'priority' => 1200,
	) ) );

	$wp_customize->add_control( new Customize_Hidden_Control( $wp_customize, 'mix_long', array(
		'label' => 'Longitude',
		'section' => 'mix_address',
		'setting' => 'mix_long',
		'priority' => 1200,
	) ) );

    // Footer Section
    $wp_customize->add_section('mix_footer', array(
        'title' => __('Footer Settings', 'bigblank'),
        'priority' => 160,
    ));
    // copyright text
    $wp_customize->add_setting('mix_footer_copyright');
    $wp_customize->add_control(new \WP_Customize_Control( $wp_customize, 'mix_footer_copyright', array(
        'label' => __('Copyright Text', 'bigblank'),
        'section' => 'mix_footer',
        'setting' => 'mix_footer_copyright',
        'type'    => 'textarea'
    )));
    // footer text
    $wp_customize->add_setting('mix_footer_text');
    $wp_customize->add_control(new \WP_Customize_Control( $wp_customize, 'mix_footer_text', array(
        'label' => __('Footer Text', 'bigblank'),
        'section' => 'mix_footer',
        'setting' => 'mix_footer_text',
        'type'    => 'textarea'
    )));


}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Grab Lat & Long
 * @author Mike Griffiths
 * @param $wp_customize Class Instance of WP_Customize_Control()
 */
function grabLatLng( $wp_customize ){
	$address_1 = get_theme_mod( 'mix_address_1' );
	$address_2 = get_theme_mod( 'mix_address_2' );
	$citytown = get_theme_mod( 'mix_citytown' );
	$state = get_theme_mod( 'mix_state' );
	$postcode = get_theme_mod( 'mix_postcode' );
	$address = $address_1;
	$address.= (empty($address_2) ? '' : ', '.$address_2);
	$address.= (empty($citytown) ? '' : ', '.$citytown);
	$address.= (empty($state) ? '' : ', '.$state);
	$address.= (empty($postcode) ? '' : ', '.$postcode);
	$string = str_replace (" ", "+", urlencode($address));
	$details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$string."&sensor=false";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $details_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = json_decode(curl_exec($ch), true);
	// If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
	if ($response['status'] != 'OK') {
		// Problem
	} else {
		$geometry = $response['results'][0]['geometry'];
		$latitude = $geometry['location']['lat'];
		$longitude = $geometry['location']['lng'];
		set_theme_mod( 'mix_lat', $latitude );
		set_theme_mod( 'mix_lng', $longitude );
	}
}
add_action( 'customize_save_after', __NAMESPACE__ . '\\grabLatLng' );

/**
 * Grab Address
 * @author Mike Griffiths
 * @param $wp_customize Class Instance of WP_Customize_Control()
 */
function grabContact(){
	$company = get_theme_mod( 'mix_company');
	$address_1 = get_theme_mod( 'mix_address_1' );
	$address_2 = get_theme_mod( 'mix_address_2' );
	$citytown = get_theme_mod( 'mix_citytown' );
	$state = get_theme_mod( 'mix_state' );
	$postcode = get_theme_mod( 'mix_postcode' );
	$phone_1 = get_theme_mod('mix_phone_1');
	$phone_2 = get_theme_mod('mix_phone_2');
	$email_1 = get_theme_mod('mix_email_1');
	$address = (empty($company) ? '' : '<div itemscope="" itemtype="http://schema.org/LegalService" class="slocation contactus"><link itemprop="url" href="'.esc_url(home_url('/')).'"><meta itemprop="name" content="' . $company . '">');
	$address.= (empty($address_1) ? '' : '<div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><div itemprop="streetAddress">'.$address_1);
	$address.= (empty($address_2) ? '</div>' : '<br>'.$address_2 . '</div>');
	$address.= (empty($citytown) ? '' : '<span itemprop="addressLocality">'.$citytown .'</span>');
	$address.= (empty($state) ? '' : ', <span itemprop="addressRegion">'.$state.'</span>');
	$address.= (empty($postcode) ? '' : ' <span itemprop="postalCode">'.$postcode.'</span>');
	$address.= ' <span class="hidden" itemprop="addressCountry">USA</span></div>';
	$address.= (empty($phone_1) ? '</div>' : '<br><span class="contacts"><span>Toll Free: <span itemprop="telephone">'.$phone_1 . '</span> </span>');
	$address.= (empty($phone_2) ? '</span></div>' : '<br><span>Local: <span itemprop="telephone">'.$phone_2 . '</span></span></span></div>');

	return $address;

}
add_action( 'customize_save_after', __NAMESPACE__ . '\\grabContact' );



/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');


