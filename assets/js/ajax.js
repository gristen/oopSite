$(document).ready(function ()
{
    $('#register').on('click',function (event)
    {
        event.preventDefault();
        var fd = new FormData(document.getElementById("FormReg"));

        var email = $('#email').val();
        fd.append("test",true);
        fd.append('email',email);

        $.ajax
        ({
            method: "POST",
            processData: false,
            contentType: false,
            url: "../../app/controllers/Auth.php",
            data: fd,

        })
            .done(function( msg )
            {
                var message_arr = jQuery.parseJSON(msg);

                if (message_arr.key == "error")
                {
                    var html =  ' <div class="alert alert-danger" role="alert">' + message_arr.value + '</div>';
                    $('.msg').html(html);
                    
                }

            });

    })

})

