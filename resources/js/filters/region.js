import urlParams from "./main";

var regions = [
    {
        id: "aarschot",
        text: "Aarschot",
    },
    {
        id: "diest",
        text: "Diest",
    },
    {
        id: "haagt",
        text: "Haagt",
    },
    {
        id: "leuven",
        text: "Leuven",
    },
    {
        id: "tienen",
        text: "Tienen",
    },
];

var data = $.map(regions, function (obj) {
    obj.id = obj.id || obj.pk; // replace pk with your identifier

    return obj;
});

$("#region").select2({
    data: data,
    width: $(this).data("width")
        ? $(this).data("width")
        : $(this).hasClass("w-100")
        ? "100%"
        : "style",
    placeholder: "Regio('s)",
    closeOnSelect: false,
    language: "nl",
});

$("#region").next(".select2-container").hide();

var regionsParams = urlParams("regions");

if (regionsParams !== null) {
    regionsParams.forEach((region_id) => {
        let obj = regions.find((o) => o.id === region_id);
        obj.selected = true;
    });
    $("#region").next(".select2-container").hide();
}

$("#function").on("select2:select", function (e) {
    var data = e.params.data;
    if (data["text"].toLowerCase() == "leerkracht")
        return $("#region").next(".select2-container").show();
});

$("#function").on("select2:unselect", function (e) {
    var data = e.params.data;
    if (data["text"].toLowerCase() == "leerkracht") {
        $("#region").val("").trigger("change");
        $("#region").next(".select2-container").hide();
        return;
    }
});
