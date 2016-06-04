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
        <div  class="col-lg-10 col-md-10 col-sm-10" style="text-align: right;">
            <span class="pos-txtmain">งบดุล</span>
            <div class="dropdown" style="float:right;">
                <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Balance
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="index.php?controllers=SiteController&views=project_income">รายรับ</a></li>
                    <li><a href="index.php?controllers=SiteController&views=project_expenditure">รายจ่าย</a></li>
                    <li><a href="index.php?controllers=SiteController&views=project_balance">งบดุล</a></li>
                </ul>
            </div>

            <div style="float:right;"><a href="index.php?controllers=SiteController&views=project_supplier" type="button" class="btn btn-default btn-lg ">Supplier</a></div>
            <div style="float:right;"> <a href="index.php?controllers=SiteController&views=project_detail" type="button" class="btn btn-default btn-lg ">Detail</a> </div>
        </div>




        <div class="filter col-lg-8 col-md-8 col-sm-8"  >
            ประเภท: <select style="color:black;">  
                <option value="" >all</option>
                <option value="" >บริษัท</option>
                <option value="" >บุคคล</option>
            </select>
            ประเภท: <select style="color: black;"   >
                <option value="" >all</option>
                <option value="" >รายรับ</option>
                <option value="" >รายจ่าย</option>
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

        <div class="col-lg-2 col-md-2 col-sm-2" ></div>

        <   <div table-responsive>
    <table class="table table-bordered table-hover ">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>รับ/จ่าย</th>
                    <th>วันที่</th>
                    <th>ชื่อ/บริษัท</th>

                    <th>รายละเอียด</th>
                    <th>จำนวนเงิน</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>

                    <td>xxxxxx</td>
                    <td>xxxxx</td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>

                    <td>xxxxxx</td>
                    <td>xxxxx</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>

                    <td>xxxxx</td>

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
                        <div class="col-lg-4" >4500 << จากรายรับของโปรเจค</div>
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



<?php /* include '../assets/components/controler/sitecontrol/project_pop_supplier.php'; */ ?>