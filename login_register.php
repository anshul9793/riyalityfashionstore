<?php
include('connection.php');
session_start();

//for login
if(isset($_POST['submit'])){
$query="SELECT * FROM `signup`WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
$result=mysqli_query($conn,$query);
if($result){
if(mysqli_num_rows($result)==1){
$result_fetch=mysqli_fetch_assoc($result);
if(password_verify($_POST['password'],$result_fetch['password'])){
    //if password matched 
   $_SESSION['logged_in']=true;
   $_SESSION['username']=$result_fetch['username'];
   header("location:index.php");
}
else{
    //if incorrect password
    echo "<script> alert('incorrect password');
    window.location.href='login.php';
    </script>";
}
}
else{
    echo "<script> alert('Email or Usrname not registered');
    window.location.href='login.php';
    </script>";
}
}
else{
    echo "<script> alert('cannot run query');
    window.location.href='login.php';
    </script>";
}
}



// For Registration
if (isset($_POST['submit'])) {
    $user_exist_query = "SELECT * FROM `signup` WHERE `username`='$_POST[username]'  OR  `email`='$_POST[email]'";
    $result = mysqli_query($conn, $user_exist_query);
    if ($result) {
        if (mysqli_num_rows($result) > 0)
        //it will execute if username or email is already taken
        {
            //if any user has already taken username or email
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                //error for username already registered
                echo "<script> alert('$result_fetch[username] - username already taken');
    window.location.href='login.php';
    </script>";
            } else {
                //error for email already registered
                echo "<script> alert('$result_fetch[email] - E-mail  already registered');
    window.location.href='login.php';
    </script>";

            }
        } else //it will be executed if no one has taken username or email before
        {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `signup`(`name`, `username`, `email`, `password`) VALUES ('$_POST[name]','$_POST[username]','$_POST[email]','$password')";
            if (mysqli_query($conn, $query)) {
                //if data inserted sucessfully
                echo "<script> alert('registration sucessfull');
   window.location.href='login.php';
</script>";
            } else {
                //if data cannot inserted
                echo "<script> alert('cannot rum query');
    window.location.href='login.php';
    </script>";
            }
        }
    } else {
        echo "<script> alert('cannot rum query');
     window.location.href='login.php';
     </script>";
    }
}
?>