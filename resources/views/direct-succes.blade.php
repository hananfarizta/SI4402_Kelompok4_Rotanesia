<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- ICON BOOTSTRAP--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body style="background-color: #0FC069; overflow-y:hidden; overflow-x:hidden">

    <div class="loading" id="loading">
        <div class="row justify-content-center" style="max-width: 500px; max-height:600px;">
            <img src="image/success.gif" alt="" style="margin-left:1000px" id="myGif" onload="stopGif()">
        </div>
        <div class="text-wait justify-content-center">
            <p id="countdown" style="color: #fff; text-align:center">Your Order is succesfully sent, please wait you will directing to home in 5 seconds...</p>
        </div>
    </div>



<script>
    function redirect() {
        window.location.href = "/home";
    }

    function updateCountdown() {
        var countdown = document.getElementById("countdown");
        var seconds = parseInt(countdown.textContent.match(/\d+/)[0]);
        if (seconds > 0) {
        countdown.textContent = "Your Order is succesfully sent,\nplease wait you will directing to home in " + (seconds - 1) + " seconds...";
        setTimeout(updateCountdown, 1000); // 1000 milliseconds = 1 second
        } else {
        redirect();
        }
    }

    setTimeout(updateCountdown, 1000); // 1000 milliseconds = 1 second
</script>


<script>
    var animationId;

    function startGif() {
        var gif = document.getElementById("myGif");
        gif.src = "success.gif";
        animationId = window.requestAnimationFrame(startGif);
    }

    function stopGif() {
        window.cancelAnimationFrame(animationId);
    }
</script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>  