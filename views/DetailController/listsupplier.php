<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("List Supplier");
    });
</script>
<div class="container" >

    <div class="row" style="margin-left: 10px;" >   
  
        <div style="text-align: right;" >
            <a onclick='return confirm("คุณต้องการเพิ่มข้อมูลSupplierหรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=DetailController&views=newsupplier" class="btn btn-info glyphicon glyphicon-plus" >New</a>
        </div>


        <div class="filter col-lg-8 col-md-8 col-sm-8" >
            SupplierId: <input type="radio" name="tex" >
            Supplier: <input type="radio" name="tex" >
            <input style="color: black;" type="search" >
        </div>
   <div table-responsive>
    <table class="table table-bordered table-hover " style="text-align: center;">
        <thead>
            <tr>
                <th style="text-align: center;">SupplierId</th>
                <th style="text-align: center;">Supplier</th>
                <th style="text-align: center;">ชือคนติดต่อ</th>
                <th style="text-align: center;">เบอร์โทร</th>
                <th style="text-align: center;">Tool</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S0001</td>
                <td>test</td>
                <td>admin</td>
         
                <td>098571236</td>
                <td>
                    <a onclick='return confirm("คุณต้องการedit หรือไม่");' href="http://localhost/engineerfast/web/index.php?controllers=DetailController&views=editsupplier" class="glyphicon glyphicon-pencil" ></a>
                </td>
            </tr>

        </tbody>


    </table>
   </div>
</div>

</div>