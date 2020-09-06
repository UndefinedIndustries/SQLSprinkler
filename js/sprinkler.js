$(document).ready(function () {
    setInterval(function () {
        $.get('lib/api.php', function (data, textStatus, jqXHR) {
            system_status=data;
            alert(data);
        });
    }, 1000);
});

$(document).ready(function () {
    $("#menuopen").click(function () {
        $("#menuopen").fadeOut(250, function () {
            $('#menunav').fadeIn(250);
        });

    });
    $("#menuclose").click(function () {
        $('#menunav').fadeOut(250, function () {
            $("#menuopen").fadeIn(250);
        });

    });
});

function getData(index) {
    var xhttp = new XMLHttpRequest();
    var toggle = ((system_status[index]["status"] == "on") ? "off" : "on");
    var info = toggle + "=" + system_status[index]["gpio"];
    xhttp.open("GET", "lib/submit.php?" + info, true);
    console.log("sending");
    console.log(info);
    //    xhttp.send();

}
