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
    $('#headder').text("P201605001 บ.ไลอ้อน");
    $('#hpj').text("รายจ่ายของโปรเจค");
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

  
           <button class="btn btn-info btn-sm " style="float: right;" data-toggle="modal" data-target="#new_expenditure" >+เงินสดย่อย </button>
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
                    <td>#NO</td>
                    <th>#PO.</th>
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
                    <td>20160426001</td>
                    <td>บริษัท</td>
                    <td>ไฮเปอร์อินสตรูเมนท์ จำกัด</td>
                    <td>นาย แอดมิน ท่านหนึ่ง</td>
                    <td>"Foxboro" Flow System Meter</td>
                    <td>31-5-2016</td>
                    <td>2000</td>
                    <td>
                        <a harf="" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#add_bill" >+Bill.</a>
                        <a href="" onclick="return confirm('ยืนยันการยกเลิก') "class="btn btn-sm btn-info "  >ยกเลิก </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>20160426002</td>
                    <td>บุคคล</td>
                    <td>นาย วุฒิศักดิ์ หมอยา</td>
                    <td>นาย แอดมิน ท่านหนึ่ง</td>
                    <td>เขียนโปรแกรม PHP</td>
                    <td>31-5-2016</td>
                    <td>1000</td>
                    <td>
                        <a harf="" class="btn btn-sm btn-info " style="" data-toggle="modal" data-target="#add_bill" >+Bill.</a>
                        <a href="" class="btn btn-sm btn-info "  onclick="return confirm('ยืนยันการยกเลิก') " >ยกเลิก </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>20160426003</td>
                    <td>อื่นๆ </td>
                    <td>โรงแรม บานาน่าอิน</td>
                    <td>นาย หน้าหน้าโปรเจค ท่านหนึ่ง</td>
                    <td>พักผ่อนงานต่างจังหวัด</td>
                    <td>31-5-2016</td>
                    <td>500</td>
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