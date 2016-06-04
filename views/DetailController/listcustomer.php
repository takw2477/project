<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("List Customer");
    });
</script>

<div class="container" >
    <div class="row" style="margin: 10px;">

        <div class="" style="text-align: right;" >
            <a onclick='return confirm("คุณต้องการเพิ่มข้อมูลCustomerหรือไม่");' href="index.php?controllers=DetailController&views=newcustomer" class="btn btn-info glyphicon glyphicon-plus" >New</a>
        </div>




        <div class="filter col-lg-8 col-md-8 col-sm-8" >
            CustomerId: <input type="radio" name="tex" >
            Customer: <input type="radio" name="tex" >
            <input style="color: black;" type="search" >
        </div>


        <div table-responsive>
            <table class="table table-bordered table-hover " style="text-align: center;">
                <thead>
                    <tr style="text-align: center;">
                        <th style="text-align: center;">CustomerId</th>
                        <th style="text-align: center;">Customer</th>
                        <th style="text-align: center;">ชือคนติดต่อ</th>
                        <th style="text-align: center;"> เบอร์โทร</th>
                        <th style="text-align: center;">Tool</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C0001</td>
                        <td>Lion</td>
                        <td>admin</td>
              
                        <td>098571236</td>
                        <td>
                            <a onclick='return confirm("คุณต้องการedit หรือไม่");' href="index.php?controllers=DetailController&views=editcustomer" class="glyphicon glyphicon-pencil" ></a>
                        </td>
                    </tr>

                </tbody>


            </table>
        </div>
    </div>
</div>