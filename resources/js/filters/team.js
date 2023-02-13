import urlParams from "./main";

var teams = {
    results: [
        {
            id: 14,
            text: "Crea & Mode",
            children: [
                {
                    id: 1,
                    text: "Test",
                },
                {
                    id: 36,
                    text: "Mode",
                },
                {
                    id: 37,
                    text: "Creatief",
                },
            ],
        },
        {
            id: 17,
            text: "Gids en reisleider",
            children: [
                {
                    id: 40,
                    text: "Gids en reisleider",
                },
            ],
        },
    ],
};

var teamsParams = urlParams("teams");

// WERKT NIET!!!!!!!!!!!!!! Vechten me Javascript is toegestaan
if (teamsParams !== null)
    teamsParams.forEach((team_id) => {
        teams.results.forEach((entity) => {
            entity.children.forEach((team) => {
                if (team.id == team_id) team.selected = true;
            });
            // var obj = team.children.find((o) => o.id === team_id);
            // obj.selected = true;
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
