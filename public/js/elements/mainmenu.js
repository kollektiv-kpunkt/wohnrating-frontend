$(document).on("click", "#nav-menubutton", function(){
    $("#page-heroine").toggleClass("open")
    if ($("#page-heroine").hasClass("open")) {
        $("#main-menu-container").css("max-height", $("#main-menu-inner").outerHeight(true))
    } else {
        $("#main-menu-container").css("max-height", "0px")
    }
})

window.addEventListener("DOMContentLoaded", function(){
    $(`.menu-item[href$='${window.location.pathname}']`).parents().eq(0).addClass("current_item")
})