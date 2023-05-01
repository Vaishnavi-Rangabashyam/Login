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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--CSS-->
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    <style>
      table, th, td {
         border: 1px ridge white;
         }
         table.center {
          margin-left: auto; 
          margin-right: auto;
         }

         th,td{
          background-color:  #96D4D4;
          padding-top: 2px;
          padding-bottom: 2px;
          padding-left: 30px;
          padding-right: 40px;
         }

        
    </style>
  <title>Home</title>
</head>
<body>
<section class="container forms">
        <div class="form home">
            <div class="form-content">
                <h3 style="text-align:center;padding:30px">Check Your Profile <?php echo $user["firstname"].$user["lastname"]; ?></h3>
                        
                    <form autocomplete="off" action="" method="post">
                               <input type="hidden" id="action" value="home">
                               <style>

                               </style>
                               <table  class="center" style="width:600px; line-height:40px;">
                                    <thead>
                                           <tr>
                                              <th>UserName:</th>
                                              <td><?php echo $user["username"]; ?></td>
                                           </tr>

                                           <tr>
                                              <th>Email:</th>
                                              <td><?php echo $user["email"]; ?></td>
                                           </tr>

                                           <tr>
                                              <th>FirstName:</th>
                                              <td><?php echo $user["firstname"]; ?></td>
                                           </tr>

                                           <tr>
                                              <th>LastName:</th>
                                              <td><?php echo $user["lastname"]; ?></td>
                                           </tr>

                                           <tr>
                                              <th>DOB:</th>
                                              <td><?php echo $user["birthday"]; ?></td>
                                           </tr>

                                           <tr>
                                              <th>Mobile:</th>
                                              <td><?php echo $user["phone"]; ?></td>
                                           </tr>

                                           <tr>
                                              <th>Country:</th>
                                              <td><?php echo $user["country"]; ?></td>
                                           </tr>

                                           <tr>
                                              <th>State:</th>
                                              <td><?php echo $user["state"]; ?></td>
                                           </tr>

                                           <tr>
                                              <th>Gender:</th>
                                              <td><?php echo $user["gender"]; ?></td>
                                           </tr>


                                     </thead>

                                     
                    </form>
                    <div style="text-align:center;padding:10px">
                        <a href="logout.php" style=>Logout</a>
                    </div>

                    
            </div>

          </div>
      </section> 

  </body>
</html>

