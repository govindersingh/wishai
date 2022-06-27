/**!
 *  By Govinder!
 *  Here is real templating for wishai page.
 */
 let wishaiStoragePage = localStorage.getItem("wishai")
 ? JSON.parse(localStorage.getItem("wishai"))
 : false;
const wishaiElement = document.getElementById("wishaiPage");
const wishaiHtml = `<div class="wishai_grid">
<div class="product-grid4">
    <div class="product-image4">
        <a href="#variant_url#">
            <img class="pic-1" src="#image1#">
        </a>
        <ul class="social">
            <li><a href="#variant_url#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
            <li><a href="javascript:void(0)" onClick="wishaiRemoveProduct('#variant_id#')" data-tip="Remove to Wishlist"><i class="fa fa-remove"></i></a></li>
        </ul>
        <!--span class="product-new-label">Sale</span-->
        <!--span class="product-discount-label">-10%</span-->
    </div>
    <div class="product-content">
        <h3 class="title">#product_title#</h3>
        <h4 class="title">#option1#</h4>
        <div class="price">
            #price#
            <span>#compare_at_price#</span>
        </div>
        <a class="add-to-cart" href="javascript:void(0)" onClick="wishaiAddToCart('#variant_id#')">ADD TO CART</a>
    </div>
</div>
</div>`;

console.log(window.Shopify);
const index = () => {
    wishaiElement.innerHTML = '';
    var wishaiStorageProducts = wishaiStoragePage.product;
    wishaiStorageProducts.forEach(function(item, index){
        const rawResponsePage = fetch('/products/' + item.handle + '.js')
        .then(response => response.json())
        .then(response => {
            console.log(response);
            (response.variants).map(function(value, key) {
                if(value.id == item.variant_id){
                    var wishaiHtmlDublicate = wishaiHtml;
                    wishaiHtmlDublicate = wishaiHtmlDublicate.split("#variant_url#").join(`${response.url}?v=${value.id}`);
                    wishaiHtmlDublicate = wishaiHtmlDublicate.replace("#product_title#", response.title);
                    wishaiHtmlDublicate = wishaiHtmlDublicate.replace("#option1#", value.option1);
                    wishaiHtmlDublicate = wishaiHtmlDublicate.replace("#price#", value.price);
                    wishaiHtmlDublicate = wishaiHtmlDublicate.replace("#compare_at_price#", value.compare_at_price);

                    if(value.featured_image){
                        wishaiHtmlDublicate = wishaiHtmlDublicate.replace("#image1#", value.featured_image.src);
                    }else if(response.featured_image){
                        wishaiHtmlDublicate = wishaiHtmlDublicate.replace("#image1#", response.featured_image);
                    }else{
                        wishaiHtmlDublicate = wishaiHtmlDublicate.replace("#image1#", response.featured_image);
                    }

                    wishaiHtmlDublicate = wishaiHtmlDublicate.split("#variant_id#").join(value.id);
                    
                    wishaiElement.innerHTML += wishaiHtmlDublicate;
                }
            })
        });
    });
}
index();

function wishaiRemoveProduct(variant_id){
    let storage = (localStorage.getItem("wishai")) ? JSON.parse(localStorage.getItem("wishai")) : false;
    let wishData = {
        product: {
            "variant_id": variant_id,
        },
        share_id: (storage && storage.share_id) ? storage.share_id : false,
        action:  "REMOVE_TO_WISHAI"
    };
    (async () => {
        const rawResponse = await fetch('/apps/proxy/wishai',{
            method: "POST",
            headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/json'
            },
            body: JSON.stringify(wishData)
        });
        const content = await rawResponse.json();
        localStorage.setItem("wishai", JSON.stringify(content));
        wishaiStoragePage = localStorage.getItem("wishai") ? JSON.parse(localStorage.getItem("wishai")) : false;
        if (wishaiStoragePage.wishlist_count > 0) {
            if(document.getElementById("wishai_header_count")){
                document.getElementById("wishai_header_count").innerText = wishaiStoragePage.wishlist_count;
            }
            index();
        }else{
            if(document.getElementById("wishai_header_count")){
                document.getElementById("wishai_header_count").innerText = '';
            }
            index();
        }
    })();
}

function wishaiAddToCart(variant_id){
    fetch('/cart/add.js',{
        method: "POST",
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({id:variant_id, quantity:1})
    }).then(response => { window.location.replace("/cart"); });
}

