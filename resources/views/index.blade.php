<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $AppName }} </title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1> {{ $AppName }} </h1>
                <br>
                <p> Validate your forms with "{{ $AppName }}" and save your self the stress of validating emails and passwords </p>
                <br>
                <h3>How to use!</h3>
                <Label><b>Email verification</b></Label>
                <p>
                    Simply call the API for the email verification @ <b>{{ url('/api/verify_email') }}</b> and the only form method
                    supported is the <b>POST</b> method; the <b>BODY</b> accepts only one variable named <b>email</b>, any other variable
                    name won't work, you can use this API on your html form or on Mobile App backends. <br>
                </p>

                <br><br>
                <Label><b>Password verification</b></Label>
                <p>
                    Simply call the API for the password verification @ <b>{{ url('/api/verify_password') }}</b> and the only form method
                    supported is the <b>POST</b> method; the <b>BODY</b> accepts two variable, first is <b>password</b> and second is <b>password_repeat</b>, any other variable
                    name won't work, you can use this API on your html form or on Mobile App backends. <br>
                </p>

                <br><br>
                <span><b>Hope you enjoy using this API</b></span>
            </div>
        </div>
    </div>
    <hr>
</body>
<footer>
    <div class="container p-3">
        <center> &copy; <span id="year"></span> </center>
    </div>
</footer>

<script>
    var date = new Date();
    var currentYear = date.getUTCFullYear();

    const yearAttr = document.getElementById("year");
    yearAttr.innerHTML = currentYear;

    console.log(date);
</script>

</html>