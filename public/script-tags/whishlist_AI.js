let svgActive = '<svg height="22px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path style="fill:#ffffff;" d="M340.8,83C307,83,276,98.8,256,124.8c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6  L245.1,418l10.9,11l10.9-11l148.3-149.8c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"/></svg>';
let svgDeactive = '<svg height="22px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path style="fill:#ffffff;" d="M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"/></svg>';
let headerIcon = '<div class="wish_icon" style="position:relative;"><a href="/pages/wishai" style="display: block;line-height: 0;"><svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="26px" height="26px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z"/></svg></a><span id="wishai_header_count" style="position:absolute; top:-11px; left:23px; display:block; color:#000000;"></span></div>';
document.getElementById("wishaiHeaderIcon").innerHTML = headerIcon;

const wishaiUpdateDataUi = () => {
    let wishaiStorage = localStorage.getItem("wishai")
        ? JSON.parse(localStorage.getItem("wishai"))
        : false;
    console.log(wishaiStorage.product);
    if (wishaiStorage) {
        if (wishaiStorage.wishlist_count > 0) {
            if(document.getElementById("wishai_header_count")){
                document.getElementById("wishai_header_count").innerText = wishaiStorage.wishlist_count;
            }
            (wishaiStorage.product).forEach(function (item, index) {
                if(document.getElementById("wishaiProductButton")){console.log(document.getElementById("wishaiProductButton"));
                    if(item.variant_id == document.getElementById("wishaiProductButton").getAttribute('data-variant_id')){
                        document.querySelector("#wishaiProductButton button span .wishai_svg").innerHTML = svgActive;
                        document.querySelector("#wishaiProductButton button").setAttribute("data-action","REMOVE_TO_WISHAI");
                    }else{
                        document.querySelector("#wishaiProductButton button span .wishai_svg").innerHTML = svgDeactive;
                        document.querySelector("#wishaiProductButton button").setAttribute("data-action","ADD_TO_WISHAI");
                    }
                }
            });
        }else{
            if(document.getElementById("wishai_header_count")){
                document.getElementById("wishai_header_count").innerText = '';
            }
            if(document.getElementById("wishaiProductButton")){
                document.querySelector("#wishaiProductButton button span .wishai_svg").innerHTML = svgDeactive;
                document.querySelector("#wishaiProductButton button").setAttribute("data-action","ADD_TO_WISHAI");
            }
        }
    }
};
wishaiUpdateDataUi();
