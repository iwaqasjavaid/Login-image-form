<html>
<head>
    <title> My Login Form </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>
<div class="login-box">
    <img src="avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form method="get" action="img.php">
        <p>Email Address</p>
        <input type="email" id="us" placeholder="Enter Email" required>
        <p>Password</p>
        <input type="password" id="pswd" placeholder="Enter Password" required>
        <input type="submit" value="Login" id="btn">
        <a href="#">Forget Password</a>
    </form>

</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
<script>

    $(document).ready(function () {

//alert("hello");

        $("#btn").click(function (event) {

            event.preventDefault();

//alert("hiii");


            var us = $("#us").val();
            var pswd = $("#pswd").val();

// alert(us);
// alert(pswd);

            if (us == "w@gmail.com" && pswd == "123") {

//alert("hiiiithereee");
                sahe();

            } else {

                bd();
//alert("bad");

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


</script>


</html>