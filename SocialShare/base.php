<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


final class Cr_Elementor_Extension {
	const VERSION = '1.0.0';
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';
	const MINIMUM_PHP_VERSION = '7.0';
	private static $_instance = null;
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	public function __construct() {
		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );
	}
	public function i18n() {
		load_plugin_textdomain( 'tcg' );
	}
	public function init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}
		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}
		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}
		// Add Plugin actions
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );
		// Register widget scripts
		add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'widget_styles' ] );
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );


	}
	public function admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'tcg' ),
			'<strong>' . esc_html__( 'Social Share', 'tcg' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'tcg' ) . '</strong>'
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}
	public function admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'tcg' ),
			'<strong>' . esc_html__( 'Social Share', 'tcg' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'tcg' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}
	public function admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'tcg' ),
			'<strong>' . esc_html__( 'Social Share', 'tcg' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'tcg' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}
	public function widget_styles() {
		wp_register_style( 'ss-style', plugins_url( 'assets/ss-style.css', __FILE__ ), array(), time(), 'all' );

	}
	public function widget_scripts() {
		wp_register_script( 'ss-script', plugins_url( 'assets/ss-script.js', __FILE__ ), array('jquery' ), time(), true );
	}

	public function init_widgets() {
		// Include Widget files
		require_once( __DIR__ . '/widget/share.php');

		// Register widget
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Cr_SS_Widget() );
	}

	public function init_controls() {
	}
	
}
function Cr_elementor_widget_categories( $elements_manager ) {
	$elements_manager->add_category(
		'cr_category',
		[
			'title' => __( 'Social Share', 'tcg' ),
			'icon' => 'eicon-woocommerce',
		]
	);
}
add_action( 'elementor/elements/categories_registered', 'Cr_elementor_widget_categories' );

Cr_Elementor_Extension::instance();