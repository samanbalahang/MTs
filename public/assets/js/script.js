$("path, circle").hover(function(e) {
  $("#info-box").css("display", "block");
  $("#info-box").html($(this).data("info"));
});
$("path, circle").on("click",function(e) {
    var url = $(this).data("url");
    console.log(url);
    window.location.href = url;
});

$("path, circle").mouseleave(function(e) {
  $("#info-box").css("display", "none");
});

$(document)
  .mousemove(function(e) {
    $("#info-box").css("top", e.pageY - $("#info-box").height() - 35);
    $("#info-box").css("left", e.pageX - $("#info-box").width() / 2);
  })
  .mouseover();

var ios = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
if (ios) {
  $("a").on("click touchend", function() {
    var link = $(this).attr("href");
    window.open(link, "_blank");
    return false;
  });
}
// var uses = document.querySelectorAll("s0");
// uses.forEach(function(use){

    // use.addEventListener("mouseover",function(e){
    //     $("#info-box").html($(this).data("info"));
    // });
    // use.addEventListener("click",function(e){
    //     console.log("a");
    //     var newurl = this.data("url");
    //     console.log(newurl);

    // });

// })

// var img2 = document.getElementById("Uimg3");
// img2.style.transform="translate(20rem)";
// console.log(img2);

