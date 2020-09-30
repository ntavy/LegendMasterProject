$(".navbar-nav .nav-item").on("click", function(){
    // console.log("abc");
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
});

function changeQuantity(val, rootUrl){
    $.ajax({
        url:rootUrl,
        type:'post',
        data:{quantity: val},
        success:function(data){
            window.location.reload();
        }
    });
}