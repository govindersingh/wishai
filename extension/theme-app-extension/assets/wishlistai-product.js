const wishaiAdd = (event) => {
    console.log(event);

    let wishData = {
        product: {
            "product_id": event.getAttribute("data-product_id"),
            "variant_id": event.getAttribute("data-variant_id"),
            "quantity": event.getAttribute("data-quantity"),
        },
        customer: {
            "customer_id": event.getAttribute("data-customer_id"),
            "customer_name": event.getAttribute("data-customer_name"),
            "customer_email": event.getAttribute("data-customer_email"),
        }
    };

    (async () => {
        const rawResponse = await fetch('https://appbundle.myshopify.com/apps/proxy/proxy', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(wishData)
        });
        const content = await rawResponse;

        console.log(content);
    })();
    console.log(wishData);
}