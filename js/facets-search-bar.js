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
            facetsSearchBarInput = facetsSearchBarInput[0];
            facetsSearchBarInput.oninput = (event) => {
                console.log(event);
            }
        }
    }
});
