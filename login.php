<?php include 'includes/header.php'; ?>
<?php

    if(isset($_POST['submit']))
    {
     $username = $password ="";
    $username = $_POST['username'];
    $password = $_POST['password'];

        if(empty($username) && empty($password))
        {
            header('Location:dashboard.php');
        }
    }
?>
        <div class="container">
            <div class="card go-social z-depth-3">
                  <div class="card-header f-20" style="background-color:#0D47A1">
                     <div class="list-group">
                        <div class="list-group-item media">
                            <div class="pull-left">
                                <img class="img small animated rollIn" src="img/UC.png" alt="UC logo">
                            </div>
                            <div class="media-body" style="margin-top:4%" >
                                <h1 class="c-white animated fadeIn">University of Cebu</h1>
                                <small class="c-gray">Online Electronic Grading System (EGrade)</small>
                            </div>
                         </div>
                    </div>
                </div>  
                           <div class="card-body clearfix z-depth-3">
                                <div class="text-center" style="margin-top:-70px;">
            <!-- Login -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="lc-block toggled" id="l-login">
                <div class=" bgm-bluegray ">
                    <i class="zmdi zmdi-lock text-center c-white m-20" style="font-size:6em;"></i></div>
                <div class="lcb-form z-depth-2">    
                        <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                            <div class="fg-line">
                            <label class="control-label c-red" for="username"></label>
                            <input type="text" class="form-control f-16" id="usernamess"placeholder="Username" required data-errormessage-value-missing="Something's missing" data-errormessage-type-mismatch="Invalid!">  
                            </div>
                         </div>
                                  
                   

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-key"></i></span>
                        <div class="fg-line">
                            <label class="control-label c-red" for="inputError2"></label>
                            <input type="password" class="form-control f-16" placeholder="Password" required>
                        </div>
                    </div>
     
                   
                    <div class="m-b-20 ">
                    <button  class=" btn  btn-lg btn-primary" name="submit" type="submit"><i class="zmdi zmdi-arrow-forward"></i> Login</button>
                    </div>
                     <div class="m-b-20">
                        <label class="pull-right">
                            <a href="#">Forgot password?</a>
                        </label>
                    </div>
                </div>
                </div>
            </div>

            <!-- Forgot Password -->
       
        </div>
<?php include 'includes/footer.php'; ?>
