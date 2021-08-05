<?php


/**
 * Updates search modal with a list of facets
 */
function brasiliana_add_facets_to_search_modal($form, $args) {
    $brasiliana_collection_id = null;

    if ( $args && isset($args['ct_post_type']) ) {
        foreach( $args['ct_post_type'] as $post_type ) {
            if ( substr( $post_type, 0, 7 ) === "tnc_col" ) {
                $brasiliana_collection_id = str_replace('tnc_col_', '', $post_type);
                $brasiliana_collection_id = str_replace('_item', '', $brasiliana_collection_id);
                break;
            }
        };
    }

    if (!$brasiliana_collection_id)
        return;
    //$brasiliana_collection_id = '130957';
    $collection = new \Tainacan\Entities\Collection($brasiliana_collection_id);
    
    $metadatum_repository = \tainacan_metadata();
    $args = [
		'meta_query' => [
			[
				'key'     => 'metadata_type',
				'value'   => 'Tainacan\Metadata_Types\Taxonomy',
			]
		]
	];
    $metadata = $metadatum_repository->fetch_by_collection( $collection, $args );

    if ( !$metadata || !count($metadata) )
        return;

    ob_start();
    echo $form;
    ?>
        <div class="brasiliana-search-modal-facets-list">
            <div class="brasiliana-search-modal-facets-list__header">
            <?php
                foreach($metadata as $metadatum) {
                    $args = [
                        'collection_id' => $brasiliana_collection_id,
                        'number' => 12,
                        'count_items' => true
                    ];
                    $facets = $metadatum_repository->fetch_all_metadatum_values( $metadatum->get_ID(), $args );
                    
                    if ( $facets && isset($facets['values']) && count($facets['values']) ) : ?>
                        
                        <details>
                            <summary class="metadatum-name">
                                <?php echo $metadatum->get_name() ?>
                                
                            </summary>
                            <div class="ct-container brasiliana-search-modal-facets-list__content">
                                <?php 
                                    foreach($facets['values'] as $facet) :

                                        $term_label = $facet['label'];
                                        $term_total_items = $facet['total_items'];
                                        $term_link = get_term_link((int) $facet['value']);

                                        if ($term_link instanceof \WP_Error)
                                            continue;

                                        ?>
                                        <a href="<?php echo $term_link; ?>">
                                            <span class="facet-label"><?php echo $term_label; ?></span><span class="facet-total-items"><?php echo $term_total_items; ?> items</span>
                                        </a>
                                    <?php endforeach; 
                                ?>
                            </div>
                            </details>
                        
                    <?php endif; ?>
                <?php } ?>
            </div>
        </div>

    <?php
    return ob_get_clean();
}
add_filter( 'get_search_form', 'brasiliana_add_facets_to_search_modal', 0, 2);