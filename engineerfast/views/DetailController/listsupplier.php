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
    <table class="table table-bordered table-hover ">
        <thead>
            <tr>
                <th>SupplierId</th>
                <th>Supplier</th>
                <th>ชือคนติดต่อ</th>
                <th>เบอร์โทร</th>
                <th>Tool</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S0001</td>
                <td>test</td>
                <td>admin</td>
                <td>John</td>
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