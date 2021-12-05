$(document).on("click", "#secnav-inner .button.current", function(e){
    if (window.innerWidth > 680) {
        return;
    }
    e.preventDefault()
    $("#secnav-inner").toggleClass("open")
    $("#secnav-inner .button:not(.current)").each(function(i) {
       $(this).css("transform", `translate(-50%, calc(${i*100}% - ${i} * 4px))`); 
    })
})

window.addEventListener("DOMContentLoaded", function(){
    $(`#secnav-inner a.button[href="${window.location.pathname}"]`).addClass("current");
})