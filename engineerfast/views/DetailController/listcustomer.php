<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("List Customer");
    });
</script>

<div class="container" >
    <div class="row" style="margin: 10px;">

        <div class="" style="text-align: right;" >
            <a onclick='return confirm("คุณต้องการเพิ่มข้อมูลCustomerหรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=DetailController&views=newcustomer" class="btn btn-info glyphicon glyphicon-plus" >New</a>
        </div>




        <div class="filter col-lg-8 col-md-8 col-sm-8" >
            CustomerId: <input type="radio" name="tex" >
            Customer: <input type="radio" name="tex" >
            <input style="color: black;" type="search" >
        </div>


        <div table-responsive>
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>CustomerId</th>
                        <th>Customer</th>
                        <th>ชือคนติดต่อ</th>
                        <th>เบอร์โทร</th>
                        <th>Tool</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C0001</td>
                        <td>Lion</td>
                        <td>admin</td>
                        <td>John</td>
                        <td>098571236</td>
                        <td>
                            <a onclick='return confirm("คุณต้องการedit หรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=DetailController&views=editcustomer" class="glyphicon glyphicon-pencil" ></a>
                        </td>
                    </tr>

                </tbody>


            </table>
        </div>
    </div>
</div>