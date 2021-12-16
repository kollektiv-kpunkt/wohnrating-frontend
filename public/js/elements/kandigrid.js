$(document).on("click", ".kandi-teaser", function(){
    var kandigrid = $("#kandigrid")
    var kandi = $(this).parents().eq(0)
    var infocontainer = kandi.find(".kandi-moreinfo-container")
    var info = kandi.find(".kandi-moreinfo-inner")
    var placeholder = kandi.find(".kandi-moreinfo-placeholder")

    if (kandi.hasClass("open")) {
        kandigrid.removeClass("kandiopen")
        kandi.removeClass("open")
        infocontainer.css("max-height", 0)
        placeholder.css("padding-bottom", 0)
        return    
    }
    kandigrid.addClass("kandiopen")

    $(".kandi.open .kandi-moreinfo-container").css("max-height", 0)
    $(".kandi.open .kandi-moreinfo-placeholder").css("padding-bottom", 0)
    $(".kandi.open").removeClass("open")

    kandi.addClass("open")
    infocontainer.css("max-height", info.outerHeight(true))
    placeholder.css("padding-bottom", info.outerHeight(true) + 20)
    setTimeout(() => {
        $('html, body').animate({
            scrollTop: kandi.offset().top - 10
        });
    }, 500);
})

$(document).on("click", ".kandi-info-close", function(){
    var kandigrid = $("#kandigrid")
    var kandi = $(this).parents().eq(3)
    var infocontainer = kandi.find(".kandi-moreinfo-container")
    var info = kandi.find(".kandi-moreinfo-inner")
    var placeholder = kandi.find(".kandi-moreinfo-placeholder")

    kandigrid.removeClass("kandiopen")
    kandi.removeClass("open")
    infocontainer.css("max-height", 0)
    placeholder.css("padding-bottom", 0)
})


$(document).on("click", ".kandigrid-filter", function(){
    if ($(this).hasClass("sorting-filter")) {
        if ($(this).hasClass("active")) {
            switch($(this).attr("data-direction")){
                case "up":
                    $(this).attr("data-direction", "down")
                    $(this).attr("data-sort-key", "-" + $(this).attr("data-sort-key"))
                    break;
                case "down":
                    $(this).attr("data-direction", "up")
                    $(this).attr("data-sort-key", $(this).attr("data-sort-key").slice(1))
                    break;

            }
        } else {
            $(".sorting-filter.active").removeClass("active")
            $(this).addClass("active");
        }
    } else {
        if ($(this).hasClass("active")) {
            return
        }

        $(".organ-filter.active").removeClass("active")
        $(this).addClass("active")
    }

    var organ = $(".organ-filter.active").attr("ID")
    var sort = $(".sorting-filter.active").attr("data-sort-key")
    var gemeinde = $("select.select-gemeinde").find(":selected").val()

    var url = `/interface/kandigrid/${gemeinde}/${organ}/${sort} #kandigrid`
    $("#ajax-container").load(url);
})


$(document).on("click", ".kandi-info-details.shareable", function(){
    window.open("https://imggen.victorinus.ch/pn44/testimonial?url=https://wohnrating.ch/shareimg?uuid=" + $(this).parents().eq(2).attr("ID"));
})