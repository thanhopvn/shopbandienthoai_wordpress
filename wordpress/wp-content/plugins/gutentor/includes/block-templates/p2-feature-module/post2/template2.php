<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_P2_Post2_Template2' ) ) {

	/**
	 * Gutentor_P2_Post2_Template2 Class For Gutentor
	 *
	 * @package Gutentor
	 * @since 2.0.0
	 */
	class Gutentor_P2_Post2_Template2 extends Gutentor_Query_Elements {

		/**
		 * Gets an instance of this object.
		 * Prevents duplicate instances which avoid artefacts and improves performance.
		 *
		 * @static
		 * @access public
		 * @since 2.0.0
		 * @return object
		 */
		public static function get_instance() {

			// Store the instance locally to avoid private static replication
			static $instance = null;

			// Only run these methods if they haven't been ran previously
			if ( null === $instance ) {
				$instance = new self();
			}

			// Always return the instance
			return $instance;

		}

		/**
		 * Run Block
		 *
		 * @access public
		 * @since 2.0.0
		 * @return void
		 */
		public function run() {
			add_filter( 'gutentor_post_module_p2_query_data', array( $this, 'template_data' ), 999, 3 );
		}

		/**
		 * Adding conformation
		 *
		 * @param {array} output
		 * @param {object} props
		 * @return {array}
		 */
		public function conformation( $attributes ) {
			$block_name = ( isset( $attributes['gName'] ) ) ? $attributes['gName'] : '';
			if ( 'gutentor/p2' !== $block_name ) {
				return false;
			}
			$template = ( isset( $attributes['p2Temp'] ) ) ? $attributes['p2Temp'] : '';
			if ( 2 !== $template ) {
				return false;
			}
			$postNumber = ( isset( $attributes['postsToShow'] ) ) ? $attributes['postsToShow'] : '';
			if ( 2 !== $postNumber ) {
				return false;
			}
			return true;
		}

		/**
		 * Content On Image Template 1
		 *
		 * @param {string} $data
		 * @param {array}  $post
		 * @param {array}  $attributes
		 * @return {mix}
		 */
		public function template_data( $output, $the_query, $attributes ) {
			if ( ! $this->conformation( $attributes ) ) {
				return $output;
			}
            $post_type = ( isset( $attributes['pPostType'] ) ) ? $attributes['pPostType'] : 'post';
            $index = 0;
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				$output .= "<div class='" . apply_filters( 'gutentor_post_module_p2_grid_class', 'grid-lg-6 grid-md-6 grid-12', $attributes ) . "'>";
                if($post_type === 'product'){
                    $output .= $this->p2_woo_single_article( get_post(), $attributes, $index );
                }
                else{
                    $output .= $this->p2_single_article( get_post(), $attributes, $index );
                }
                $output .= '</div>';
				$index++;
			endwhile;
			return $output;
		}
	}
}
Gutentor_P2_Post2_Template2::get_instance()->run();
