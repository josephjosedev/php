<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
   <form action="index.php" method="post">
    <input type="text" name="fname" id="fname" placeholder="enter first name">
    <br>
    <br>
    <input type="text" name="lname" id="lname"placeholder="enter last name">
    <br>
    <br>
    <input type="button" value="submit">
</form>
<a href="<?php  echo $SERVER['PHP_SELF']?>?podaappti">click here</a>

</body>
</html>