//const { POST } = require("jquery");
$(document).ready(function () {
    $(".num-order").change(function(){
        var id = $(this).attr('data-id');
        var qty = $(this).val();
        // alert(num_order);
        var data = {id: id, qty: qty};
        // console.log(data);
        $.ajax({
            url:'?mod=cart&act=process',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function(data){
                    $("#sub-total-"+id).text(data.sub_total);
                    $("#total-price span").text(data.total);
                    console.log(data);
            },
            // error: function (xhr, ajaxOptions, thrownError){
            //     console.error(xhr.status);
            //     console.error(thrownError);
            // }
        });
    });
});