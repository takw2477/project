<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("P16001 โปรเจค PLC ไลอ้อน");
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
<div class="container">
    <h2>Dynamic Tabs</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#detail">Detail</a></li>
        <li><a data-toggle="tab" href="#supplier">Supplier</a></li>
        <li><a data-toggle="tab" href="#income">รายรับ</a></li>
        <li><a data-toggle="tab" href="#expenditure">รายจ่าย</a></li>
        <li><a data-toggle="tab" href="#detail">งลดุล</a></li>
    </ul>

    <div class="tab-content">
        <div id="detail" class="tab-pane fade in active">

            <p><?php include '../views/SiteController/project_detail.php'; ?></p>

            <div id="supplier" class="tab-pane fade">

                <p><?php include '../views/SiteController/project_supplier.php'; ?></p>
            </div>
            <div id="income" class="tab-pane tab-content tab-web fade">
                <p> <?php include '../views/SiteController/project_income.php'; ?></p>

            </div>

            <div id="expenditure" class="tab-pane fade">
                <p> <?php include '../views/SiteController/project_expenditure.php'; ?></p>
            </div>

            <div id="detail" class="tab-pane fade">
                <p> <?php include '../views/SiteController/project_detail.php'; ?></p>
            </div>
        </div>
    </div>
