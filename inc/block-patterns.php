<?php

/**
 * Block Patterns
 */
function brasiliana_block_patterns()
{
    register_block_pattern_category(
        'brasiliana',
        array('label' => __('Brasiliana', 'brasiliana'))
    );

    $template_images_directory = get_template_directory_uri() . '/assets/images/';

    register_block_pattern(
        'brasiliana/ficha-museu',
        array(
            'title'       => __('Ficha do Museu', 'brasiliana'),
            'description' => _x('Blocos com elementos para mostrar os detalhes do museu agregado.', 'Descrição do padrão de bloco', 'brasiliana'),
            'categories' => array('brasiliana'),
            'content'     => '
            '
        )
    );
}
add_action('init', 'brasiliana_block_patterns');
