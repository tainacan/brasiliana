<?php 

/* Filters possible Blocksy color palletes */
function brasiliana_filter_palette( $args ) {
	return array(
		array(
			'name' => 'Azul Escuro Brasiliana',
			'slug' => 'palette-color-1',
			'color' => 'var(--paletteColor1, #642D39)'
		),
		array(
			'name' => 'Azul Brasiliana',
			'slug' => 'palette-color-2',
			'color' => 'var(--paletteColor2, #864453)'
		),
		array(
			'name' => 'Cor de Texto Brasiliana',
			'slug' => 'palette-color-3',
			'color' => 'var(--paletteColor3, #040203)'
		),
		array(
			'name' => 'Cor de Título Brasiliana',
			'slug' => 'palette-color-4',
			'color' => 'var(--paletteColor4, #201e2e)'
		), 
		array(
			'name' => 'Cor de Borda Brasiliana',
			'slug' => 'palette-color-5',
			'color' => 'var(--paletteColor5, #c9c9c9)'
		),
		array(
			'name' => 'Cinza Brasiliana',
			'slug' => 'palette-color-6',
			'color' => 'var(--paletteColor6, #ececec)'
		),
		array(
			'name' => 'Branco Brasiliana',
			'slug' => 'palette-color-7',
			'color' => 'var(--paletteColor7, #fffff)'
		),
		array(
			'name' => 'Cor de Cartão Brasiliana',
			'slug' => 'palette-color-8',
			'color' => 'var(--paletteColor8, #f5f4ed)'
		),
		array(
			'name' => 'Amarelo claro Brasiliana',
			'slug' => 'palette-color-9',
			'color' => 'var(--paletteColor9, #FFE899)'
		),
		array(
			'name' => 'Azul claro Brasiliana',
			'slug' => 'palette-color-10',
			'color' => 'var(--paletteColor10, #98D4FF)'
		),
		array(
			'name' => 'Amarelo Brasiliana',
			'slug' => 'palette-color-11',
			'color' => 'var(--paletteColor11, #FFEBBD)'
		),
		array(
			'name' => 'Amarelo escuro Brasiliana',
			'slug' => 'palette-color-12',
			'color' => 'var(--paletteColor12, #B28A00)'
		),
		array(
			'name' => 'Vermelho Brasiliana',
			'slug' => 'palette-color-13',
			'color' => 'var(--paletteColor13, #CD403C)'
		),
		array(
			'name' => 'Vermelho claro Brasiliana',
			'slug' => 'palette-color-14',
			'color' => 'var(--paletteColor14, #FFCCCF)'
		),
		array(
			'name' => 'Escuro escuro Brasiliana',
			'slug' => 'palette-color-16',
			'color' => 'var(--paletteColor16, #800008)'
		),
		array(
			'name' => 'Cor de Erro Brasiliana',
			'slug' => 'palette-color-17',
			'color' => 'var(--paletteColor17, #CD403C)'
		),
		array(
			'name' => 'Cor de Acerto Brasiliana',
			'slug' => 'palette-color-18',
			'color' => 'var(--paletteColor18, #849965)'
		),
		array(
			'name' => 'Escuro Brasiliana',
			'slug' => 'palette-color-19',
			'color' => 'var(--paletteColor19, #111111)'
		),
		array(
			'name' => 'Claro Brasiliana',
			'slug' => 'palette-color-20',
			'color' => 'var(--paletteColor20, #f5f5f5)'
		),
		array(
			'name' => 'Cinza Brasiliana',
			'slug' => 'palette-color-21',
			'color' => 'var(--paletteColor21, #dddddd)'
		),
		array(
			'name' => 'Mais cinza Brasiliana',
			'slug' => 'palette-color-22',
			'color' => 'var(--paletteColor22, #666666)'
		)
	);
}
add_filter( 'blocksy:editor-color-palette', 'brasiliana_filter_palette' );
