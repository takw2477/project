<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
    create date: 21/5/2556
    Author: Wuthisak.M
-->

<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("#PID #NAME");
    });
</script>
<style>


    .pos-txtmain{
        float: left;
        font-size: xx-large;
    }
</style>

<script type="text/javascript" >
    /*
     $(document).ready(function (){
     $('#headder').text("List Project")
     }); */
</script>

<div class="container">
    <div class="row" style="margin-left: 15px;">
        <span class="pos-txtmain">รายละเอียด Supplier</span>
    


        <button class="btn btn-info btn-sm " style="float: right;" data-toggle="modal" data-target="#new_supplier" >+Supplier </button>


        <div class="filter col-lg-8 col-md-8 col-sm-8"  >
            ประเภท: <select style="color:black;">  
                <option value="" >all</option>
                <option value="" >บริษัท</option>
                <option value="" >บุคคล</option>
            </select>
            status: <select style="color: black;"   >
                <option value="" >all</option>
                <option value="" >จ่ายแล้ว</option>
                <option value="" >ยังไม่จ่าย</option>
            </select>
            Form:<select style="color: black;"   >
                <option value="" >2015</option>
                <option value="" >2016</option>
                <option value="" >2017</option>
            </select>
            To:<select style="color: black;"   >
                <option value="" >2015</option>
                <option value="" >2016</option>
                <option value="" >2017</option>
            </select>



        </div>

   <div table-responsive>
    <table class="table table-bordered table-hover ">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>หมายเลข Supplier</th>
                    <th>ประเภท</th>
                    <th>บริษัท/ชื่อ</th>
                    <th>รายละเอียด</th>
                    <th>วันที่บันทึก</th>
                    <th>สถานะ</th>
                    <th>tool</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxx</td>
                    <td>
                        <a harf="#" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#add_bill" >+Bill.</a>
                        <a href="index.php?controllers=ReportController&views=project_gen_po" class="btn btn-sm btn-info "  >PO </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxx</td>
                    <td>
                        <a harf="" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#add_bill" >+Bill.</a>
                        <a href="index.php?controllers=ReportController&views=project_gen_po" class="btn btn-sm btn-info "  >PO </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxx</td>
                    <td>
                        <a harf="" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#add_bill" >+Bill.</a>
                        <a href="index.php?controllers=ReportController&views=project_gen_po" class="btn btn-sm btn-info "  >PO </a>
                    </td>
                </tr>
            </tbody>
        </table>
   </div>
    </div>

</div>
<?php include '../assets/components/controler/sitecontrol/project_add_bill.php'; ?>
<?php include '../assets/components/controler/sitecontrol/project_pop_supplier.php'; ?>
