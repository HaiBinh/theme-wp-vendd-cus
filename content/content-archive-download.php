<?php
/**
 * download archive template
 *
 * @package Vendd
 */

// if download taxonomy archive, output information about the term
if ( is_tax( 'download_category' ) || is_tax( 'download_tag' ) ) {
	$download_term = $wp_query->get_queried_object();

	// change the download archive page title based on the taxonomy
	if ( 'download_category' === $download_term->taxonomy ) {
		$term_type = _x( 'Category', 'download category archive page title', 'vendd' ) . ': ';
	} elseif ( 'download_tag' === $download_term->taxonomy ) {
		$term_type = _x( 'Tag', 'download tag archive page title', 'vendd' ) . ': ';
	}
	?>

	<?php if ( ! empty( $term_type ) ) { ?>
		<div class="download-term-header">
			<h1 class="term-title">
				<span class="term-title-primary"><?php echo $term_type; ?><strong><?php echo $download_term->name; ?></strong>
				<?php if ( ! empty( $download_term->description ) ) { ?>
					<p class="term-subtitle"><?php echo $download_term->description; ?></p>
				<?php } ?>
			</h1>
		</div>
	<?php }
}

if ( have_posts() ) : $i = 1;
	?>
<!--	<div id="store-front">-->
<!--		<div class="edd_downloads_list edd_download_columns_3">-->
			<?php while ( have_posts() ) : the_post(); ?>
<!--				<div itemscope itemtype="https://schema.org/Product" class="edd_download" id="edd_download_--><?php //echo get_the_ID(); ?><!--" style="width: 797px; height: 152px; border-bottom: solid 1px rgba(196, 196, 196, 0.6)">-->
<!--					<div class="edd_download_inner" style="background-color: #FFF; width: 100%; height: 91px; position: relative; top: 37px;">-->
<!--						--><?php
//							/**
//							 * These are the same template files used by the [downloads] shortcode.
//							 * So making adjustments to those template files will affect this archive
//							 * as well as the [downloads] shortcode.
//							 *
//							 * To make adjustments specifically to archive template download output,
//							 * grab the contents of the relevant template file and put it in place of the
//							 * appropriate call below that way your changes are focused here and not the
//							 * [downloads] shortcode... unless that's what you want.
//							 */
//							edd_get_template_part( 'shortcode', 'content-image' );
//							edd_get_template_part( 'shortcode', 'content-title' );
//							edd_get_template_part( 'shortcode', 'content-excerpt' );
//							edd_get_template_part( 'shortcode', 'content-price' );
//							edd_get_template_part( 'shortcode', 'content-cart-button' );
//						?>
<!--					</div>-->
<!--				</div>-->
                <div style="width: 70%; height: 152px; border-bottom: solid 1px rgba(196, 196, 196, 0.6); position: relative; left: -15%; min-width: 797px;">
                    <div style="width: 100%; height: 91px; position: relative; top: 37px;">
                        <div style="width: 61px; height: 91px; background-image: url('<?php echo get_theme_mod('vendd_product_image_upload'); ?>'); display: inline-block">
                            <?php
                            $product_image = apply_filters( 'vendd_crop_product_image', true ) ? 'vendd_downloads_shortcode_grid_image' : 'full';
                            echo get_the_post_thumbnail( get_the_ID(), $product_image );
                            ?>
<!--                            <div style="width: 24px; height: 23px; border-radius: 50px; background: #C40504; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25); position: absolute; left: 49px;">-->
<!--                                <p style=" color: #FFF; font-size: 10px; line-height: 25px; padding: 0; margin: 0; ">-->
<!--                                    -10%</p></div>-->
                        </div>
                        <div style="position: absolute; left: 94px; height: 100%; padding: 0; margin: 0; display: inline-block">
                            <div style="width: 415px; height: 50px; font-style: normal; font-weight: 500; font-size: 14px; line-height: 25px; align-items: center; text-align: justify; letter-spacing: 0.04em; color: #353535; position: relative; top: -12px;">
                                <span style="vertical-align: bottom"><strong><?php the_title_attribute(); ?></strong></span></div>
                            <div style="width: 415px; height: 40%; position: relative; top: 30%">
                                <ul style="list-style: none; display: flex; flex-direction: row; justify-content: space-between;
                                 padding: 0; margin: 0; font-weight: 500; font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #1E4767;">
                                    <li style="float: left">TÀI CHÍNH</li>
                                    <li style="float: left">THÁNG 12 2019</li>
                                    <li style="float: left">210 TRANG</li>
                                </ul>
                            </div>
                        </div>
                        <div style="display: inline-block; float: right">
                            <div style="font-size: 12px; line-height: 5px; text-align: right; letter-spacing: 0.04em; text-decoration-line: line-through; color: #5A5A5A;">
                                417.000VND
                            </div>
                            <div style=" font-style: normal; font-weight: 500; font-size: 18px; line-height: 45px; text-align: right; letter-spacing: 0.04em; color: #353535;">
                                <?php _e( 'Price: ', 'vendd' ); edd_price( get_the_ID() ); ?>
                            </div>
                            <button style="background: linear-gradient(165.84deg, #920D10 -4.45%, #EC1C3C 129.59%); border-radius: 4px; width: 144px; height: 41px; border: 0; color: #FFF">
                                <a href="<?php the_permalink(); ?> " style="color: #FFF; text-decoration: none; width: 144px; height: 41px">Mua ngay</a>
                            </button>
                        </div>
                    </div>
                </div>
				<?php if ( $i % 3 == 0 ) { ?><div style="clear:both;"></div><?php } ?>
				<?php $i+=1; ?>
			<?php endwhile; ?>
<!--		</div>-->
		<div style="clear:both;"></div>
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<div id="edd_download_pagination" class="store-pagination navigation">
				<?php
					$big = 999999999; // need an unlikely integer
					echo paginate_links( array(
						'base'		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'	=> '?paged=%#%',
						'current'	=> max( 1, get_query_var( 'paged' ) ),
						'total'		=> $wp_query->max_num_pages,
						'prev_text'	=> __( '&laquo; Previous', 'vendd' ),
						'next_text'	=> __( 'Next  &raquo;', 'vendd' ),
					) );
				?>
			</div>
		<?php endif; ?>
<!--	</div>-->
    <!-- #store-front -->
	<?php
else :
	?>
	<section class="store-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Oops! There\'s nothing to see here.', 'vendd' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'vendd' ); ?></p>

			<?php get_search_form(); ?>

			<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

			<?php if ( vendd_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
			<div class="widget widget_categories">
				<h2 class="widget-title"><?php _e( 'Most Used Categories', 'vendd' ); ?></h2>
				<ul>
				<?php
					wp_list_categories( array(
						'orderby'    => 'count',
						'order'      => 'DESC',
						'show_count' => 1,
						'title_li'   => '',
						'number'     => 10,
					) );
				?>
				</ul>
			</div><!-- .widget -->
			<?php endif; ?>

		</div><!-- .page-content -->
	</section><!-- .store-404 -->
	<?php
endif; ?>



