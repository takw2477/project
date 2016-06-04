<script type="text/javascript" >
$(document).ready(function (){
    $('#headder').text("Change Passsword");
});
</script>  
<div class="container" >

            <div class="row" style="margin-top: 3%;" >
                <div class="col-lg-4 col-md-4 col-sm-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-4" style="text-align: left;">

                    <form method="POST" action="index.php">
                        <div class="row" >
                            <h3>    OlePassword: </h3>
                        </div>
                        <div class="row"  >
                            <input style="width: 100%;" type="text" name="user" id="user"  >

                        </div>
                        <div class="row" >
                            <h3>NewPassword:</h3>
                        </div>
                        <div class="row" >
                            <input style="width: 100%;" type="password" name="pass" id="user" >
                        </div>
                     
                        <div class="row"  style="text-align: left;margin-top: 10px;margin-left: 10px;">

                            <input type="submit"  value="เปลียนพาส" class="btn btn-info" >
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4"></div>
            </div>    

        </div>