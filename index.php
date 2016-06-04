<html>
    <head >
        <script src="assets/jquery-1.12.3.js" ></script>
        <script src="assets/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
        <link href="assets/bootstrap-3.3.6-dist/css/bootstrap.css"  rel="stylesheet" >
        <?php
        session_start();


        //   unset($_SESSION['type'])    ;      
        ?>

        <?php
        isset($_POST['user']) ? $user = $_POST['user'] : $user = "";
        isset($_POST['pass']) ? $pass = $_POST['pass'] : $pass = "";

        if (($user == "admin") && ($pass == "1234")) {
            $_SESSION['type'] = 0;
        } else if (($user == "demo") && ($pass == "1234")) {
            $_SESSION['type'] = 1;
        }

        if (isset($_SESSION['type'])) {
            ?>
            <meta http-equiv="refresh" content="0; url=web/index.php?controllers=SiteController&views=project">
            <?php
        }
        ?>


    </head>



    <body style="background-color: #EEEE;margin: 0px;">

        <div class="row" style="background-color: #0D47A1;color: white;text-align: center;font-size: 3em;padding: 25px;" >
            Log in
        </div>
        <div class="container" >

            <div class="row" style="margin-top: 3%;" >
                <div class="col-lg-4 col-md-4 col-sm-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-4" style="text-align: left;">

                    <form method="POST" action="index.php">
                        <div class="row" >
                            <h3>    Username: </h3>
                        </div>
                        <div class="row"  >
                            <input style="width: 100%;" type="text" name="user" id="user" value="admin" >

                        </div>
                        <div class="row" >
                            <h3>Password:</h3>
                        </div>
                        <div class="row" >
                            <input style="width: 100%;" type="password" name="pass" id="user" value="1234" >
                        </div>
                        <div class="row"  style="text-align: left;" >


                            <div class="col-lg-6 col-md-6 col-sm-6"> 
                                <label  style="font: 1.5em;">
                                    <input type="checkbox" name="check" value="0" > remember
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                
                            </div>
                        </div>
                        <div class="row"  style="text-align: left;margin-top: 10px;margin-left: 10px;">

                            <input type="submit"  value="Log in" class="btn btn-info" >
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4"></div>
            </div>    

        </div>


    </body>
</html>