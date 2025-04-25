<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Form</title>
<link rel="stylesheet" href="./main.css" type="text/css">
</head>
<body>
<form id="contactForm" action="detail.php" method="POST">
<div class="container">
    <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" >
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
    </div>
    <div class="form-group">
        <label for="mobileNumber">Mobile Number:</label>
        <input type="text" id="mobileNumber" name="mobileNumber" >
    </div>
    <button type="submit" >Submit</button>
</form>
</div>
<script src="main.js"></script>
</body>
</html>