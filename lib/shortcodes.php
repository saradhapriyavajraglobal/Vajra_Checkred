<?php
function home_banner_shortcode( $atts, $content = null ) {
	// Attributes
	$atts = shortcode_atts(
		array(

			'class' => '',

		),
		$atts
	);

	if ( $atts['class'] ) {
		$class = $atts['class'];
	}
?>


<?php
}
add_shortcode( 'Home_insta', 'Home_insta_shortcode' ); ?>