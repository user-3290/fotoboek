import urlParams from "./main";
import teams from "../../../storage/app/public/data/teams";

var teamsParams = urlParams("teams");

if (teamsParams !== null)
    teamsParams.forEach((team_id) => {
        teams.results.forEach((entity) => {
            entity.children.forEach((team) => {
                if (team.id == team_id) team.selected = true;
            });
        });
    });

var data = $.map(teams, function (obj) {
    obj.id = obj.id || obj.pk; // replace pk with your identifier

    return obj;
});
$("#team").select2({
    data: data,
    width: $(this).data("width")
        ? $(this).data("width")
        : $(this).hasClass("w-100")
        ? "100%"
        : "style",
    placeholder: "Team(s)",
    closeOnSelect: false,
    language: "nl",
});

// $("#entity").on("select2:select", function (e) {
//     var data = e.params.data;
//     return $("#team").next(".select2-container").show();
// });

// $("#entity").on("select2:unselect", function (e) {
//     var data = e.params.data;
//     return $("#team").next(".select2-container").hide();
// });

function undefined() {
    // problem solved
}
