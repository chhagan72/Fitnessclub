<?php 
session_start();
include('./dbconnect.php');
?>
<?php



if(isset($_POST['register_btn']))
{
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password= mysqli_real_escape_string($con,$_POST['password']);


    //Check if email already registered
    $check_email_query = "SELECT email FROM register WHERE email='$email'";
    $check_email_query_run = mysqli_query($con,$check_email_query);

    if(mysqli_num_rows($check_email_query_run)>0)
    {
        $_SESSION['message'] = "Email already registered";
        header('Location:registration.php');
   
    }

    else
    {
        if($password == $cpassword)
    {
        // Insert user data
        $insert_query = "INSERT INTO register (name,email,password) VALUES ('$name','$email','$password')";
        $insert_query_run =mysqli_query($con, $insert_query);

        if( $insert_query_run )
        {
            $_SESSION['message']= "Registered Successfully";
            header('location:registration.php');
        }
        else{

            $_SESSION['message']= "Something went wrong";
            header('location: registration.php');

        }
    }

    else{
            $_SESSION['message'] = "passwords do not match";
            header('Location:registration.php');
    }

    }

}

else if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']); 
    $password = mysqli_real_escape_string($con,$_POST['password']); 

    $login_query ="SELECT * FROM register WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($con,$login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];
        
        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['role_as'] = $role_as;

        if($role_as ==1)
        {
            redirect("../admin_panel/index.php","Welcome To Dashboard");
        }
        else
        {
            redirect("Product.php","Logged In Successfuly");
        }

       
    }

    else{
        redirect("index.php","Invalid Credentials");
       }
    
   
}
?>