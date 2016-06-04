<script src="js/js_project.js"></script>


<?php include '../assets/components/controler/sitecontrol/project_pop_newproject.php' ?>

<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("List Project");
    });
</script>

<div class="container">
    <div class="row">
        <div  style="text-align: right; margin-right: 15px;">
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#new_project" >+ New Project</button> 
        </div>
    </div>

    <div class="filter col-lg-6 col-md-6 col-sm-6 "  >
        Customer: <input style="color: black;" type="search" >
        status: <select style="color: black;"   >
            <option value="" >all</option>
            <option value="" >Open</option>
            <option value="" >close</option>
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

    <div table-responsive>
    <table class="table table-bordered table-hover " style="text-align: center;">
        <thead>
            <tr>
                <th style="text-align: center;">No.</th>
                <th style="text-align: center;">หมายเลขโปรเจค</th>
                <th style="text-align: center;">ชื่อโปรเจค</th>
                <th style="text-align: center;">Costomer</th>
                <th style="text-align: center;">ชือคนติดต่อ</th>
                <th style="text-align: center;">กพ20</th>
                <th style="text-align: center;">เบอร์โทร</th>
                 <th style="text-align: center;">สถานะ</th>
                <th style="text-align: center;">tool</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>P001</td>
                <td> บ.ไลอ้อน</td>
                <td>บริษัทไลอ้อน ประเทศไทย จำกัด</td>
                <td>นาย วุฒิศักดิ์ หมอยา</td>
                <td><a href="index.php?controllers=SiteController&views=report" class="glyphicon glyphicon-align-justify" ></a></td>
                <td><div style="color: yellow; font-weight: bold;">OPEN</div></td>
                <td>094-529-5082</td>
                <td><a href="index.php?controllers=SiteController&views=project_show&sub=1" class="glyphicon glyphicon glyphicon-search" ></td>
            </tr>
            <tr>
                <td>2</td>
                <td>P002</td>
                <td>บ.ย้ำมิ๊ก 2</td>
                <td>บริษัท ทรัพย์บุญชัย เอ็นจิเนียริ่ง จํากัด</td>
                <td> ปกรณ์ ภักเฮา</td>
                <td><a href="index.php?controllers=SiteController&views=report" class="glyphicon glyphicon-align-justify" ></a></td>
                <td><div style="color: green; font-weight: bold;">CLOSE</div></td>
                <td>087-518-8438</td>
                <td><a href="index.php?controllers=SiteController&views=project_show&sub=1" class="glyphicon glyphicon glyphicon-search" ></td>
            </tr>
            <tr>
                <td>3</td>
                <td>P003</td>
                <td>บ.ย้ำมิ๊ก 1</td>
                <td>บริษัท ทรัพย์บุญชัย เอ็นจิเนียริ่ง จํากัด</td>
                <td> ปกรณ์ ภักเฮา</td>
                <td><a href="index.php?controllers=SiteController&views=report" class="glyphicon glyphicon-align-justify" ></a></td>
                <td><div style="color: green; font-weight: bold;">CLOSE</div></td>
                <td>087-518-8438</td>
                <td><a href="index.php?controllers=SiteController&views=project_show&sub=1" class="glyphicon glyphicon glyphicon-search" ></td>
            </tr>
        </tbody>
    </table>
</div>
</div>