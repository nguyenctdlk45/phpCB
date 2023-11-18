//const { POST } = require("jquery");
$(document).ready(function () {
    $("#num_order").change(function(){
        var num_order = $("#num_order").val();
        var price = $("#price").text();
        // alert(num_order);
        var data = {num_order: num_order, price: price};
        // console.log(data);
        $.ajax({
            url:'process.php',
            method: 'POST',
            data: data,
            dataType: 'text',
            success: function(data){
                    $("#total").html("<strong>"+data+"</strong>");
            },
        });
    });
});