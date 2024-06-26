

add_filter( 'gettext', 'wps_translate_words_array' );
add_filter( 'ngettext', 'wps_translate_words_array' );

function wps_translate_words_array( $translated ) {
    $words = array(
        // 'word to translate' => 'translation'
        'Related Products' => 'Check out these related products',
    );
    $translated = str_ireplace( array_keys($words), $words, $translated );
    return $translated;
}
