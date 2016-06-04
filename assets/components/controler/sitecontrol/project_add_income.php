<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script type="text/javascript">
    $(document).ready(function () {
           
        $("input[name=rdio]").change( function () {
           
            if ($(this).val() === 'h') {
                $(".inp-control").attr("disabled", "disabled");
                $(".invd").removeAttr("disabled");
            } else {
                $(".invd").attr("disabled", "disabled");
                $(".inp-control").removeAttr("disabled");


            }
        });
    });

</script>
<link rel="stylesheet" href="../assets/components/controler/css/popup-control.css" />
<div id="add_income" class="modal fade " role="dialog" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header pop-head">
                <span>เพิ่มรายรับ</span>
            </div>
            <div class="modal-body pop-body">

                <form action="index.php?controllers=SiteController&views=project_show&sub=3" method="post">
                    <table class="tlb-control" >
                        <tr>
                            <td>
                                <label>INVOICE</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มี  <input  type="radio" name="rdio" class="" value="h" />
                                ไม่มี  <input  type="radio" name="rdio" class="" checked value="n" />
                            </td>                        
                        <tr>

                        <tr>
                            <td>
                                <label>วันที่ออก invoice</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="invd" disabled/>
                            </td>                        
                        <tr>


                        <tr>
                            <td>
                                <label>ผู้รับเงิน</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select class="inp-control">
                                    <option>นาย xxxxx xxxxx</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>วันที่รับ</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="date" class="inp-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>จำนวนเงิน</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="number" class="inp-control" />
                            </td>                        
                        </tr>


                        <td>
                            <label>invoice ไฟล์ .jpg .pdf</label>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <input  class="inp-control" type="file" /> 
                            </td>
                        </tr> 

                        <tr>
                            <td>

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
