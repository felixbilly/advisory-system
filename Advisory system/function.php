<?php

function check_login($con)
{
    //to check wheather username is set
    if(isset($_SESSION['username']))
    {
        //is it regit by asking the database
        $reg_no = $_SESSION['username'];
        $query = "select * from Advisory_System where username = '$reg_no' limit 1";

        //read from the database
        $result = mysqli_query($con,$query);

        //check weather result is +ve
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }
    //if the above code does not work
    //so we redirect to login
    header("Location: login.php");
    die; 

}