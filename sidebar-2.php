<?php
class edd_categories_tags_widget_extend extends WP_Widget {
	/** Constructor */
	function __construct() {
		parent::__construct( 'edd_categories_tags_widget', __( 'Downloads Categories / Tags', 'easy-digital-downloads' ), array( 'description' => __( 'Display the downloads categories or tags', 'easy-digital-downloads' ) ) );
	}

	/** @see WP_Widget::widget */
	function widget( $args, $instance ) {
		// Set defaults.
		$args['id']           = ( isset( $args['id'] ) ) ? $args['id'] : 'edd_categories_tags_widget';
		$instance['title']    = ( isset( $instance['title'] ) ) ? $instance['title'] : '';
		$instance['taxonomy'] = ( isset( $instance['taxonomy'] ) ) ? $instance['taxonomy'] : 'download_category';

		$title      = apply_filters( 'widget_title', $instance['title'], $instance, $args['id'] );
		$tax        = $instance['taxonomy'];
		$count      = isset( $instance['count'] ) && $instance['count'] == 'on' ? 1 : 0;
		$hide_empty = isset( $instance['hide_empty'] ) && $instance['hide_empty'] == 'on' ? 1 : 0;

		echo $args['before_widget'];

		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		do_action( 'edd_before_taxonomy_widget' );

		echo "<ul class=\"edd-taxonomy-widget\">\n";
			wp_list_categories( 'title_li=&taxonomy=' . $tax . '&show_count=' . $count . '&hide_empty=' . $hide_empty );
		echo "</ul>\n";

		do_action( 'edd_after_taxonomy_widget' );

		echo $args['after_widget'];
	}

	/** @see WP_Widget::update */
	function update( $new_instance, $old_instance ) {
		$instance               = $old_instance;
		$instance['title']      = strip_tags( $new_instance['title'] );
		$instance['taxonomy']   = strip_tags( $new_instance['taxonomy'] );
		$instance['count']      = isset( $new_instance['count'] ) ? $new_instance['count'] : '';
		$instance['hide_empty'] = isset( $new_instance['hide_empty'] ) ? $new_instance['hide_empty'] : '';
		return $instance;
	}

	/** @see WP_Widget::form */
	function form( $instance ) {
		// Set up some default widget settings.
		$defaults = array(
			'title'         => '',
			'taxonomy'      => 'download_category',
			'count'         => 'off',
			'hide_empty'    => 'off',
		);

		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'easy-digital-downloads' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo $instance['title']; ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'taxonomy' ) ); ?>"><?php _e( 'Taxonomy:', 'easy-digital-downloads' ); ?></label>
			<select name="<?php echo esc_attr( $this->get_field_name( 'taxonomy' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'taxonomy' ) ); ?>">
				<?php
				$category_labels = edd_get_taxonomy_labels( 'download_category' );
				$tag_labels      = edd_get_taxonomy_labels( 'download_tag' );
				?>
				<option value="download_category" <?php selected( 'download_category', $instance['taxonomy'] ); ?>><?php echo $category_labels['name']; ?></option>
				<option value="download_tag" <?php selected( 'download_tag', $instance['taxonomy'] ); ?>><?php echo $tag_labels['name']; ?></option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'Show Count:', 'easy-digital-downloads' ); ?></label>
			<input <?php checked( $instance['count'], 'on' ); ?> id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" type="checkbox" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'hide_empty' ); ?>"><?php _e( 'Hide Empty Categories:', 'easy-digital-downloads' ); ?></label>
			<input <?php checked( $instance['hide_empty'], 'on' ); ?> id="<?php echo $this->get_field_id( 'hide_empty' ); ?>" name="<?php echo $this->get_field_name( 'hide_empty' ); ?>" type="checkbox" />
		</p>
	<?php
	}
}
?>

<div id="secondary" class="widget-area" role="complementary">
    <div style="display: flex; flex-direction: row; justify-content: space-around; border-bottom: solid 1px rgba(196, 196, 196, 0.6); padding: 18px 0">
        <div style="font-size: 18px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">PHÂN LOẠI</div>
        <div style="font-size: 12px; line-height: 25px; text-align: center; letter-spacing: 0.04em; color: #B1B1B1;">Xóa bộ lọc</div>
    </div>
    <div style="border-bottom: solid 1px rgba(196, 196, 196, 0.6); padding: 24px 0">
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <div style="text-align: left; font-size: 14px;line-height: 25px;letter-spacing: 0.04em;color: #C40504; font-weight:bold">TÀI CHÍNH</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div><strong>Tỷ giá</strong></div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div><strong>Chứng khoán</strong></div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div><strong>Bất động sản</strong></div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div><strong>Lãi suất</strong></div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
    </div>
    <div style="border-bottom: solid 1px rgba(196, 196, 196, 0.6); padding: 24px 0">
        <div style="text-align: left; font-size: 14px;line-height: 25px;
letter-spacing: 0.04em;color: #C40504; font-weight:bold">
            KHU VỰC
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Quốc tế</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Châu Á</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Châu Âu</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Châu Mỹ</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Châu Úc</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
    </div>
    <div style="border-bottom: solid 1px rgba(196, 196, 196, 0.6); padding: 24px 0">
        <div style="text-align: left; font-size: 14px;line-height: 25px;
letter-spacing: 0.04em;color: #C40504; font-weight:bold">
            QUỐC GIA
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Trung Quốc</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Hoa Kỳ</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Ấn Độ</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Nhật Bản</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Hàn Quốc</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
    </div>
    <div style="border-bottom: solid 1px rgba(196, 196, 196, 0.6); padding: 24px 0">
        <div style="text-align: left; font-size: 14px;line-height: 25px;
letter-spacing: 0.04em;color: #C40504; font-weight:bold">GIÁ</div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Dưới 100.000VNĐ</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">100.000VNĐ - 500.000VNĐ</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding: 4px 0">
            <div style="display: flex; flex-direction: row;">
                <input type="checkbox" style="width: 18px; height: 18px; margin-right: 10px;">
                <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #353535;">Trên 500.000VNĐ</div>
            </div>
            <div style="font-size: 14px; line-height: 25px; letter-spacing: 0.04em; color: #B1B1B1;">50</div>
        </div>
    </div>
</div>