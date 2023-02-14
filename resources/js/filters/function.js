import urlParams from "./main";
import functions from "../../../storage/app/public/data/functions";

var functionsParams = urlParams("functions");

if (functionsParams !== null)
    functionsParams.forEach((function_id) => {
        let obj = functions.find((o) => o.id === parseInt(function_id));
        if (obj) obj.selected = true;
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
