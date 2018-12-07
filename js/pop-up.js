window.onload=function(){
//  console.log ("pop-up.js");
var schermpje= document.getElementById("pop-up-winkelwagen");
// console.log(schermpje.style.display);
var knopje=  document.getElementById("winkelwagen-button");
knopje.onclick=function(){
    if (schermpje.style.display=="none"){
        schermpje.style.display="flex";
    }
    else {
        schermpje.style.display="none";
    }

}
}



