<?php
 session_start();
echo "You are logged Out!";
 session_abort();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logoutcss.css">
    <title>Logout Successful</title>
</head>
<body>
    <div class="logout">
      <h2>Logout Successfuly</h2>
      <p>Thanks For Visiting.</p>
      <a href="login.html">Login Again?</a>
    </div>
    
</body>
</html>