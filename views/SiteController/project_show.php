<script type="text/javascript" >
    $(document).ready(function () {
       $('#headder').text("P201605001 บ.ไลอ้อน");
    });
</script>
<!--
<ul class="nav nav-tabs">
    <li class="active"><a href="">Detail</a> 
    
    </li>
    <li><a href="index.php?controllers=SiteController&views=project_supplier"></a>Supplier</li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Balance
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="index.php?controllers=SiteController&views=project_income">รายรับ</a></li>
            <li><a href="index.php?controllers=SiteController&views=project_expenditure">รายจ่าย</a></li>
            <li><a href="index.php?controllers=SiteController&views=project_balance">งลดุล</a></li> 
        </ul>
    </li>
    
</ul>
-->
<style type="text/css">
    .containpj{
        margin-top:20px;
        margin-right: 40px;
    }
</style>


<div class="container">
    <div style="text-align: center; font-weight: bold; font-size: 24px;" id="hpj">H</div>
    <ul class="nav nav-tabs nav-pills">
        <li class=" <?php if(isset($_GET['sub']) && $_GET['sub'] == 1) echo 'active'; ?>"><a  href="index.php?controllers=SiteController&views=project_show&sub=1">Detail</a></li>
        <li class="<?php if(isset($_GET['sub']) && $_GET['sub'] == 2) echo 'active'; ?>"><a  href="index.php?controllers=SiteController&views=project_show&sub=2">Supplier</a></li>
        <li class="<?php if(isset($_GET['sub']) && $_GET['sub'] == 3) echo 'active'; ?>"><a  href="index.php?controllers=SiteController&views=project_show&sub=3">รายรับ</a></li>
        <li class="<?php if(isset($_GET['sub']) && $_GET['sub'] == 4) echo 'active'; ?>"><a  href="index.php?controllers=SiteController&views=project_show&sub=4">รายจ่าย</a></li>
        <li class="<?php if(isset($_GET['sub']) && $_GET['sub'] == 5) echo 'active'; ?>"><a  href="index.php?controllers=SiteController&views=project_show&sub=5">งลดุล</a></li>
    </ul>

   
    <div id="" class="" style="background-color: #F6F7F9; ">

           <?php 

            $subTab = isset($_GET['sub']) ? $_GET['sub']:1; 
           
            switch ($subTab ){
                case 1: require '../views/SiteController/project_detail.php';
                    break;
                case 2: require '../views/SiteController/project_supplier.php';
                    break;
                case 3: require '../views/SiteController/project_income.php';
                    break;
                case 4: require '../views/SiteController/project_expenditure.php';
                    break;
                case 5: require '../views/SiteController/project_balance.php';
                    break;
                
            }
            
            
            ?>
<!--
            <div id="supplier" class="tab-pane fade">

                <p><?php// include '../views/SiteController/project_supplier.php'; ?></p>
            </div>
            <div id="income" class="tab-pane tab-content tab-web fade">
                <p> <?php //include '../views/SiteController/project_income.php'; ?></p>

            </div>

            <div id="expenditure" class="tab-pane fade">
                <p> <?php // include '../views/SiteController/project_expenditure.php'; ?></p>
            </div>

            <div id="detail" class="tab-pane fade">
                <p> <?php // include '../views/SiteController/project_detail.php'; ?></p>
            </div> -->
  
    </div>
</div>