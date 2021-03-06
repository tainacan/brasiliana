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
            'core/heading',
            array(
                'name'  => 'brasiliana-barlow-font',
                'label' =>  __('Fonte Alternativa', 'brasiliana'),
                'isDefault' => false,
            )
        );
        
        register_block_style(
            'getwid/images-slider',
            array(
                'name'  => 'brasiliana-rounded',
                'label' =>  __('Arredondado Brasiliana', 'brasiliana'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'getwid/images-slider',
            array(
                'name'  => 'brasiliana-circle',
                'label' =>  __('Círculo Brasiliana', 'brasiliana'),
                'isDefault' => false,
            )
        );


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
                'label' =>  __('Arredondado Brasiliana', 'brasiliana'),
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
            'core/image',
            array(
                'name'  => 'brasiliana-item-image',
                'label' =>  __('Imagem de Item Brasiliana', 'brasiliana'),
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

        register_block_style(
            'core/search',
            array(
                'name'  => 'brasiliana-search-bar',
                'label' =>  __('Barra de Busca Brasiliana', 'brasiliana'),
                'isDefault' => true,
            )
        );

        register_block_style(
            'core/button',
            array(
                'name'  => 'brasiliana-fill-dark',
                'label' =>  __('Preenchido fundo escuro', 'brasiliana'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/button',
            array(
                'name'  => 'brasiliana-outline-dark',
                'label' =>  __('Contorno fundo escuro', 'brasiliana'),
                'isDefault' => false,
            )
        );

    }
    add_action('init', 'brasiliana_block_styles');
}