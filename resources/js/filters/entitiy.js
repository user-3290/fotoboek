import urlParams from "./main";
import entities from "../../../storage/app/public/data/entities";

var entitiesParams = urlParams("entities");

if (entitiesParams !== null)
    entitiesParams.forEach((entity_id) => {
        let obj = entities.find((o) => o.id === parseInt(entity_id));
        if (obj) obj.selected = true;
    });

var data = $.map(entities, function (obj) {
    obj.id = obj.id || obj.pk; // replace pk with your identifier

    return obj;
});

$("#entity").select2({
    data: data,
    width: $(this).data("width")
        ? $(this).data("width")
        : $(this).hasClass("w-100")
        ? "100%"
        : "style",
    placeholder: "Entiteit(en)",
    closeOnSelect: false,
});
