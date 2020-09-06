var system_status = "";
$(document).ready(function () {
    setInterval(function () {
        $.get('lib/api.php', function (data, textStatus, jqXHR) {
            system_status = JSON.parse(data);
        });
        for (i = 0; i < system_status.length; i++) {
            button_id = system_status[i]["gpio"];
            name_id = system_status[i]["status"].charAt(0).toUpperCase() + system_status[i]["status"].slice(1);
            name_id = ((name_id == "Off") ? "On" : "Off");
            document.getElementById(button_id).innerHTML = "Turn " + name_id;
            document.getElementById("status-"+i).innerHTML = ((name_id == "On") ? "Off" : "On");
            if(name_id == "Off"){
				$("#"+button_id).removeClass("systemoff")
				$("#"+button_id).addClass("systemon")
            }else{
				$("#"+button_id).removeClass("systemon")
			   	$("#"+button_id).addClass("systemoff")
	   		} 
            //todo
        }
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
    xhttp.send();

}
