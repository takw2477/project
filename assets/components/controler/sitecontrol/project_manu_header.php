<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script>

</script>

<div class="row">
    <div  class="col-lg-10 col-md-10 col-sm-10" style="text-align: right;">
        <span class="pos-txtmain"></span>
        <a href="index.php?controllers=SiteController&views=project_detail" type="button" class="btn btn-default btn-lg" id="detail_btn" data-toggle="modal" data-target="#new_project" >Detail</a> 
        <a href="index.php?controllers=SiteController&views=project_supplier" type="button" class="btn btn-default btn-lg" id="supplier_btn" data-toggle="modal" data-target="#new_project" >Supplier</a> 
        <li class="tab-web dropdown">
            <a   class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><span >Other</span>
                <span class="caret"></span></a>
            <ul class="dropdown-menu ">
                <li><a  class="<?php if ($_GET['views'] == "listcustomer") {
    echo 'tab-focus';
} else {
    echo 'tab-web';
} ?>" href="index.php?controllers=DetailController&views=listcustomer">Customer</a></li>
                <li><a  class="<?php if ($_GET['views'] == "listsupplier") {
                    echo 'tab-focus';
                } else {
                    echo 'tab-web';
                } ?>" href="index.php?controllers=DetailController&views=listsupplier">Supplier</a></li>


<?php if ($_SESSION['type'] == 0) { ?>
                    <li><a  class="<?php if ($_GET['views'] == "listuser") {
        echo 'tab-focus';
    } else {
        echo 'tab-web';
    } ?>" href="index.php?controllers=UserController&views=listuser">Manager User</a></li>
<?php } ?>

            </ul>
        </li>
    </div>
</div>


