<?php

/**
 * Block Styles
 */
if ( function_exists('register_block_style') ) {
    /**
     * Register block styles.
     *
     * @since 1.0.0
     *
     * @return void
     */
    function brasiliana_block_styles() {

        register_block_style(
            'core/cover',
            array(
                'name'  => 'brasiliana-rounded',
                'label' =>  __('Arredondado Brasiliana', 'brasiliana'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'brasiliana-rounded',
                'label' =>  __('Arredondado Brasiliana', 'brasiliana'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'tainacan/carousel-terms-list',
            array(
                'name'  => 'brasiliana-rounded',
                'label' =>  __('Círculo Brasiliana', 'brasiliana'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'brasiliana-rounded',
                'label' =>  __('Arredondado Brasiliana', 'brasiliana'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'tainacan/carousel-terms-list',
            array(
                'name'  => 'brasiliana-circle',
                'label' =>  __('Círculo Brasiliana', 'brasiliana'),
                'isDefault' => false,
            )
        );
        
        register_block_style(
            'tainacan/carousel-collections-list',
            array(
                'name'  => 'brasiliana-circle',
                'label' =>  __('Círculo Brasiliana', 'brasiliana'),
                'isDefault' => false,
            )
        );

    }
    add_action('init', 'brasiliana_block_styles');
}