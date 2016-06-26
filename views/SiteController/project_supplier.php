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
        $('#hpj').text("PURCHASE ORDER");
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
    <div class="row containpj" style="margin-left: 15px;">
        <span class="pos-txtmain" ></span>
        <script>



        </script>


        <a onclick="return confirm('คุณต้องการเพิ่ม PO.ใช่หรือไม่')" class="btn btn-info btn-sm" href="index.php?controllers=ReportController&views=project_gen_po" style="float: right;"  >+ PURCHASE ORDER </a>


        <div class="filter col-lg-8 col-md-8 col-sm-8"  >
            ประเภท: <select style="color:black;">  
                <option value="" >all</option>
                <option value="" >บริษัท</option>
                <option value="" >บุคคล</option>
            </select>
            status: <select style="color: black;"   >
                <option value="" >all</option>
                <option value="" >Post Sent</option>
                <option value="" >Waiting Delivery</option>
                <option value="" >Goods Received </option>
                <option value="" >Wait Payment </option>
                <option value="" >Paid </option>
              
                
          
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
                     
                        <th>#PO</th>
                        <th>company/name</th>
                        <th>detail</th>
                        <th>วันที่บันทึก</th>
                        <th>วันที่จ่าย</th>
                        <th>status</th>
                        <th>note</th>
                        <th>tool</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      
                        <td>20160426001</td>
                   
                        <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>
                        <td>"Foxboro" Flow System Meter</td>
                        <td>2-6-2016</td>
                        <td></td>
                        <td><span span="">Waiting Delivery</span></td>
                        <td></td>
                      
                        <td>
                            <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#chg_stat" >stat</a>
                            <a href="index.php?controllers=ReportController&views=project_gen_po" onclick="return confirm('คุณต้องการแก้ไข PO.ใช่หรือไม่')" class="btn btn-sm btn-info "  >PO </a>
                            <a  class="btn btn-sm btn-info "  >print </a>
                        </td>
                    </tr>
                    <tr>
                     
                        <td>20160426002</td>
                     
                        <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>
                        <td>เขียนโปรแกรม php</td>
                        <td>1-6-2016</td>
                        <td></td>
                         <td><span style="">Goods Received</span></td>
                        <td></td>
                       
                        <td>
                            <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#add_item" >stat</a>
                            <a href="index.php?controllers=ReportController&views=project_gen_po" onclick="return confirm('คุณต้องการแก้ไข PO.ใช่หรือไม่')" class="btn btn-sm btn-info "  >PO </a>
                            <a  class="btn btn-sm btn-info "  >print </a>
                        </td>
                    </tr>
                    <tr>
                    
                        <td>20160426003</td>
                    
                        <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>
                        <td>"Foxboro" Flow System Meter</td>
                        <td>2-6-2016</td>
                        <td>2-6-2016</td>
                         <td><span style="">Paid</span></td>
                        <td></td>
                        <td>
                            <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#add_item" >stat</a>
                            <a href="index.php?controllers=ReportController&views=project_gen_po" onclick="return confirm('คุณต้องการแก้ไข PO.ใช่หรือไม่')" class="btn btn-sm btn-info "  >PO </a>
                            <a  class="btn btn-sm btn-info " >print </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php include '../assets/components/controler/sitecontrol/project_add_bill.php'; ?>
<?php include '../assets/components/controler/sitecontrol/project_pop_supplier.php'; ?>
<?php include '../assets/components/controler/sitecontrol/project_chg_stat.php'; ?>
