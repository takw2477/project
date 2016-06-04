<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" href="../assets/components/controler/css/popup-control.scss" />
<div id="add_bill" class="modal fade " role="dialog" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header pop-head">
                <span>บันทึกใบเสร็จ</span>
            </div>
            <div class="modal-body pop-body">

                <form action="index.php?controllers=SiteController&views=project_expenditure" method="post">
                    
                    <table class="tlb-control " >
                        <tr>
                            <td>
                                <label>เลขที่ใบเสร็จ</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="text" class="inp-control" />
                            </td>                        
                        <tr>

                        <tr>
                            <td>
                                <label>ชื่อผู้จ่าย</label>
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
                                <label>จ่ายให้</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="text" class="inp-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>วันกำหนดจ่าย</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="date" class="inp-control" />
                            </td>                        
                        </tr>
                        <tr>
                            <td>
                                <label>วันที่จ่าย</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="date" class="inp-control" />
                            </td>                        
                        <tr>

                            <td>
                                <label >จำนวน</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="number" class="inp-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>รายละเอียด</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea  class="inp-control" > </textarea>
                            </td>
                        </tr> 
                        <td>
                            <label>ไฟล์ .jpg .pdf</label>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <input  class="inp-control" type="file" /> 
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
