<link rel="stylesheet" href="../assets/components/controler/css/popup-control.css" />

<div id="chg_stat" class="modal fade " role="dialog" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header pop-head">
                <span>Status Management</span>
            </div>
            <div class="modal-body pop-body">
             
                <form action="index.php?controllers=SiteController&views=project_show&sub=6" method="post">
                    <table  class="tlb-control">
                        <tr>
                            <td>
                                <label>sand P.O date</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
                            </td>
                        </tr>
                        <td>
                            <label>Goods Received</label>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
                            </td>
                        </tr>
                        <td>
                            <label>Paid</label>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Status</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              
                                <select style="color: black;" class='inp-control'  >
                
                <option value="" >Post Sent</option>
                <option value="" >Waiting Delivery</option>
                <option value="" >Goods Received </option>
                <option value="" >Wait Payment </option>
                <option value="" >Paid </option>
                <option value="" >cancel </option>
              
                
          
            </select>
                            </td>
                        </tr>



                        <tr>
                            <td>

                                <div class="form-group inp-control">
                                    <label for="comment">note:</label>
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

