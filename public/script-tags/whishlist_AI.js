console.log("Working...");
let wishaiStorage = localStorage.getItem("wishai")
    ? JSON.parse(localStorage.getItem("wishai"))
    : false;
console.log(wishaiStorage);

const wishaiUpdateDataUi = () => {
    if (wishaiStorage) {
        if (wishaiStorage.wishlist_count > 0) {
            document.getElementById("wishai_header_count").innerText = wishaiStorage.wishlist_count;
            (wishaiStorage.product).forEach(function (item, index) {
                console.log(item, '{{product.selected_or_first_available_variant.id}}');
            });
        }
    }
    console.log("wishaiUpdateDataUi");
};
wishaiUpdateDataUi();
