<link rel="stylesheet" href="../assets/components/controler/css/popup-control.css" />

<div id="new_supplier" class="modal fade " role="dialog" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header pop-head">
                <span>ADD SUPPLIER</span>
            </div>
            <div class="modal-body pop-body">
                <div></div>
                <form action="index.php?controllers=SiteController&views=project_supplier" method="post">
                    <table  class="tlb-control">
                        <tr>
                            <td><label>ประเภท</label></td>
                        </tr>
                        <tr>
                            <td>
                                <select class="inp-control>"
                                    <option>บริษัท</option>
                                    <option>บุคคล</option>
                                   
                                </select>
                            </td> 
                        </tr>

                        <tr>
                            <td>
                                <label>บริษัท/ชื่อ</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select class="inp-control"> 
                                    <option></option>
                                    <option>xxxxxxxxx</option>
                                </select>
                            </td>
                        </tr>
  
                        <tr>
                            <td>
                                <label>วันที่บันทึก</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
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

