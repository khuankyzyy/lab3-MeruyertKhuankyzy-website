$("#aboutme").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".abme").offset().top
    }, 1000);
});

$("#fav").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#far").offset().top
    }, 1000);
});

$("#hobbys").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#hh").offset().top
    }, 1000);
});


$(".see").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#at").offset().top
    }, 1000);
});

$("#ccc").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#cccc").offset().top
    }, 1000);
});

$("#si").click(function(){
  $(".hobby").show();
});

$("#do").click(function(){
  $(".hobby").hide();
});

