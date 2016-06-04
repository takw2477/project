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
        $('#headder').text("P201605001 บ.ไลอ้อน");
        $('#hpj').text("รายละเอียด รายรับของโปรเจค");
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
    <div class="row" style="margin-left: 15px; ">
        <span class="pos-txtmain"></span>
        <button class="btn btn-info btn-sm " style="float: right;" data-toggle="modal" data-target="#add_income" >+รายรับ </button>
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
                    <th>รหัสลูกค้า</th>
                    <th>จำนวนเงิน</th>
                    <th>สถานะ</th>
                    <th>วันกำหนดจ่าย</th>
                    <th>วันทีรับเงิน</th>
                    <th>tool</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>C0001</td>
                    <td>20000</td>
                    <td>จ่ายแล้ว</td>
                    <td>31-05-2016</td>
                    <td>31-05-2016</td>
                    <td>
                        <a href="index.php?controllers=ReportController&amp;views=invoice" class="btn btn-sm btn-info ">INV. </a>

                        <a harf="" onclick="return confirm('ยืนยันการยกเลิก')" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#new_supplier" >ยกเลิก.</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>C0001</td>
                    <td>20000</td>
                    <td>ยังไม่จ่าย</td>
                    <td>16-065-2016</td>
                    <td> </td>
                    <td>
                        <a href="index.php?controllers=ReportController&amp;views=invoice" class="btn btn-sm btn-info ">INV. </a>
                        <a harf="" onclick="return confirm('ยืนยันการยกเลิก')" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#new_supplier" >ยกเลิก.</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>C0001</td>
                    <td>20000</td>
                    <td>ยังไม่จ่าย</td>
                    <td>16-065-2016</td>
                    <td> </td>
                    <td>
                        <a href="index.php?controllers=ReportController&amp;views=invoice" class="btn btn-sm btn-info ">INV. </a>
                        <a harf="" onclick="return confirm('ยืนยันการยกเลิก')" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#new_supplier" >ยกเลิก.</a>
                    </td>
                </tr>
            </tbody>
        </table>
   </div>
        <div class="container" >
            <div class="row" style="margin-top:20px;">
                <div class="col-lg-2" ></div>
                <div class="col-lg-6" >
                    <div class="row" style="border-color: black;border-width: 1px;border-bottom-style: solid;"  >
                        <div class="col-lg-4"  >รวม</div>
                        <div class="col-lg-4" >4500</div>
                        <div class="col-lg-4" >4500 << จากมูลค่าโปรเจค</div>
                    </div>
                    <div class="row" style="border-color: black;border-width: 1px;border-bottom-style: solid;" >
                        <div class="col-lg-6">งบดุล</div>
                        <div class="col-lg-6">0</div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include '../assets/components/controler/sitecontrol/project_add_income.php'; ?>