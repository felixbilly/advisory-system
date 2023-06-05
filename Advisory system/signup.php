<?php
session_start();

    include("connection.php");
    include("function.php");

    //check weather has click the post button
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $name = $_POST['name'];
        $reg_no = $_POST['reg_no'];
        $school = $_POST['school'];
        $email + $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        if(!empty($name) &&!empty($reg_no)
        && !empty($school) && !empty($email) && !empty($phone)
         && !empty($password))
         {
            $query = "insert into Advisory_system 
            (Student_name,username,Student_email,Student_phone,password,School_id)
             values('$name', '$reg_no','$school','$email','$phone','$password')";

             mysqli_query($con, $query);

             header("Location: login.php");
             die;

         }else
         {
            echo "please fill all the spaces"
         }


    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<div class="box">
        <form action="">
            <label for="name">Name</label>
            <input type="text" for="name" name="name" placeholder="Full name" id="name" required>

            <label for="registration number">registration number</label>
            <input type="text" for="registration number" name = "reg_no" placeholder="registration number" id="regNo" required>
            

            <label for="school">school</label>
            <select name="school" id="school">
                <option value="1">SAFS</option>
                <option value="2">SBE</option>
                <option value="3">SCI</option>
                <option value="4">SED</option>
                <option value="5">SEA</option>
                <option value="6">SHS</option>
                <option value="7">SPAS</option>
                <option value="8">SON</option>
            </select>


            <label for="email">Email</label>
            <input type="text" for="email" name="email" placeholder="email" id="email" required>

            <label for="phone">Phone</label>
            <input type="tel" for="Phone" name="phone" placeholder="Phone Number" id="phone" required>

            <label for="password">Password</label>
            <input type="password" for="password" name ="password" placeholder="password" id="password" required>
            

            <input type="submit" value="Register">
        </form>

    </div>
    
</body>
</html>