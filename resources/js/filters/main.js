function urlParams(param, separator = ",") {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    return urlParams.get(param) !== null
        ? urlParams.get(param).split(separator)
        : null;
}

var qParams = urlParams("q");

if (qParams !== null) document.getElementById("q").value = qParams;

export default urlParams;
