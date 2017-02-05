<?php

echo $args['before_widget'];
if ( ! empty( $instance['title'] ) ) {
	echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
}

if ( ! empty( $instance['pwt-post-type'] ) ) {

	$post_type = $instance['pwt-post-type'];
	$post_count = 8; // create field in widget - hard code for now
	$the_query = new WP_Query(array( 'post_type' => $post_type, 'posts_per_page' => $post_count ));
	?>
	<ul class="pwt-thumbnail-grid">
        <?php while($the_query->have_posts() ) : $the_query->the_post(); ?>

            <li><?php the_post_thumbnail(array(75,75)); ?></li>

        <?php endwhile;
        // Restore original Post Data
        wp_reset_postdata();
        ?>
	</ul>

	<?php
}

echo $args['before_widget'];