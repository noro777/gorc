$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.login_buutton').click(function () {
    var data = {
        "_token": $('meta[name="csrf-token"]').attr('content'),
        'email' : $('.login_email').val(),
        'password' : $('.login_password').val(),
        'remember' : $('.checkbox_login').prop('checked')
    };

    console.log(data);

    // $.ajax({
    //     url : '/login',
    //     method:"post",
    //     data : data,
    //     success:function(result) {
    //         window.location.pathname = '/';
    //         console.log(msg);
    //     },
    //     error:function (e){
    //         console.log(e.responseText);
    //     }
    // });

    $.post('/login', data)

        .done( function(msg) {
            window.location.pathname = '/';
            console.log(msg);
        })

        .fail( function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseJSON);
        });
});


$('.register_button').click(function () {
    var data = {
        'email' : $('.register_email').val(),
        'phone' : $('.register_Phone').val(),
        'password' : $('.register_Password').val(),
        'password_confirmation' : $('.register_Password_Confimation').val(),
        'remember' : $('.register_checkbox').prop('checked')
    };

    console.log(data);

    $.post('/register', data)

        .done( function(msg) {
            window.location.pathname = '/';
            console.log(msg);
        })

        .fail( function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseJSON.errors);
        });
});


$('.Reset_button').click(function () {
    var data = {
        'email' : $('.Reset_email').val(),

        // 'phone' : $('.register_Phone').val(),
        // 'password' : $('.register_Password').val(),
        // 'password_confirmation' : $('.register_Password_Confimation').val(),
        // 'remember' : $('.register_checkbox').prop('checked')
    };

    console.log(data);

    $.post('/password/email', data)

        .done( function(msg) {
            // window.location.pathname = '/';
            console.log(msg);
        })

        .fail( function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseJSON.errors);
        });
});