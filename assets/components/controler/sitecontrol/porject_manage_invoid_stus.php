<link rel="stylesheet" href="../assets/components/controler/css/popup-control.css" />

<div id="chg_stat_inv" class="modal fade " role="dialog" >
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header pop-head">
                <span>Status Management</span>
            </div>
            <div class="modal-body pop-body">
                <div></div>
                
                
                
                <form action="index.php?controllers=SiteController&views=project_show&sub=6" method="post">
                    <table  class="tlb-control">
                        <tr>
                            <td>
                                <label>Sand</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <label>Wait Cash Transfer</label>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <label>Cash Transfer Completed</label>
                        </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" class="inp-control" />
                            </td>
                        </tr>
                
                        <tr>
                        
                        
                        
                        <tr>
                            <td>
                                <label>Status</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              
                                <select style="color: black;" class='inp-control'  >
                <option value="" >Sent</option>
                <option value="" >Wait Cash Transfer</option>
                <option value="" >Cash Transfer Completed</option>
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

