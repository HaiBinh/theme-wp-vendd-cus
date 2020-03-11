<?php
/**
 * download tag archives use the same style template as the store front. Edit
 * this template in the content/content-archive-download.php file. 
 */

get_header(2); ?>

<div style="display:flex; flex-direction: row; justify-content: space-around; padding-top: 40px">
    <?php get_sidebar(2); ?>
    <div id="primary" class="content-area" style="width: 60%; position: relative; left: 25%">
<!--		<main id="main" class="site-main" role="main">-->

			<?php get_template_part( 'content/content', 'archive-download' ); ?>

<!--		</main>-->
	</div>
</div>
<?php get_footer(); ?>
