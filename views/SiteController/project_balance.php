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
        $('#hpj').text("รายละเอียด งลดุลของโปรเจค");
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

          <div table-responsive>
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
                    <td>รับ</td>
                    <td>01-06-2016</td>
                    <td>ไลอ้อนประเทศไทย จำกัด</td>

                    <td>ติดต้างระบบ PLC</td>
                    <td>20000</td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>จ่าย</td>
                    <td>01-06-2016</td>
                    <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>

                    <td>"Foxboro" Flow System Meter</td>
                    <td>20000</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>จ่าย</td>
                    <td>01-06-2016</td>
                    <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>

                    <td>"Foxboro" Flow System Meter</td>
                    <td>20000</td>

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