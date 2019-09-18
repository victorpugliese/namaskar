<?php
/**
 * Zakra helper functions.
 *
 * @package zakra
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'zakra_is_woocommerce_active' ) ) :
	/**
	 * Check if WooCommerce plugin is active.
	 */
	function zakra_is_woocommerce_active() {

		if ( in_array( 'woocommerce/woocommerce.php', get_option( 'active_plugins' ), true ) ) {
			return true;
		} else {
			return false;
		}

	}
endif;

if ( ! function_exists( 'zakra_is_header_transparent_enabled' ) ) :
	/**
	 * Check if header transparent is enabled.
	 */
	function zakra_is_header_transparent_enabled() {

		// Zakra Pro Customizer.
		$customizer_result = apply_filters( 'zakra_header_transparency_filter', false );

		// Meta box.
		$meta_result = get_post_meta( zakra_get_post_id(), 'zakra_transparent_header', true );

        // Disabled transparent if it is not post and not page and not static blog page.
        if ( ! is_singular('page') && ! is_singular('post') && ! ( is_home() && ! is_front_page() ) ) {
            return false;
        }

		if ( '0' == $meta_result || false == $meta_result ) { // Disabled in meta.
			return false;
		} elseif ( 'customizer' == $meta_result && false == $customizer_result ) { // Disabled in Customizer
			return false;
		}

		return apply_filters( 'zakra_header_transparency_enable', true );

	}
endif;

if ( ! function_exists( 'zakra_is_page_title_enabled' ) ) :
	/**
	 * Check if page header is enabled.
	 */
	function zakra_is_page_title_enabled() {

		$result = get_theme_mod( 'zakra_page_title_enabled', 'page-header' );

		// If invalid: return default.
		if ( ! in_array( $result, array( 'page-header', 'content-area' ) ) ) {
			return 'page-header';
		}

		return apply_filters( 'zakra_page_title_enabled', $result );

	}
endif;

if ( ! function_exists( 'zakra_is_breadcrumbs_enabled' ) ) :

	/**
	 * Check if breadcrumbs is enabled.
	 */
	function zakra_is_breadcrumbs_enabled() {

		// Return false if disabled via Customizer.
		$result = get_theme_mod( 'zakra_breadcrumbs_enabled', true );

		// If invalid: return default.
		if ( ! is_bool( $result ) ) {
			return true;
		}

		return apply_filters( 'zakra_breadcrumbs_enabled', $result );

	}

endif;

if ( ! function_exists( 'zakra_is_header_top_enabled' ) ) :

	/**
	 * Check if header top is enabled.
	 */
	function zakra_is_header_top_enabled() {

		$result = get_theme_mod( 'zakra_header_top_enabled', false );

		// If invalid: return default.
		if ( ! is_bool( $result ) ) {
			return false;
		}

		// Return false if disabled via Customizer.
		return apply_filters( 'zakra_header_top_enabled', $result );

	}

endif;

if ( ! function_exists( 'zakra_is_footer_widgets_enabled' ) ) :

	/**
	 * Check if header top is enabled.
	 */
	function zakra_is_footer_widgets_enabled() {

		$result = get_theme_mod( 'zakra_footer_widgets_enabled', true );

		// If invalid: return default.
		if ( ! is_bool( $result ) ) {
			return true;
		}

		// Return false if disabled via Customizer.
		return apply_filters( 'zakra_footer_widgets_enabled', $result );

	}

endif;

if ( ! function_exists( 'zakra_is_footer_bar_enabled' ) ) :

	/**
	 * Check if footer bar is enabled.
	 */
	function zakra_is_footer_bar_enabled() {

		return apply_filters( 'zakra_footer_bar_enabled', '__return_true' );

	}

endif;

if ( ! function_exists( 'zakra_footer_copyright' ) ) :

	/**
	 * Get Copyright text.
	 */
	function zakra_footer_copyright() {
		$site_link  = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" >' . get_bloginfo( 'name', 'display' ) . '</a>';
		$theme_link = '<a href="https://zakratheme.com/" target="_blank" title="' . esc_attr__( 'Zakra', 'zakra' ) . '" rel="author">' . __( 'Zakra', 'zakra' ) . '</a>';

		/* translators: 1: Current Year, 2: Site Name, 3: Theme Name. */
		$footer_copyright = sprintf( esc_html__( 'Copyright &copy; %1$s %2$s. Theme: %3$s By ThemeGrill.', 'zakra' ), esc_attr( date( 'Y' ) ), $site_link, $theme_link );

		return $footer_copyright;
	}

endif;

if ( ! function_exists( 'zakra_search_icon_menu_item' ) ) :

	/**
	 * Renders search icon menu item.
	 */
	function zakra_search_icon_menu_item() {
		$output = '';

		if ( true === get_theme_mod( 'tg_header_menu_search_enabled', true ) ) :
			$output  = '<li class="menu-item tg-menu-item tg-menu-item-search">';
			$output .= '<a><i class="tg-icon tg-icon-search"></i></a>';
			$output .= get_search_form( false );
			$output .= '</li>';
			$output .= '<!-- /.tg-header-search -->';
		endif;

		return $output;
	}

endif;

if ( ! function_exists( 'zakra_get_layout_type' ) ) :

	/**
	 * Get layout type.
	 *
	 * @return string A layout type.
	 */
	function zakra_get_layout_type() {

		global $post;
		$layout = 'tg-site-layout--right'; // Set default.

		if ( $post ) {

			// Meta value.
			$layout_meta_arr = get_post_meta( zakra_get_post_id(), 'zakra_layout' );
			$layout_meta     = isset( $layout_meta_arr[0] ) ? $layout_meta_arr[0] : 'tg-site-layout--customizer';

			// Get layout from Customizer.
			if ( 'tg-site-layout--customizer' === $layout_meta ) {
				if ( is_single() ) {
					$layout = get_theme_mod( 'zakra_structure_post', 'tg-site-layout--right' );
				} elseif ( is_page() ) {
					$layout = get_theme_mod( 'zakra_structure_page', 'tg-site-layout--right' );
				} elseif ( is_archive() ) {
					$layout = get_theme_mod( 'zakra_structure_archive', 'tg-site-layout--right' );
				} else {
					$layout = get_theme_mod( 'zakra_structure_default', 'tg-site-layout--right' );
				}
			} else { // Get layout from Meta box.
				$layout = $layout_meta;
			}
		}

		return $layout;

	}

endif;

if ( ! function_exists( 'zakra_is_zakra_pro_active' ) ) :

	/**
	 * Function to return the boolean value if `Zakra Pro` plugin is activated or not.
	 *
	 * @return bool
	 */
	function zakra_is_zakra_pro_active() {

		if ( is_plugin_active( 'zakra-pro/zakra-pro.php' ) ) {
			return true;
		}

		return false;

	}

endif;
