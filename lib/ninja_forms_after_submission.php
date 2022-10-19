<?php

add_action( 'ninja_forms_after_submission', 'my_ninja_forms_after_submission' );

function my_ninja_forms_after_submission( $form_data ){
  // function console_log($output, $with_script_tags = true) {
  //   $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
  // }

  // echo '<script>console.log('.json_encode($form_data).'</script>';

  // if ( $wp_query->have_posts() ) {

  //   global $post;


  //   while ( have_posts() ) : the_post();
  //     fsb_get_post_card( 'template-parts/loop', 'post-card', [
  //       'post_box_type'  => $post_box_type,
  //       'post_card_type' => 'img_left',

  //     ]);
  //   endwhile;


  //   wp_reset_query();

  //   $posts_status = 'Ok';
  //   $posts_status_code = 200;

  // } else {

  //   $posts_status = 'No Content';
  //   $posts_status_code = 204;
  // }

  echo wp_json_encode(
    array(
      'html'                  => ob_get_clean(),
      // 'post_status'           => $posts_status,
      // 'post_status_code'      => $posts_status_code,
      'form_data'             => $form_data
    )
  );

  die();

  // Do stuff.
  // return $form_data;
}
