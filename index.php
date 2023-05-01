<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbuser WHERE id = $id"));
}
else{
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">

    <title>Index</title>
  </head>
  <body>

  <section class="container forms">
        <div class="form index">
            <div class="form-content">
                <header style="text-align:center;">Update Your Profile <?php echo $user["username"]; ?></header>
                       
                    <form autocomplete="off" action="" method="post" id="subForm">
                               <input type="hidden" id="action" value="index">
                               
                              <div class="field input-field">
                                <input type="name" id="username" placeholder="" value= <?php echo $user["username"]; ?> readonly>
                              </div>

                              <div class="field input-field">
                                <input type="name" id="firstname" placeholder="FirstName" value="">
                              </div>

                              <div class="field input-field">
                                <input type="name" id="lastname" placeholder="LastName" value="">
                              </div>

                              <div class="field input-field">
                                <input type="date" id="birthday" placeholder="Birthday" value="">
                              </div>

                              <div class="field input-field">
                                <input type="phone" id="phone" placeholder="Contact No" value="" >
                              </div>

                              <div class="field input-field">
                                <input type="country" id="country" placeholder="Country" value="" >
                              </div>

                              <div class="field input-field">
                                <input type="state" id="state" placeholder="State" value="" >
                              </div>

                              <div class="field input-field">
                                    <select id="gender" style="padding: 0 15px;border: 1px solid #CACACA;position: relative;
                                     height: 50px;width: 100%;border-radius: 6px;" >
                                      <option value="">Please Select Your Gender</option>
                                      <option value ="male">Male</option>
                                      <option value ="female">Female</option>
                                      <option value="other">Other</option>
                                    </select> 
                              </div>

                              
                              <div class ="field input-field">
                                      <button type="button"  id="button" value="submit" onclick="submitData();">Submit</button>
                              </div>
                              
                              <div style="text-align:center;padding:10px;">
                                   <a href="logout.php" style=>Logout</a>
                               </div>


                    </form>
            </div>

          </div>
      </section> 

      <?php require 'index_script.php'; ?>

  </body>
</html>
