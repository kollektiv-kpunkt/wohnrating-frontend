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