system_status = "";
system_id = "";


$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return ((results==null) ? null : results[1] || 0 );
}
$(document).ready(function () {
    loadSystemStatus();
	$("button").click(function(){
        if($(this).val() == "edit")
    		getData($(this).attr("id"));
	});
    
    
    
    
    
    
    
    



});
function loadSystemStatus(){
	$.get('../lib/api.php?systems', function (data, textStatus, jqXHR) {
		system_status = JSON.parse(data);
    });
}
function updateOnSubmit(){
    for(i = 0; i < system_status.length; i++ ){
        $("#runtime-"+(i+1)).html(system_status[i]["runtime"]);
    }
}

function getData(id){
	system_id=id;
	$("#table").fadeOut(500);
    $("#edit").load("edit.html");
    setTimeout(function(){
	$("#zone-name").val(system_status[id]["zonename"]);
	$("#zone-gpio").val(system_status[id]["gpio"]);
    $("#zone-runtime").val(system_status[id]["runtime"]);
    },250);
    $("#edit").delay(250).fadeIn(500);
}
function submitChanges(id,zonename,oldname,gpio,runtime){
    $.post("../lib/api.php", { call:"update", zone: id, name: zonename, oldname: oldname, gpio: gpio, runtime: runtime}).done(function(data){
        if(data == "")
           data="Success."
        else
           alert("Check the logs! An error has occured.");
        console.log("Received data: " + data);
        loadSystemStatus();
        setTimeout(function(){
            updateOnSubmit();
        },500);
        $("#edit").fadeOut(500);
        $("#table").fadeIn(500);      
    });
}
