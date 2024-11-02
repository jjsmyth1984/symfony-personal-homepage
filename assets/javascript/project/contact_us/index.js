document.querySelector("form#contact-us-form").addEventListener("submit", event => {

    event.preventDefault();
    const {elements} = event.target;
    const postUrl = event.target.action;
    const method = event.target.method;

    let data = {
        'contact_us_firstname': elements["contact_us_firstname"].value,
        'contact_us_surname': elements["contact_us_surname"].value,
        'contact_us_email': elements["contact_us_email"].value,
        'contact_us_subject': elements["contact_us_subject"].value,
        'contact_us_message': elements["contact_us_message"].value,
        'contact_us_honey_pot': elements["contact_us_honey_pot"].value
    }

    // review and improve... looking to stop bots, maybe also add a simple calculation
    if (data.contact_us_honey_pot !== "" || data.contact_us_honey_pot.length > 0) {
        location.reload();
    }

    // Remove honey pot after it passes validation
    delete data.contact_us_honey_pot

    // Basic validation; frontend is strict and should capture everything, but this is a second tier
    for (let key in data) {
        if (data[key].length === 0) {
            document.getElementById(key).style.border = '1px solid red';
            return false;
        }
    }

    // Validation passed and posting form data
    postFormData(data, postUrl, method);

});

/**
 *
 * @param data
 * @param postUrl
 * @param method
 * @returns {Promise<any>}
 */
let postFormData = async function (data, postUrl, method) {

    let headers = {
        'Content-type': 'application/json; charset=UTF-8'
    };

    let request = {
        method: method,
        body: JSON.stringify(data),
        headers
    };

    let page = await fetch(postUrl, request);

    return await page.json();

};