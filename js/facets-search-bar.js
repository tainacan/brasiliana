// Checks if document is loaded
const performWhenDocumentIsLoaded = callback => {
    if (/comp|inter|loaded/.test(document.readyState))
        cb();
    else
        document.addEventListener('DOMContentLoaded', callback, false);
}

performWhenDocumentIsLoaded(() => {
    let facetsSearchBar = document.getElementsByClassName('brasiliana-facets-search-bar');
    if (facetsSearchBar && facetsSearchBar.length) {
        facetsSearchBar = facetsSearchBar[0];
        let facetsSearchBarInput = facetsSearchBar.getElementsByClassName('wp-block-search__input');
        if (facetsSearchBarInput && facetsSearchBarInput.length) {

            let facets = document.getElementsByClassName('wp-block-tainacan-facets-list');

            if (facets && facets.length) {
                facetsSearchBarInput = facetsSearchBarInput[0];
                facetsSearchBarInput.oninput = (event) => {
                    if (event && event.target) {
                        for (let i = 0; i < facets.length; i++) {
                            facets[i].dispatchEvent(new CustomEvent('tainacan-blocks-facets-list-update', {detail: { searchString: event.target.value }}))
                        }
                    }
                }
            }
        }
    }
});
