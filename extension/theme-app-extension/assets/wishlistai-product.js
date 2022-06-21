const wishaiAdd = (event) => {
    let storage = (localStorage.getItem("wishai")) ? JSON.parse(localStorage.getItem("wishai")) : false;
    let wishData = {
        product: {
            "product_id": event.getAttribute("data-product_id"),
            "variant_id": event.getAttribute("data-variant_id"),
            "handle": event.getAttribute("data-product_handle"),
        },
        customer: {
            "customer_id": event.getAttribute("data-customer_id"),
            "customer_name": event.getAttribute("data-customer_name"),
            "customer_email": event.getAttribute("data-customer_email"),
        },
        share_id: (storage && storage.share_id) ? storage.share_id : false
    };
    console.log(wishData);
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
        wishaiUpdateDataUi();
    })();
}