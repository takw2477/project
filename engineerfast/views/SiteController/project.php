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
    <table class="table table-bordered table-hover ">
        <thead>
            <tr>
                <th>No.</th>
                <th>หมายเลขโปรเจค</th>
                <th>ชื่อโปรเจค</th>
                <th>Costomer</th>
                <th>ชือคนติดต่อ</th>
                <th>กพ20</th>
                <th>เบอร์โทร</th>
                <th>tool</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td><a href="http://localhost/engineerfast/web/index.php?controllers=SiteController&views=report" class="glyphicon glyphicon-align-justify" ></a></td>
                <td>xxxxx</td>
                <td><a href="http://localhost/engineerfast/web/index.php?controllers=SiteController&views=project_show" class="glyphicon glyphicon glyphicon-search" ></td>
            </tr>
            <tr>
                <td>2</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td><a href="http://localhost/engineerfast/web/index.php?controllers=SiteController&views=report" class="glyphicon glyphicon-align-justify" ></a></td>
                <td>xxxxx</td>
                <td><a href="http://localhost/engineerfast/web/index.php?controllers=SiteController&views=project_show" class="glyphicon glyphicon glyphicon-search" ></td>
            </tr>
            <tr>
                <td>3</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td>xxxxxx</td>
                <td><a href="http://localhost/engineerfast/web/index.php?controllers=SiteController&views=report" class="glyphicon glyphicon-align-justify" ></a></td>
                <td>xxxxx</td>
                <td><a href="http://localhost/engineerfast/web/index.php?controllers=SiteController&views=project_show" class="glyphicon glyphicon glyphicon-search" ></td>
            </tr>
        </tbody>
    </table>
</div>
</div>