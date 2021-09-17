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
            <!-- wp:image {"align":"center","id":163601,"width":842,"height":478,"sizeSlug":"full","linkDestination":"none","className":"is-style-brasiliana-rounded is-brasiliana-museo-cover"} -->
            <div class="wp-block-image is-style-brasiliana-rounded"><figure class="aligncenter size-full is-resized"><img src="https://integracaoibram.tainacan.org/wp-content/uploads/2021/09/MuseuDaAbolicao-edited.jpg" alt="" class="wp-image-163601" width="842" height="478"/></figure></div>
            <!-- /wp:image -->
            
            <!-- wp:group {"className": "is-brasiliana-museo-group", "style":{"spacing":{"padding":{"top":"0%","right":"15%","bottom":"0%","left":"15%"}}}} -->
                <div class="wp-block-group" style="padding-top:0%;padding-right:15%;padding-bottom:0%;padding-left:15%"><!-- wp:image {"align":"center","id":163573,"width":124,"height":124,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded is-brasiliana-museo-logo"} -->
                <div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="https://integracaoibram.tainacan.org/wp-content/uploads/2021/09/MuseuAbolicao-1.png" alt="" class="wp-image-163573" width="124" height="124"/></figure></div>
                <!-- /wp:image -->
                
                <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px"}},"textColor":"palette-color-3"} -->
                <h1 class="has-text-align-center has-palette-color-3-color has-text-color" style="font-size:48px">MUSEU DA ABOLIÇÃO</h1>
                <!-- /wp:heading -->
                
                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px"}}} -->
                <h2 class="has-text-align-center" style="font-size:22px">RECIFE - PE</h2>
                <!-- /wp:heading -->
                
                <!-- wp:social-links {"iconColor":"palette-color-3","iconColorValue":"var(\u002d\u002dpaletteColor3, #1e1e15)","align":"center","className":"is-style-logos-only"} -->
                <ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"http://museudaabolicao.museus.gov.br/","service":"chain"} /-->
                
                <!-- wp:social-link {"url":"https://twitter.com/museudaabolicao","service":"twitter"} /-->
                
                <!-- wp:social-link {"url":"https://pt-br.facebook.com/MuseuAbolicao","service":"facebook"} /-->
                
                <!-- wp:social-link {"url":"https://www.youtube.com/channel/UCoNLUAGitzsUu1MR_RP1ZsQ","service":"youtube"} /-->
                
                <!-- wp:social-link {"url":"https://www.instagram.com/museuabolicao/","service":"instagram"} /--></ul>
                <!-- /wp:social-links -->
                
                <!-- wp:separator {"className":"is-style-wide"} -->
                <hr class="wp-block-separator is-style-wide"/>
                <!-- /wp:separator -->
                
                <!-- wp:paragraph -->
                <p>Criado em 1957, o Museu da Abolição – Centro de Referência da Cultura Afro-Brasileira está localizado no sobrado que foi sede do Engenho Madalena e residência do conselheiro abolicionista João Alfredo. O museu foi oficialmente inaugurado em 1983, com a exposição “O Processo Abolicionista Através dos Textos Oficiais”. Fechado em 1990, foi reaberto em 1996, no Dia do Patrimônio Cultural.</p>
                <!-- /wp:paragraph -->
                
                <!-- wp:heading {"level":3,"className":"is-style-brasiliana-barlow-font"} -->
                <h3 class="is-style-brasiliana-barlow-font"><strong>Links</strong></h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>Site oficial: <a href="http://museudaabolicao.museus.gov.br/">http://museudaabolicao.museus.gov.br/</a><br>Museu da Abolição no <a href="http://museus.cultura.gov.br/espaco/6102/">Museusbr</a><br>Acervo online no <a href="https://museudaabolicao.acervos.museus.gov.br/">Tainacan</a><br>Avalie o Museu da Abolição no <a href="https://www.tripadvisor.com.br/Attraction_Review-g304560-d3282491-Reviews-or10-Museu_da_Abolicao-Recife_State_of_Pernambuco.html">TripAdvisor</a><br>Página do museu na<a href="https://pt.wikipedia.org/wiki/Museu_da_Aboli%C3%A7%C3%A3o"> Wikipedia</a></p>
                <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:spacer {"height":51} -->
            <div style="height:51px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:group {"align":"full"} -->
            <div class="wp-block-group alignfull">
            
                <!-- wp:heading {"align":"wide"} -->
                <h2 class="alignwide">NESTE MUSEU</h2>
                <!-- /wp:heading -->
                
                <!-- wp:tainacan/carousel-items-list {"align": "wide", "className": "is-style-wide"} -->
                <!-- /wp:tainacan/carousel-items-list -->
                
                <!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
                <hr class="wp-block-separator alignwide is-style-wide"/>
                <!-- /wp:separator -->
                
                <!-- wp:columns {"align":"wide"} -->
                <div class="wp-block-columns alignwide"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-brasiliana-barlow-font"} -->
                <h3 class="is-style-brasiliana-barlow-font"><strong>ENDEREÇO</strong>:</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>Recife, Pernambuco<br>Rua Benfica, 1150 - Madalena<br>Cep: 50720-001</p>
                <!-- /wp:paragraph --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-brasiliana-barlow-font"} -->
                <h3 class="is-style-brasiliana-barlow-font"><strong>CONTATOS</strong>:</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>Educativo: (81) 99966-0063<br>Administrativo: (81) 99815-0063<br>E-mail: <a href="mailto:mab@museus.gov.br">mab@museus.gov.br</a></p>
                <!-- /wp:paragraph --></div>
                <!-- /wp:column -->
                
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-brasiliana-barlow-font"} -->
                <h3 class="is-style-brasiliana-barlow-font"><strong>HORÁRIO DE FUNCIONAMENTO</strong>:</h3>
                <!-- /wp:heading -->
                
                <!-- wp:paragraph -->
                <p>Segunda a sexta, das 9h às 17h. Fechado aos domingos e na primeira segunda-feira de cada mês<br>O MAB está temporariamente fechado devido a obras de restauro e reforma.<br>Previsão de reabertura: 2022</p>
                <!-- /wp:paragraph --></div>
                <!-- /wp:column --></div>
                <!-- /wp:columns --></div>
            <!-- /wp:group -->
            
            <!-- wp:paragraph -->
            <p></p>
            <!-- /wp:paragraph -->
            '
        )
    );
}
add_action('init', 'brasiliana_block_patterns');
