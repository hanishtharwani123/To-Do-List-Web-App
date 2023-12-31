<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="main.css">
    <script defer></script>
</head>

<body>
    <div class="container">
        <h1>Create your own <span class="auto-typed"></span></span></h1>
        <div class="box">
            <a href="signup.php"><button style="--content: 'Click Here';">
                    <div class="left"></div>
                    Click Here!
                    <div class="right"></div>
                </button></a>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        var typed = new Typed(".auto-typed", {
            strings: ["To Do List"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true
        })
    </script>
</body>

</html>