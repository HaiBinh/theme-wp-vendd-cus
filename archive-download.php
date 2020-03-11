<?php
/**
 * Download archives use the same template as the store front. Edit
 * this template in the content/content-archive-download.php file.
 *
 * @package Vendd
 */

get_header(2); ?>
<div style="display:flex; flex-direction: row; justify-content: space-around; padding-top: 40px">
    <?php get_sidebar(2) ?>
    <div id="primary" class="content-area" style="width: 60%; position: relative; left: 25%">
        <?php get_template_part( 'content/content', 'archive-download' ); ?>
    </div>
</div>
<?php get_footer(); ?>
