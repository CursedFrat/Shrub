<?php
    include('access.php');
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query = mysqli_query($con, "Insert into clientdata (username, password, email) Values ('$username','$password','$email')");
        if($query) {
            echo "<script>alert(data inserted successfully)</script>"
        }  else {
             echo "<script>alert(insert error)</script>"
        }
    }
?>

<!DOCTYPE HTML>
<html>  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <title>Insert Data to DB using PHP</title?>
</head>

<body>
    <div style="margin: 5px auto">
        <form action="uploaddata.php">
            <input type="text" name="username" placeholder="Enter username"/>
            <br/> <br />
            <input type="email" name="password" placeholder="Enter password"/>
            <br/> <br />
            <input type="text" name="email" placeholder="Enter email"/>
            <br/> <br />
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>