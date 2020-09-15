$(".navbar-nav .nav-item").on("click", function(){
    console.log("abc");
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
});