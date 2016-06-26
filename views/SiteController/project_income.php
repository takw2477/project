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
        $('#hpj').text("รายรับของโปรเจค");
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
    <div class="row containpj" style="margin-left: 15px; ">
        <span class="pos-txtmain"></span>
        <button class="btn btn-info btn-sm " style="float: right;" data-toggle="modal" data-target="#add_income" >+รายรับ </button>
        <div class="filter col-lg-8 col-md-8 col-sm-8"  >
            ประเภท: <select style="color:black;">  
                <option value="" >all</option>
                <option value="" >บริษัท</option>
                <option value="" >บุคคล</option>
            </select>
            Status: <select style="color: black;"   >
                <option value="" >all</option>
                <option value="" >Sent</option>
                <option value="" >Wait Cash Transfer</option>
                <option value="" > Cash Transfer Completed</option>
                <option value="" > Cancel</option>
            
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
                    <th>#No</th>
                    <th>#ลูกค้า</th>
                    <th>#INV</th>
                    <th>จำนวนเงิน</th>
                    <th>วันที่ออก</th>
                    <th>วันกำหนดจ่าย</th>
                    <th>วันทีรับเงิน</th>
                    <th>สถานะ</th>
                    <th>tool</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>C0001</td>
                    <td>59001</td>
                    <td>20000</td>
                    <td>31-05-2016</td>
                    <td>31-05-2016</td>
                    <td>31-05-2016</td>
                     <td>Completed</td>
                    <td>
                            <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#chg_stat_inv" >stat</a>
                            <a href="index.php?controllers=ReportController&amp;views=invoice" class="btn btn-sm btn-info ">INV. </a>
                            <a  class="btn btn-sm btn-info "  >print </a>
        
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>C0001</td>
                    <td>59002</td>
                    <td>20000</td>
                    
                    <td>16-05-2016</td>
                    <td>16-05-2016</td>
                    <td> </td>
                    <td>Wait</td>
                    <td>
                            <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#chg_stat_inv" >stat</a>
                            <a href="index.php?controllers=ReportController&amp;views=invoice" class="btn btn-sm btn-info ">INV. </a>
                            <a  class="btn btn-sm btn-info "  >print </a>
                       
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>C0001</td>
                    <td>59003</td>
                    <td>20000</td>
                    <td>16-05-2016</td>
                    <td>16-05-2016</td>
                    <td> </td>
                    <td>Wait</td>
                    <td>
                            <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#chg_stat_inv" >stat</a>
                            <a href="index.php?controllers=ReportController&amp;views=invoice" class="btn btn-sm btn-info ">INV. </a>
                            <a  class="btn btn-sm btn-info "  >print </a>

                      
                        
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
<?php include '../assets/components/controler/sitecontrol/porject_manage_invoid_stus.php'; ?>