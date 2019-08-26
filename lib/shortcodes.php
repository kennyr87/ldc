<?php

function ldc_embed_shortcode( $html, $url, $attr, $post_id ) {

    $html = str_replace('<iframe', '<iframe class="embed-responsive-item" ', $html);

    $html = '<div class="embed-responsive embed-responsive-16by9">' .
            $html .
            '</div';

    return $html;
}

add_filter( 'embed_oembed_html', 'ldc_embed_shortcode', 10, 4);
?>