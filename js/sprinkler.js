$( document ).ready(function() {
 setInterval(function(){

    $("#data").load("lib/check.php");
 }, 1000);


});
function toggleSystem(system){
document.getElementById("f-btn"+system).click();
}
var recognition = new webkitSpeechRecognition();
recognition.lang = "en-US";
recognition.onresult = function (e) {

          var r = e.results[0][0].transcript;
          if(r==="toggle system one" ){
          toggleSystem(1);
        }else if(r==="toggle system two"){
          toggleSystem(2);
        }else if(r==="toggle system three"){
          toggleSystem(3);
        }else if(r==="toggle system four"){
          toggleSystem(4);
        }else if(r==="toggle system five"){
          toggleSystem(5);
        }else if(r==="toggle system six"){
          toggleSystem(6);
        }else if(r==="toggle system seven"){
          toggleSystem(7);
        }else if(r==="toggle system eight"){
          toggleSystem(8);
        }else if(r==="toggle system nine"){
          toggleSystem(9);
        }else if(r==="toggle system ten"){
          toggleSystem(10);
        }else if(r==="toggle system 1"){
          toggleSystem(1);
        }else if(r==="toggle system 2"){
          toggleSystem(2);
        }else if(r==="toggle system 3"){
          toggleSystem(3);
        }else if(r==="toggle system 4"){
          toggleSystem(4);
        }else if(r==="toggle system 5"){
          toggleSystem(5);
        }else if(r==="toggle system 6"){
          toggleSystem(6);
        }else if(r==="toggle system 7"){
          toggleSystem(7);
        }else if(r==="toggle system 8"){
          toggleSystem(8);
        }else if(r==="toggle system 9"){
          toggleSystem(9);
        }else if(r==="toggle system 10"){
          toggleSystem(10);
        }
          alert(r);
     }
     function starts(){
        recognition.start();
     }
