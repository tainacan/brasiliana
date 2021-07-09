<?php 

/* Filters possible Blocksy color palletes */
function brasiliana_filter_palette( $args ) {
	return array(
		array(
			'name' => 'Açaí Brasiliana',
			'slug' => 'palette-color-1',
			'color' => 'var(--paletteColor1, #642d39)'
		),
		array(
			'name' => 'Açaí Brasiliana Claro',
			'slug' => 'palette-color-2',
			'color' => 'var(--paletteColor2, #923146)'
		),
		array(
			'name' => 'Cor de Texto Brasiliana',
			'slug' => 'palette-color-3',
			'color' => 'var(--paletteColor3, #1e1e15)'
		),
		array(
			'name' => 'Cor de Título Brasiliana',
			'slug' => 'palette-color-4',
			'color' => 'var(--paletteColor4, #2e1e1e)'
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
			'name' => 'Palha Brasiliana',
			'slug' => 'palette-color-9',
			'color' => 'var(--paletteColor9, #f95e05)'
		),
		array(
			'name' => 'Céu Brasiliana',
			'slug' => 'palette-color-10',
			'color' => 'var(--paletteColor10, #adcfd8)'
		),
		array(
			'name' => 'Abacate Brasiliana',
			'slug' => 'palette-color-11',
			'color' => 'var(--paletteColor11, #849965)'
		),
		array(
			'name' => 'Terra Brasiliana',
			'slug' => 'palette-color-12',
			'color' => 'var(--paletteColor12, #604d43)'
		),
		array(
			'name' => 'Sangue Brasiliana',
			'slug' => 'palette-color-13',
			'color' => 'var(--paletteColor13, #cd403c)'
		),
		array(
			'name' => 'Laranja mais claro alt CTRL+S',
			'slug' => 'palette-color-14',
			'color' => 'var(--paletteColor14, #ffd299)'
		),
	);
}
add_filter( 'blocksy:editor-color-palette', 'brasiliana_filter_palette' );
