<link rel="stylesheet" href="../assets/components/controler/css/popup-control.css" />

<div id="chg_stat_pe" class="modal fade " role="dialog" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header pop-head">
                <span>Status Management</span>
            </div>
            <div class="modal-body pop-body">
             
                <form action="index.php?controllers=SiteController&views=project_show&sub=7" method="post">
                    <table  class="tlb-control">
                        <tr>
                            <td>
                                <label>วันที่สร้างใบเสร็จ</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
                            </td>
                        </tr>
                        <td>
                            <label>วันที่จ่าย</label>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
                            </td>
                        </tr>
                       
                        <tr>
                            <td>
                                <label>สถานะ</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              
                                <select style="color: black;" class='inp-control'  >
                
                <option value="" >ยังไม่จ่าย</option>
                <option value="" >จ่ายแล้ว</option>
                <option value="" >ยกเลิก </option>
              
                
          
            </select>
                            </td>
                        </tr>



                        <tr>
                            <td>

                                <div class="form-group inp-control">
                                    <label for="comment">หมายเหตุ:</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>

                            </td>
                        </tr>


                        <td style="text-align: center;"><button type="submit" class="btn-submit btn-lg ">ตกลง</button>

                        </td>

                        </tr>
                    </table>

                </form>
            </div>

        </div>
    </div>
</div>

