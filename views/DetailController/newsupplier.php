<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("New Supplier");
    });
</script>
<div  class="container">
    <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: center;border-right-color: #ffffff;border-right-style: solid;border-width: 2px;" >
        <h2>Detail</h2>
        <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                Supplier:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="text" style="width: 100%;" >
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                SupplierId:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="text"  style="width: 100%;" >
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                หมายเลขภาษีอากร:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="radio" > หมายเลขบัตรประชาชน  <input type="radio" > หมายเลขอากรของกพ20  <input type="radio" > Other 
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="text"  style="width: 100%;" >
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                กพ.20:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="file" style="width: 100%;" ><span style="color: red" >***หมายเหตุ กรุณาใส่ไฟล์PDF</span>
            </div>
        </div>


        <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                ที่อยู่:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <textarea   style="width: 100%;" rows="4" ></textarea>
            </div>
        </div>
    </div>




    <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: center;" >
        <h2>Contact </h2>
        <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                ชือคนติดต่อ:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="text" style="width: 100%;" >
            </div>
        </div>
        
        
         <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                เบอร์โทร:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="text" style="width: 100%;" >
            </div>
        </div>
        
        <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
            Fax:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="text" style="width: 100%;" >
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 2px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
            Email:
            </div>
        </div>
        <div class="row" style="text-align: left;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <input type="text" style="width: 100%;" >
            </div>
        </div>
        
         <div class="row" style="text-align: right;margin-top: 5px;" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <a href="index.php?controllers=DetailController&views=listsupplier" class="btn btn-info" >SAVE</a>
            </div>
        </div>
    </div>

</div>