<script type="text/javascript" >

$(document).ready(function(){
            $("#customer").on("change",function(){
             
                if($(this).val() !== "xxxx") 
                   $(".addcustomer").css("display","block");
               else
                   $(".addcustomer").css("display","none");
                
            });
});


</script>
<link rel="stylesheet" href="../assets/components/controler/css/popup-control.css" />
<div id="new_project" class="modal fade " role="dialog" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header pop-head">
                <span>NEW PROJECT</span>
            </div>
            <div class="modal-body pop-body">
                <div></div>
                <form action="index.php?controllers=SiteController&views=project_show" method="post">
                    <table class="tlb-control" >
                        <tr>
                            <td>
                                <label class="radio-inline"><input type="radio" name="optradio" checked="checked">ชื่อบริษัท</label>
                                <label class="radio-inline"><input type="radio" name="optradio">เลขภาษี</label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" id="customer" class="inp-control"  /></td> 
                        </tr>
                        <tr>
                            <td>
                                <div class="addcustomer" style="display: none;">เพิ่มข้อมูลลูกค้า:<a href="#" style="color: black;" class="glyphicon glyphicon-plus-sign" aria-hidden="true"></a></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>หมายเลขโปรเจค</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="text" class="inp-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>ชื่อโปรเจค</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="text" class="inp-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>ผู้ดูแลโปรเจค</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select class="inp-control">
                                    <option>นาย xxxxx xxxxx</option>
                                </select>
                            </td>                        
                        <tr>
                            <td>
                                <label>มูลค่า</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="number" class="inp-control" />
                            </td>
                        </tr>   

                        <tr> 
                            <td style="text-align: center;"><button type="submit" class="btn-submit btn-lg ">ตกลง</button>
                               
                            </td>

                        </tr>
                    </table>

                </form>
            </div>

        </div>
    </div>
</div>
</div>