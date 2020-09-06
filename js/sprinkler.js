$(document).ready(function () {
    setInterval(function () {

        $("#data").load("lib/check.php");
    }, 1000);
});

$(document).ready(function () {
    $("#menuopen").click(function () {
        $("#menuopen").fadeOut(250,function () {
            $('#menunav').fadeIn(250);
        });

    });
    $("#menuclose").click(function () {
        $('#menunav').fadeOut(250, function () {
            $("#menuopen").fadeIn(250);
        });

    });
});
