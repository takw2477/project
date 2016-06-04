<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
    create date: 21/5/2556
    Author: Wuthisak.M
-->

<script type="text/javascript" >
$(document).ready(function (){
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

  
           <button class="btn btn-info btn-sm " style="float: right;" data-toggle="modal" data-target="#new_expenditure" >+รายจ่าย </button>
            <div class="filter col-lg-8 col-md-8 col-sm-8"   >
                ประเภท: <select style="color:black;">  
                    <option value="" >all</option>
                    <option value="" >บริษัท</option>
                    <option value="" >บุคคล</option>
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
                    <th>ประเภท</th>
                    <th>จ่ายให้</th>
                    <th>ผู้จ่าย</th>
                    <th>รายละเอียด</th>
                    <th>วันที่จ่าย</th>
                    <th>จำนวนเงิน</th>
                    <th>tool</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>xxxxxx</td>
                    <td>บรษัท</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxx</td>
                    <td>
                        <a harf="" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#add_bill" >+Bill.</a>
                        <a href="" onclick="return confirm('ยืนยันการยกเลิก') "class="btn btn-sm btn-info "  >ยกเลิก </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>xxxxxx</td>
                    <td>บุคคล</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxx</td>
                    <td>
                        <a harf="" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#add_bill" >+Bill.</a>
                        <a href="" class="btn btn-sm btn-info "  onclick="return confirm('ยืนยันการยกเลิก') " >ยกเลิก </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>xxxxxx</td>
                    <td>อื่นๆ</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxx</td>
                    <td>
                        <a harf="" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#new_expenditure" >+Bill.</a>
                        <a href="" class="btn btn-sm btn-info "  onclick="return confirm('ยืนยันการยกเลิก') " >ยกเลิก </a>
                    </td>
                </tr>
            </tbody>
            
        </table>
   </div>


  </div>
</div>
    <?php include '../assets/components/controler/sitecontrol/project_add_expenditure.php'; ?>
 <?php include '../assets/components/controler/sitecontrol/project_add_bill.php'; ?>
 <?php include '../assets/components/controler/sitecontrol/project_pop_supplier.php'; ?>