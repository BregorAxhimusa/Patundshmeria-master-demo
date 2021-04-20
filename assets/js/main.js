// toggle
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
});

//Filter tables
$(document).ready(function() {
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});
// Sidebar
$('#sidebar-wrapper .sidebar-link').each(function() {
    if (window.location.pathname.indexOf($(this).attr('href')) > -1) {
        $(this).addClass('sidebar-active');
    }
});

// Datepicker
$('input[date="datepicker"]').daterangepicker({
    "singleDatePicker": true,
    "dateLimit": {
        "days": 7
    },
    "alwaysShowCalendars": true,
    "minDate": "05/26/2020"
});

// Statitstic
window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title: {
            text: "Statistikat"
        },
        data: [{
            type: "column",
            showInLegend: true,
            dataPoints: [{
                    y: 300878,
                    label: "Ferizaj",
                    color: "#FF7F21"
                },
                {
                    y: 266455,
                    label: "Prishtine",
                    color: "#FF7F21"
                },
                {
                    y: 169709,
                    label: "Mitrovice",
                    color: "#FF7F21"
                },
                {
                    y: 158400,
                    label: "Peje",
                    color: "#FF7F21"
                },
                {
                    y: 142503,
                    label: "Prizren",
                    color: "#FF7F21"
                },
                {
                    y: 101500,
                    label: "Gjilan",
                    color: "#FF7F21"
                },
                {
                    y: 97800,
                    label: "Fushe Kosove",
                    color: "#FF7F21"
                },
                {
                    y: 80000,
                    label: "Istog",
                    color: "#FF7F21"
                }
            ]
        }]
    });
    chart.render();

}