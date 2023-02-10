var functions = {
    results: [
        {
            id: 1,
            text: "Test",
        },
        {
            id: 0,
            text: "Leerkracht",
        },
        {
            id: 2,
            text: "Coördinator",
        },
    ],
};

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const functionsParams =
    urlParams.get("functions") !== null
        ? urlParams.get("functions").split(",")
        : null;

if (functionsParams !== null)
    functionsParams.forEach((function_id) => {
        let obj = functions.results.find((o) => o.id === parseInt(function_id));
        obj.selected = true;
    });

var data = $.map(functions, function (obj) {
    obj.id = obj.id || obj.pk; // replace pk with your identifier

    return obj;
});
$("#function").select2({
    data: data,
    width: $(this).data("width")
        ? $(this).data("width")
        : $(this).hasClass("w-100")
        ? "100%"
        : "style",
    placeholder: "Functie(s)",
    closeOnSelect: false,
    language: "nl",
});