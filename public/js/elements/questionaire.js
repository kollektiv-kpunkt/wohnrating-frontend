$(document).on("submit", "#questionaire1", function(e){
    e.preventDefault()

    var hash = $("input[name='uuid'").val()
    answers = []

    $("input[type='radio']:checked").each((index)=>{
        answers.push($("input[type='radio']:checked")[index].value)
    })

    localStorage.setItem("questionaireHASH", hash)

    data = {
        hash: hash,
        answers: answers
    }

    $.ajax({
        url: "/interface/questionaire/1",
        method: "POST",
        data: data,
        success: ((response)=>{
            $('html, body').animate({
                scrollTop: $('#questionaire-container').offset().top
            });
            localStorage.setItem("questionaireID", response.ID)
            $(this).css("display", "none");
            $("#questionaire-container #step2").css("display", "unset");
        })
    })
})

$(document).ready(function() {
    $('.select-gemeinde').select2({
        placeholder: "Gemeinde auswählen"
    });
});

$(document).on("submit", "#questionaire2", function(e){
    e.preventDefault()

    var ID = localStorage.getItem("questionaireID")

    var formData = $(this).serialize()

    $.ajax({
        url: `/interface/questionaire/2/${ID}`,
        method: "POST",
        data: formData,
        success: ((response)=>{
            $(this).css("display", "none")
            $("#kandigrid-container").load(`/interface/questionaire/kandigrid/${response.ID}/gr/-score`)
        })
    })

})