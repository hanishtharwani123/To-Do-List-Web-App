<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

    <form action="connect.php" method="post">
        <h1 class="signUp">Sign Up</h1>
        <div class="container">
            <div class="contain">
                <label class="label_edit" for="username"><b>Username: </b></label>
                <input class="input" type="text" placeholder="Enter Username" name="username" required>
            </div>
            <div class="contain">
                <label class="label_edit" for="email"><b>Email: </b></label>
                <input class="input" type="text" placeholder="Enter Email" name="email" required>
            </div>
            <div class="contain">
                <label class="label_edit" for="password"><b>Password: </b></label>
                <input class="input" type="password" placeholder="Enter Password" name="password" required>
            </div>
            <div class="contain">
                <label class="label_edit" for="phoneNumber"><b>Phone Number: </b></label>
                <input class="input" type="number" placeholder="Phone Number" name="number" required>
            </div>
            <div class="check">
                <input class="check_input" type="checkbox" name="check" required>
                <label class="checking"  for="check">I agree to the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
            </div>
            <div class="btn">
                <button onclick="" type="submit" class="signUpBtn">Sign Up</button>
            </div>
    </form>
    
</body>
</html>