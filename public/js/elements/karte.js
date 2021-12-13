$(document).ready(function() {
    $('.select-gemeinde').select2({
        placeholder: "Gemeinde auswählen"
    });
});

$(document).on('select2:open', () => {
    document.querySelector('.select2-search__field').focus();
});

$(document).on("change", "select.select-gemeinde", function(e){
    let selectedGemeinde = $(this).find(":selected").val()
    $(`.gemeinde.selected`).removeClass("selected")
    $(`polyline[data-bfs="${selectedGemeinde}"]`).addClass("selected")
    $.ajax({
        url: `/interface/kandigrid/${selectedGemeinde}/gr/-score`,
        method: "GET",
        success: (response) => {
            $("#kandigrid-container").html(response)
            $('html, body').animate({
                scrollTop: $("#kandigrid-container").offset().top - 10
            });
            window.history.pushState(0,0,`/rating?gemeinde=${selectedGemeinde}`);
        }
    })
})

$(document).on("click", ".gemeinde", function(){
    $('.select-gemeinde').val($(this).attr("data-bfs"));
    $('.select-gemeinde').trigger('change');
})

if (window.location.search) {
    $(`.gemeinde[data-bfs="${window.location.search.split("=")[1]}"`).click()
}

$(document).on("mouseover", ".gemeinde", function(){
    $("span#tooltip").css("position", "absolute")
    $("span#tooltip").css("display", "flex")
    $("span#tooltip").css("top", `${$(this).offset().top - 27}px`)
    $("span#tooltip").css("left", `${$(this).offset().left - 27}px`)
    var bfs = $(this).attr("data-bfs")

    switch(bfs) {
        case "53":
          var name = "Bülach";
        break;
        case "62":
          var name = "Kloten";
        break;
        case "66":
          var name = "Opfikon";
        break;
        case "121":
          var name = "Wetzikon (ZH)";
        break;
        case "131":
          var name = "Adliswil";
        break;
        case "191":
          var name = "Dübendorf";
        break;
        case "198":
          var name = "Uster";
        break;
        case "230":
          var name = "Winterthur";
        break;
        case "243":
          var name = "Dietikon";
        break;
        case "247":
          var name = "Schlieren";
        break;
        case "247":
          var name = "Schlieren";
        break;
        case "2610001u2":
          var name = "Zürich K1&2";
        break;
        case "2610003":
          var name = "Zürich K3";
        break;
        case "2610004u5":
          var name = "Zürich K4&5";
        break;
        case "2610006":
          var name = "Zürich K6";
        break;
        case "2610007u8":
          var name = "Zürich K7&8";
        break;
        case "2610009":
          var name = "Zürich K9";
        break;
        case "26100010":
          var name = "Zürich K10";
        break;
        case "26100011":
          var name = "Zürich K11";
        break;
        case "26100012":
          var name = "Zürich K12";
        break;
        case "293":
          var name = "Wädenswil";
        break;
        case "296":
          var name = "Illnau-Effretikon";
        break;
        
    }
    $("span#tooltip").html(name)
})