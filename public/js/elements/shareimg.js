$("#test").css("display", "flex")
html2canvas(document.querySelector("#test")).then(canvas => {
    var img = canvas.toDataURL("image/png");

    
    var a = document.createElement('a');
    a.href = img;
    a.download = "output.png";
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);

    $("#test").css("display", "none")
})
