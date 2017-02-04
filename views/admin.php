<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'post-widget-thumbnail' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
           name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
           value="<?php echo esc_attr( $title ); ?>">
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'pwt-post-type' ) ); ?>"><?php esc_attr_e( 'Post Type:', 'post-widget-thumbnail' ); ?></label>
    <select class="widefat"  id="<?php echo esc_attr( $this->get_field_id( 'pwt-post-type' ) ); ?>"   name="<?php echo esc_attr( $this->get_field_name( 'pwt-post-type' ) ); ?>">
        <option value="">***SELECT POST TYPE***</option>
		<?php
		$args       = array(
			'public'   => true,
			'_builtin' => false
		);
		$post_types = get_post_types( $args, 'objects' );
		foreach ( $post_types as $post_type ) :
//		    	var_dump($post_type);
			?>
            <option value="<?php echo $post_type->name; ?>" <?php echo $post_type->name == $type ? ' selected' : '';  ?>><?php echo $post_type->label; ?></option>
		<?php endforeach; ?>
    </select>
</p>
