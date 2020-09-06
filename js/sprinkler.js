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
function getData(sys){
    var xhttp = new XMLHttpRequest();
    var test = document.getElementById(sys).name;
    var info=test+"="+sys;
    xhttp.open("GET", "lib/submit.php?"+info, true);
    console.log("sending");
    console.log(info);
    xhttp.send();

}