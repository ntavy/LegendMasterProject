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


$(document).ready(function(){
    // $('.myaccount form input').on('keypress', enableButton('signUp'));
    $('.myaccount form input').on('keypress', function () {
        // debugger;
        $('#signUpBtn').removeAttr('disabled');
        // $('#signUpBtn').addClass('btn btn-legend');
    });
});

//ajax save profile
$('#frmProfile').submit(function(e){
    e.preventDefault();
    // Get some values from elements on the page:
    var $form = $( this ),
        url = $form.attr( "action" );
    //var data = $form.serialize();

    var fd = new FormData($form[0]);

    $.ajax({
        url:url,
        type:'post',
        data:fd,
        contentType: false,
        processData: false,
        success:function(data){
            console.log(data);
            $('#firstname').val("");
            $('#lastname').val("");
            $('#email').val("");
            $('#username').val("");
        }
    });
});