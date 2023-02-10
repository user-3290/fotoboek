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

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const teamsParams =
    urlParams.get("teams") !== null ? urlParams.get("teams").split(",") : null;

// WERKT NIET!!!!!!!!!!!!!! Vechten me Javascript is toegestaan
if (teamsParams !== null)
    teamsParams.forEach((team_id) => {
        teams.results.forEach((team) => {
            let obj = team.children.find((o) => o.id === parseInt(team_id));
            console.log(obj);
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
