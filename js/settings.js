$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return ((results==null) ? null : results[1] || 0 );
}
if($.urlParam("edit") != null){
	$("body").fadeOut(250);

}
