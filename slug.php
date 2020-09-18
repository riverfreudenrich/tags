<?php $terms = get_the_terms( $post->ID, 'post_tag' );if ( !empty( $terms ) ){ $term = array_shift( $terms ); echo $term->slug;} ?>
