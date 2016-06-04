<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("Manager User");
    });
</script>



<div class="container" >
    <div class="row" style="margin-left: 10px;">
        <div class="" style="text-align: right;" >
            <a onclick='return confirm("คุณต้องการเพิ่มUesr หรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=UserController&views=adduser" class="btn btn-info glyphicon glyphicon-plus" >New</a>

        </div>





        <div class="filter col-lg-8 col-md-8 col-sm-8" >
            ชือ: <input style="color: black;" type="search" >
            ตำแหน่ง: <select style="color: black;"  >
                <option value="" >ตำแหน่ง</option>
                <option value="" >admin</option>
                <option value="" >manager</option>
                <option value="" >user</option>
            </select>


        </div>



 <!-- test -->
        <div class="">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>ชือ</th>
                        <th>นามสกุล</th>
                        <th>ตำแหนง</th>
                        <th>User</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>เบอร์โทร</th>
                        <th>tool</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>admin</td>
                        <td>John</td>
                        <td>JohnDoe</td>
                        <td>john@example.com</td>
                        <td>098571236</td>
                        <td>
                            <a onclick='return confirm("คุณต้องการedit หรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=UserController&views=edituser" class="glyphicon glyphicon-pencil" ></a>
                            <a onclick='return confirm("คุณต้องการdelate หรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=UserController&views=deluser"  class="glyphicon glyphicon-remove" ></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>user</td>
                        <td>Mary</td>
                        <td>MaryMoe</td>
                        <td>mary@example.com</td>
                        <td>098571237</td>
                        <td><a href="http://localhost/engineerfast/web/index.php?controllers=UserController&views=edituser" class="glyphicon glyphicon-pencil" ></a>
                            <a onclick='return confirm("คุณต้องการdelate หรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=UserController&views=deluser"  class="glyphicon glyphicon-remove" ></a>

                        </td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>manager</td>
                        <td>July</td>
                        <td>JulyDooley</td>
                        <td>july@example.com</td>
                        <td>098571237</td>
                        <td><a href="http://localhost/engineerfast/web/index.php?controllers=UserController&views=edituser" class="glyphicon glyphicon-pencil" ></a>
                            <a onclick='return confirm("คุณต้องการdelate หรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=UserController&views=deluser"  class="glyphicon glyphicon-remove" ></a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>