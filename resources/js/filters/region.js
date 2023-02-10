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

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const regionsParams =
    urlParams.get("regions") !== null
        ? urlParams.get("regions").split(",")
        : null;

if (regionsParams !== null)
    regionsParams.forEach((region_id) => {
        let obj = regions.find((o) => o.id === region_id);
        obj.selected = true;
    });

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

$("#function").on("select2:select", function (e) {
    var data = e.params.data;
    if (data["id"] == 0) return $("#region").next(".select2-container").show();
});

$("#function").on("select2:unselect", function (e) {
    var data = e.params.data;
    if (data["id"] == 0) return $("#region").next(".select2-container").hide();
});
