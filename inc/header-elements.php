<?php

/**
 * Adds action to insert share and back buttons on headers
 */
function brasiliana_add_share_and_back_buttons() {
    ?>
    <div class="brasiliana-header-elements">
        <button class="brasiliana-header-button brasiliana-header-button--back" onclick="window && window.history && window.history ? window.history.back() : null">
            <span class="icon">
                <i class="tainacan-icon tainacan-icon-previous"></i>
            </span>
        </button>
        <button class="brasiliana-header-button brasiliana-header-button--share">
            <span class="icon">
                <i class="tainacan-icon tainacan-icon-share"></i>
            </span>
        </button>
    </div>
    <?php
}
add_action('blocksy:hero:title:before', 'brasiliana_add_share_and_back_buttons');