$(document).ready(function () {

    $("#btn").click(function (event) {

        event.preventDefault();
        let us = $("#us").val();
        let pswd = $("#pswd").val();

        if (us == "w@gmail.com" && pswd == "123") {
            sahe();

        } else {

            bd();

        }


    });

});

function sahe() {

    Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success')
}


function bd() {

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href>Why do I have this issue?</a>'
    })


}



