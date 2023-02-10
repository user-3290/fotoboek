const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const q = urlParams.get("q");
const functions =
    urlParams.get("functions") !== null
        ? urlParams.get("functions").split(",")
        : null;
const entities =
    urlParams.get("entities") !== null
        ? urlParams.get("entities").split(",")
        : null;
const regions =
    urlParams.get("regions") !== null
        ? urlParams.get("regions").split(",")
        : null;
const teams =
    urlParams.get("teams") !== null ? urlParams.get("teams").split(",") : null;

if (teams == null || teams == "") $("#team").next(".select2-container").hide();
if (regions == null || regions == "")
    $("#region").next(".select2-container").hide();

$("#q").val(q);

functions.forEach((function_id) => {
    if ($("#functions").find("option[value='" + function_id + "']").length)
        $("#functions").val(function_id).trigger("change");
});
$("#functions").val(functions);
$("#functions").trigger("change"); // Notify any JS components that the value changed
