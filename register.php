<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Signup Form </title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
                
       
                        
    </head>
    <body>
        <section class="container forms">
            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>SignUp</header>
                    <form autocomplete="off" action="" method="post">
                       <input type="hidden" id="action" value="register">

                        <div class="field input-field">
                            <input type="text" placeholder="UserName" id="username" value=""> <br>
                        </div>

                        <div class="field input-field">
                            <input type="text" placeholder="Email" id="email" value=""> <br>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" id="password" value="" > <br>
                            <i class="fa-solid fa-eye" id="eye"></i>
                        </div>

                      

                        <!-- <div class="field input-field">
                            <input type="password" placeholder="Confirm Password" id="confirmPassword" value=""> <br>
                        </div> -->

                        

                        <div class ="field input-field">
                            <a href="register_submit.php">
                              <button type="button"  id="button" onclick="submitData();">Signup</button>
                            </a>
                        </div>




                    </form>

                   

                    <div class="form-link">
                        <span>Already have an account?
                            <a href="login.php">Login</a>
                        </span>
                    </div>


                    <!-- <div class="line"></div>

                    <div class="media-options">
                       <a href="#" class="field facebook">
                          <img src="images/facebook.svg" alt="" class="facebook-img">
                          <span>Login with Facebook</span>
                       </a>
                    </div>

                    <div class="media-options">
                     <a href="#" class="field google">
                        <img src="images/google.svg" alt="" class="google-img">
                        <span>Login with Google</span>
                     </a>
                    </div> -->
                </div>
            </div>
        </section>
        <br>

        
        



        <?php require 'loginregister_script.php'; ?>

    </body>
</html>
 
