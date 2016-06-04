<script type="text/javascript" >
    $(document).ready(function () {
      
      if($('#se').val()==1){
          $('#dddd').attr('disabled', true);
      }
      
      
        $('#headder').text("Invoice");
        
        $('#se').change(function(){
            
            var r=$('#se').val();
             if(r==2){
            $('#dddd').attr('disabled', false);
        
            
        }else{
             $('#dddd').attr('disabled', true);
        }
        });
    });
</script>
<div class="container" >

    <div class="row" >   
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: left;" >
            
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;" >
             <a href="index.php?controllers=SiteController&views=project_balance"  class="btn btn-default glyphicon glyphicon-share" ></a> 
            <a target="_blank"  href="../assets/components/views/reportcontroller/invoice_print.php" class="btn btn-default glyphicon glyphicon-print" ></a>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 20px;" >
    <table class="table table-bordered" style="background-color: white;">
        <thead>
            <tr>
                <th style="width: 20%;"> เลขที NO. </th>
                <th style="width: 80%;">วันท DATE</th>        
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" disabled="disabled" value="59013" ></td>
                <td>3/9/2016</td>  
            </tr>  
        </tbody>
    </table>

</div>

<div class="container"  >
    <table class="table table-bordered" style="background-color: white;">

        <tbody>
            <tr>
                <td>สถานที่ส่ง :<br>Delivery to:</td>
                <td><textarea style="width: 100%" rows="4"> บริษัท ทิปโก้แอสฟัลท์จำกัด (มหาชน)271 ม.15 บ้านวังกุ่ม ถ.พิษณุโลก-บางระกำ ต.บางระกำ อ.บางระกำ จ.พิษณุโลก 65140
                    </textarea></td>  
            </tr>  
        </tbody>
    </table>
</div>

<div class="container" >

    <table class="table table-bordered" style="background-color: white;text-align: center;">
        <thead>
            <tr>
                <th > รหัสลูกค้า<br>Customer Code </th>
                <th >เลขที่ใบสั่งของลูกค้า<br>P/O Number</th>        
                <th >ผู้สั่งซื้อ<br>Purchaser</th>        
                <th >เงื่อนไขการชำระเงิน<br>Payment term</th>        
                <th >วันครบกำหนด<br>Due Date </th>        
                <th >อ้างถึง<br>Reference</th>        
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" disabled="disabled" value="C00012" ></td>
                <td><input type="text" value="TA605-0006" ></td>  
                <td><input type="text" value="PRASERT" ></td>  
                <td><input type="text" value="30 วัน" ></td>  
                <td><input type="text" value="" ></td>  
                <td><input type="text" value="QT2601002" ></td>  
            </tr>  
        </tbody>
    </table>
</div>


<div class="container" >

    <table class="table table-bordered" style="background-color: white;text-align: center;">
        <thead>
            <tr>
                <th style="width: 5%;"> ลำดับ<br>
                    Line</th>
                <th style="width: 40%;">รายการสินค้า<br>Description</th>        
                <th style="width: 10%;">จำนวน<br>Quantity</th>        
                <th style="width: 5%;">หน่วย<br>Unit</th>        
                <th style="width: 15%;">ราคาต่อหน่วย<br>Unit Price</th>        
                <th style="width: 25%;">จำนวนเงิน<br>Amount
                </th>        
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>92020 SIGNAL 4-20 mA FILTER   MODEL WA 857-411
(รายละเอียดตามใบเสนอราคา QT2601002) </td>  
                <td>2</td>  
                <td>EA</td>  
                <td>8,500.00</td>  
                <td>17000.00</td>  
            </tr>  
        </tbody>
    </table>
    <div class="row" >   
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: left;" >

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;" >
   
            <button type="button" class="btn btn-default glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal"></button>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 10px;" >
    <table class="table table-bordered" style="background-color: white;">

        <tbody>
            <tr>
                <td>หมายเหตุ:</td>
                <td><textarea style="width: 100%" rows="4"> </textarea></td>  
            </tr>  
        </tbody>
    </table>
</div>
<div class="container" style="margin-top: 20px;" >
    <table class="table table-bordered" style="background-color: white;">
        <thead>
            <tr>
                <th style="width: 20%;"> ภาษีมูลค่าเพิ่ม VAT </th>
                <th style="width: 60%" ><input style="width: 100%" type="number" ></th>
                <th style="width: 20%" >%</th>
            </tr>
        </thead>
     
    </table>

</div>

<div class="container" style="margin-top: 20px;" >
    <table class="table table-bordered" style="background-color: white;">
        <thead>
            <tr>
                <th style="width: 20%;">สถานะใบเสร็จ </th>
                <th style="width: 60%" ><select id="se" class="form-control" >
                                <option value="1" >ยังไม่จ่าย </option>
                                <option value="2" > จ่ายแล้ว</option>
                                
                    </select></th>
                    <th style="width: 20%" ><input class="form-control"  name="dddd" id="dddd" type="datetime-local" ></th>
            </tr>
        </thead>
     
    </table>

</div>

<div class="container" style="margin-top: 5px;" >
    <div class="row"  style="text-align: left;">
       
    </div>
   
</div>
<?php include_once '../assets/components/controler/reportcontroller/invoice_pupup_addrows.php'; ?>