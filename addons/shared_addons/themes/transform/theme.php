<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_transform extends Theme {

    public $name 				= 'Transform';
    public $author 				= 'Chris Franson';
    public $author_website 		= '';
    public $website 			= 'http://github.com/chrisfranson';
    public $description 		= 'A high-powered Bootstrap-based theme for PyroCMS';
    public $version 			= '0.8';
	public $options 			= array(
									'fonts' => array(
										'title'         => 'Fonts',
										'description'   => 'A comma-separted list of fonts on Google Web Fonts that you want to use on the site.',
										'default'       => '',
										'type'          => 'text',
										'options'       => '',
										'is_required'   => FALSE
								   	),
/*
									'show_brand_text' => array(
										'title'         => 'Show Brand Text',
										'description'   => 'Show the Site Name as text in the header?',
										'default'       => 'yes',
										'type'          => 'select',
										'options'       => 'yes=Yes|no=No',
										'is_required'   => TRUE
									),

									'show_slogan' => array(
										'title'         => 'Show Slogan',
										'description'   => 'Show the Site Slogan in the header?',
										'default'       => 'yes',
										'type'          => 'select',
										'options'       => 'yes=Yes|no=No',
										'is_required'   => TRUE
									),

									'brand_font' => array(
										'title'         => 'Brand Font',
										'description'   => 'The font for the site name in the header. Must be on Google Web Fonts.',
										'default'       => '',
										'type'          => 'text',
										'options'       => '',
										'is_required'   => FALSE
								   	),

									'logo_image' => array(
										'title'         => 'Logo Image',
										'description'   => "The image that will be shown on the left side of the site header. If not specified, no image will be shown.",
										'default'       => '',
										'type'          => 'text',
										'options'       => '',
										'is_required'   => FALSE
								   	),

									'logo_image_hover' => array(
										'title'         => 'Logo Image - Hover',
										'description'   => 'If you specify an image here, it will replace the logo image when you hover over it.',
										'default'       => '',
										'type'          => 'text',
										'options'       => '',
										'is_required'   => FALSE
								   	),
*/
									'navbar_style' => array(
										'title'         => 'Navbar Style',
										'description'   => 'Whether to use Bootstrap\'s "default" or "inverse" navbar style',
										'default'       => 'default',
										'type'          => 'select',
										'options'       => 'default=Default|inverse=Inverse',
										'is_required'   => TRUE
									),

									'bootstrap_theme' => array(
										'title'         => 'Bootswatch Theme',
										'description'   => 'Select a theme from Bootswatch.com',
										'default'       => 'default',
										'type'          => 'select',
										'options'       => 'default=Default|amelia=Amelia|cerulean=Cerulean|cosmo=Cosmo|cyborg=Cyborg|darkly=Darkly|flatly=Flatly|journal=Journal|lumen=Lumen|readable=Readable|simplex=Simplex|slate=Slate|spacelab=Spacelab|superhero=Superhero|united=United|yeti=Yeti',
										'is_required'   => TRUE
									),
/*
									'header_color' => array(
										'title'         => 'Header Color',
										'description'   => 'The theme\'s background color for the site header.',
										'default'       => '#000000',
										'type'          => 'colour-picker',
										'options'       => '',
										'is_required'   => FALSE
									),

									'footer_color' => array(
										'title'         => 'Footer Color',
										'description'   => 'The theme\'s background color for the site footer.',
										'default'       => '#333333',
										'type'          => 'colour-picker',
										'options'       => '',
										'is_required'   => FALSE
									),
*/
									'footer_content' => array(
										'title'         => 'Footer Content',
										'description'   => 'Footer Content',
										'default'       => '<div class="container">
	<hr>
	<footer>
		<p>&copy; Company 2014</p>
	</footer>
</div>',
										'type'          => 'wysiwyg',
										'options'       => '',
										'is_required'   => FALSE
									),									

									'sitewide_css' => array(
										'title'         => 'Site-wide CSS',
										'description'   => 'Custom CSS that will be applied to every page on the site.',
										'default'       => '',
										'type'          => 'textarea',
										'options'       => '',
										'is_required'   => FALSE
								   	),

									'sitewide_js' => array(
										'title'         => 'Site-wide JS',
										'description'   => 'Custom JS that will be executed on every page on the site.',
										'default'       => '',
										'type'          => 'textarea',
										'options'       => '',
										'is_required'   => FALSE
								   	)
								);

}

/* End of file theme.php */