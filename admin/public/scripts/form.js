$('#addProductForm').submit(function(e){
    e.preventDefault();
    // Get some values from elements on the page:
    var $form = $( this ),
    url = $form.attr( "action" );
    //var data = $form.serialize();

    var fd = new FormData($form[0]);
    var files = $('#proPhoto')[0].files[0];
    fd.append('proPhoto',files);

    console.log(url);
    console.log(fd);
    $.ajax({
        url:url,
        type:'post',
        data:fd,
        contentType: false,
        processData: false,
        success:function(data){
            //console.log(data);
            //whatever you wanna do after the form is successfully submitted
            //console.log("success");
            //reset form
            $('#proName').val("");
            $('#proDesc').val("");
            $('#proPurchasedPrice').val("");
            $('#proSalePrice').val("");
            $('#proQuantity').val("");
            $('#proPhoto').val("");


        }
    });
});
