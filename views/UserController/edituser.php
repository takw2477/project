<script type="text/javascript" >
$(document).ready(function (){
    $('#headder').text("Edit User");
});
</script>

<div class="container" >
    <div style="text-align: center;" class="row" >
        
        <h2>Edit User</h2>
    </div>
    <div class="row" style="margin-top: 2%;" >
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
        <div class="col-lg-4 col-md-4 col-sm-4" style="text-align: left;">

            <form method="POST" action="index.php?controllers=UserController&views=listuser">
                <div class="row" >
                    <h3>ชือ:</h3>
                </div>
                <div class="row" >
                    <input style="width: 100%;"  value="xxxxxx" type="text" name="pass" id="user" >
                </div>
                <div class="row" >
                    <h3>นามสกุล:</h3>
                </div>
                <div class="row" >
                    <input style="width: 100%;" value="xxxxxx" type="text" name="pass" id="user" >
                </div>
                <div class="row" >
                    <h3>ตำแหน่ง:</h3>
                </div>
                <div class="row" style="margin-top: 10px;" >
                    <select  class="form-control">
                        <option value="" >ตำแหน่ง</option>
                        <option value="" selected='selected' >admin</option>
                        <option value="" >manager</option>
                        <option value="" >user</option>
                    </select>
                </div>

                <div class="row" >
                    <h3>    Username: </h3>
                </div>
                <div class="row"  >
                    <input style="width: 100%;" value="test" type="text" name="user" id="user" >

                </div>
                <div class="row" >
                    <h3>Password:</h3>
                </div>
                <div class="row" >
                    <input style="width: 100%;" type="text" value="0896548523" name="pass" id="user" >
                </div>
                 <div class="row" >
                    <h3>E-mail:</h3>
                </div>
                <div class="row" >
                    <input style="width: 100%;"  value="text@gmail.com" type="text" name="pass" id="user" >
                </div>
                <div class="row" >
                    <h3>เบอร์โทร:</h3>
                </div>
                <div class="row" >
                    <input style="width: 100%;" type="text" value="089-6548523" name="pass" id="user" >
                </div>

                <div class="row"style="margin-top: 10px;" >
                    <input class="btn btn-info" style="width: 100%;" type="submit" value="แก้ไข้" name="pass" id="user" >
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
    </div>    

</div>