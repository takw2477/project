<div class="container" >

    <div class="filter col-lg-8 col-md-8 col-sm-8"  style="margin-bottom: 20px;">

        Month:<select style="color: #000;" >
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <option ><?php echo $i; ?></option>
            <?php } ?>
        </select>
        year: <select style="color: #000;" >
            <?php for ($i = 2014; $i <= 2017; $i++) { ?>
                <option ><?php echo $i; ?></option>
            <?php } ?>
        </select>
    </div>
    <div  class="row">

        <div table-responsive>
            <table class="table table-bordered table-hover ">

                <tr>
                    <td>ยอดคงเหลือ</td>
                    <td>13,000.50</td>
                </tr>

            </table>
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr >
                        <!-- ToDo head -->
                        <th  style="width: 5%;text-align: center;">Day/Month/Year</th>
                        <th  style="width: 5%;text-align: center;">Company</th>
                        <th style="width: 8%;text-align: center;">Description</th>
                        <th style="width: 7%;text-align: center;">Project</th>
                        <th style="text-align: center;">เบิก</th>    
                        <th style="text-align: center;">จ่าย</th>    
                        <th style="text-align: center;">คงเหลือ</th>  

                    </tr>
                </thead>
                <tbody style="text-align: center;">        
                    <!-- ToDo Body -->
                    <tr>
                        <td>3/7/2016</td>
                        <td>รับเงินจากOFFICE</td>
                        <td></td>
                        <td>P000</td>
                        <td style="color: green;">  16,000.00 </td>
                        <td>-</td>
                        <td>    16,842.50 </td>

                    </tr>
                    <tr>
                        <td>3/9/2016</td>
                        <td>การไฟฟ้า</td>
                        <td>ค่าไฟเดือน2/59</td>
                        <td>P000</td>
                        <td>-</td>
                        <td style="color: red;">  3,228.50 </td>
                        <td>  13,614.00 </td>

                    </tr>
                    <tr>
                        <td>3/9/2016</td>
                        <td>ทริปเปิลที</td>
                        <td>ค่าเน็ต2/59</td>
                        <td>P000</td>
                        <td>-</td>
                        <td style="color: red;">  613.50 </td>
                        <td>  13,000.50 </td>
                    </tr>
                    <tr>
                        <td colspan="7" style="text-align: right;">        
                            <button type="button"  class="glyphicon glyphicon-plus btn  btn-lg" data-toggle="modal" data-target="#myModal"></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>





</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">เงินสดย่อย</h4>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-hover ">

                    <tr>
                        <td>
                            Type:
                        </td>
                        <td>
                            <select  class="form-control" >
                                <option >เบิก</option>
                                <option >จ่าย</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Company:
                        </td>
                        <td>
                            <input type="text"   class="form-control" >

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Description:
                        </td>
                        <td>
                            <input type="text"   class="form-control" >

                        </td>
                    </tr>
                     <tr>
                        <td>
                            Project:
                        </td>
                        <td>
                            <input type="text"   class="form-control" >

                        </td>
                    </tr>
                        <tr>
                        <td>
                            ยอด:
                        </td>
                        <td>
                            <input type="text"   class="form-control" >

                        </td>
                    </tr>
                </table>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>