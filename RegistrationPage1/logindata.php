<?php 
    session_start();

        include("connection.php");


        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //something was posted
            $user_email = $_POST['email'];
            $password = $_POST['password'];

            if(!empty($user_email) && !empty($password) && !is_numeric($user_email))
            {
                     
                //read from database
                $query = "select * from userinfo1 where email = '$user_email' limit 1";
                $result = mysqli_query($conn, $query);

                
                if($result)
                {
    
                    if($result && mysqli_num_rows($result) > 0)
                    {
                       
                        $user_data = mysqli_fetch_assoc($result);
                        
                          
                           if($user_data['password'] === $password)
                              {
                                  
                                    $_SESSION['user_id'] = $user_data['user_id'];
                                    header("Location: index.html");
                                    die;
                                }
                    }
                }
                else{
                            
                            echo "<script>alert('wrong username or password!')";
                        }
            }
                        else
                        {
                            echo "<script>alert('please enter the valid username and password')";
                        }
        }    
?>
