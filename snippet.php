<?php

$area_name = get_field( 'area_name' );

$vars_subs = array(
  '{areaname}'       => $area_name,
  '{$tag}'        => 'some_acf_field',
  '{$anothertag}' => 'another_acf_field'
);

$query2 = new WP_Query( array( 'page_id' => 25162 ) );

if ( $query2->have_posts() ) {

                while ( $query2->have_posts() ) {

                                $query2->the_post();
                                $original_divi = strtr( get_the_content(), $vars_subs );
                                $original_divi = wpautop( $original_divi );

                                echo do_shortcode( $original_divi );

                }

                wp_reset_postdata();
}

?>
