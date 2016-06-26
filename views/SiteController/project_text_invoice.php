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
        $('#hpj').text("ใบกำกับภาษี");
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


        <button class="btn btn-info btn-sm " style="float: right;" data-toggle="modal" data-target="#add_text_pe" >+ใบกำกับภาษี </button>


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
                        <th>No</th>
                        <th>#bill</th>
                        <th>ประเภท</th>
                        <th>บริษัท/ชื่อ</th>
                        <th>วันที่ออกเอกสาร</th>
                        <th>วันที่จ่าย</th>
                        <th>สถานะ</th>
                        <th>tool</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>56/001</td>
                        <td>บริษัท</td>
                        <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>
                        <td>2-6-2016</td>
                        <td></td>
                        <td><span span="">ยังไม่จ่าย</span></td>
                        <td>
                            <a harf="#" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#chg_stat_pe" >stat</a>
                            <a onclick="return confirm('คุณต้องการแก้ไข ใบเสร็จใช่หรือไม่')" href="index.php?controllers=ReportController&views=project_gen_po_peple" class="btn btn-sm btn-info "  >Bill </a>
                            <a  href="../views/ReportController/project_print_po_peple.php" class="btn btn-sm btn-info "  >print </a>                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>56/002</td>
                        <td>บริษัท</td>
                        <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>
                        <td>2-6-2016</td>
                        <td>3-6-2016</td>
                        <td><span style="">จ่ายแล้ว</span></td>
                         <td>
                            <a harf="#" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#chg_stat_pe" >stat</a>
                            <a onclick="return confirm('คุณต้องการแก้ไข ใบเสร็จใช่หรือไม่')" href="index.php?controllers=ReportController&views=project_gen_po_peple" class="btn btn-sm btn-info "  >Bill </a>
                            <a  href="../views/ReportController/project_print_po_peple.php" class="btn btn-sm btn-info "  >print </a>                        </td>                  
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>56/003</td>
                        <td>บริษัท</td>
                        <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>
                        
                        <td>2-6-2016</td>
                        <td></td>
                        <td><span style="">ยังไม่จ่าย</span></td>
                        
                          <td>
                            <a harf="#" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#chg_stat_pe" >stat</a>
                            <a onclick="return confirm('คุณต้องการแก้ไข ใบเสร็จใช่หรือไม่')" href="index.php?controllers=ReportController&views=project_gen_po_peple" class="btn btn-sm btn-info "  >Bill </a>
                            <a href="../views/ReportController/project_print_po_peple.php" class="btn btn-sm btn-info "  >print </a>
                         </td>
                       
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php include '../assets/components/controler/sitecontrol/project_add_bill.php'; ?>
<?php include '../assets/components/controler/sitecontrol/project_pop_supplier.php'; ?>
<?php include '../assets/components/controler/sitecontrol/project_chg_stat_pe.php'; ?>
<?php include '../assets/components/controler/sitecontrol/project_add_tex_pe.php'; ?>

