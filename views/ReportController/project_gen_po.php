<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *     create date: 21/5/2556
  Author: Wuthisak.M
 */
?>

<style>
    .descript{
        width: 100%;
    }
</style>

<div class="container" >
    <div style="text-align: center;" class="row" >
        <h2>GENERATED PURCHASE ORDER</h2>
    </div>
    <div style="width:60%; margin:auto;">
        <div>
            <div class="row" >
                <h3>วันที่ออก P.O.</h3>
            </div>
            <div class="row" >
                <input style="width: 100%;"  value="" type="date" name="d_po" id="d_po" >
            </div>
            <div class="row" >
                <h3>เลขเอกสาร</h3>
            </div>
            <div class="row" >
                <input style="width: 100%;" value="" type="text" name="po_no" id="po_no" disabled >
            </div>
            <div class="row" >
                <h3>ชื่อคนออกเอกสาร</h3>
            </div>
            <div class="row" style="" >
                <select  class="form-control" style=" width:100%;">

                    <option value="" selected='selected' ></option>
                    <option value="" >นาย abc def</option>

                </select>
            </div>
            <div class="row" >
                <h3>    Other Comments or Special Instructions: </h3>
            </div>
            <div class="row"  >
                <textarea style="width:100%;"></textarea>
            </div>
        </div>

        <div class="row">
            <table  border="1" style="text-align:center; background-color: #00a4db; margin-top: 25px; ">
                <tr>
                    <td width="70%">DESCRIPTION</td>
                    <td width="10%">QTY</td>
                    <td width="10%">DISC.%</td>
                    <td width="10%">UNIT PRICE</td>
                </tr>
                <tr>
                    <td ><input type="text" id="descipt_0" name="descipt_0" class="descript" /></td>
                    <td><input type="number" id="qty_0" name="qty_0" class="qty" /></td>
                    <td><input type="number" id="disc_0" name="disc_0" class="disc" /></td>
                    <td><input type="number" id="price_0" name="price_0" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_1" name="descipt_1" class="descript" /></td>
                    <td><input type="number" id="qty_1" name="qty_1" class="qty" /></td>
                    <td><input type="number" id="disc_1" name="disc_1" class="disc" /></td>
                    <td><input type="number" id="price_1" name="price_1" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_2" name="descipt_2" class="descript" /></td>
                    <td><input type="number" id="qty_2" name="qty_2" class="qty" /></td>
                    <td><input type="number" id="disc_2" name="disc_2" class="disc" /></td>
                    <td><input type="number" id="price_2" name="price_2" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_3" name="descipt_3" class="descript" /></td>
                    <td><input type="number" id="qty_3" name="qty_3" class="qty" /></td>
                    <td><input type="number" id="disc_3" name="disc_3" class="disc" /></td>
                    <td><input type="number" id="price_3" name="price_3" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_4" name="descipt_4" class="descript" /></td>
                    <td><input type="number" id="qty_4" name="qty_4" class="qty" /></td>
                    <td><input type="number" id="disc_4" name="disc_4" class="disc" /></td>
                    <td><input type="number" id="price_4" name="price_4" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_5" name="descipt_5" class="descript" /></td>
                    <td><input type="number" id="qty_5" name="qty_5" class="qty" /></td>
                    <td><input type="number" id="disc_5" name="disc_5" class="disc" /></td>
                    <td><input type="number" id="price_5" name="price_5" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_6" name="descipt_6" class="descript" /></td>
                    <td><input type="number" id="qty_6" name="qty_6" class="qty" /></td>
                    <td><input type="number" id="disc_6" name="disc_6" class="disc" /></td>
                    <td><input type="number" id="price_6" name="price_6" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_7" name="descipt_7" class="descript" /></td>
                    <td><input type="number" id="qty_7" name="qty_7" class="qty" /></td>
                    <td><input type="number" id="disc_7" name="disc_7" class="disc" /></td>
                    <td><input type="number" id="price_7" name="price_7" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_8" name="descipt_8" class="descript" /></td>
                    <td><input type="number" id="qty_8" name="qty_8" class="qty" /></td>
                    <td><input type="number" id="disc_8" name="disc_8" class="disc" /></td>
                    <td><input type="number" id="price_8" name="price_8" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_9" name="descipt_9" class="descript" /></td>
                    <td><input type="number" id="qty_9" name="qty_9" class="qty" /></td>
                    <td><input type="number" id="disc_9" name="disc_9" class="disc" /></td>
                    <td><input type="number" id="price_9" name="price_9" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_10" name="descipt_10" class="descript" /></td>
                    <td><input type="number" id="qty_10" name="qty_10" class="qty" /></td>
                    <td><input type="number" id="disc_10" name="disc_10" class="disc" /></td>
                    <td><input type="number" id="price_10" name="price_10" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_11" name="descipt_11" class="descript" /></td>
                    <td><input type="number" id="qty_11" name="qty_11" class="qty" /></td>
                    <td><input type="number" id="disc_11" name="disc_11" class="disc" /></td>
                    <td><input type="number" id="price_11" name="price_11" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_12" name="descipt_12" class="descript" /></td>
                    <td><input type="number" id="qty_12" name="qty_12" class="qty" /></td>
                    <td><input type="number" id="disc_12" name="disc_12" class="disc" /></td>
                    <td><input type="number" id="price_12" name="price_12" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_13" name="descipt_13" class="descript" /></td>
                    <td><input type="number" id="qty_13" name="qty_13" class="qty" /></td>
                    <td><input type="number" id="disc_13" name="disc_13" class="disc" /></td>
                    <td><input type="number" id="price_13" name="price_13" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_14" name="descipt_14" class="descript" /></td>
                    <td><input type="number" id="qty_14" name="qty_14" class="qty" /></td>
                    <td><input type="number" id="disc_14" name="disc_14" class="disc" /></td>
                    <td><input type="number" id="price_14" name="price_14" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_15" name="descipt_15" class="descript" /></td>
                    <td><input type="number" id="qty_15" name="qty_15" class="qty" /></td>
                    <td><input type="number" id="disc_15" name="disc_15" class="disc" /></td>
                    <td><input type="number" id="price_15" name="price_15" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_16" name="descipt_16" class="descript" /></td>
                    <td><input type="number" id="qty_16" name="qty_16" class="qty" /></td>
                    <td><input type="number" id="disc_16" name="disc_16" class="disc" /></td>
                    <td><input type="number" id="price_16" name="price_16" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_17" name="descipt_17" class="descript" /></td>
                    <td><input type="number" id="qty_17" name="qty_17" class="qty" /></td>
                    <td><input type="number" id="disc_17" name="disc_17" class="disc" /></td>
                    <td><input type="number" id="price_17" name="price_17" class="price" /></td>
                </tr>
                <tr>
                    <td><input type="text" id="descipt_18" name="descipt_18" class="descript" /></td>
                    <td><input type="number" id="qty_18" name="qty_18" class="qty" /></td>
                    <td><input type="number" id="disc_18" name="disc_18" class="disc" /></td>
                    <td><input type="number" id="price_18" name="price_18" class="price" /></td>
                </tr>
            </table>
        </div>

        <div class="row" style="margin-top: 10px;" >
            <div class="col-lg-6">
                <a href="index.php?controllers=SiteController&views=project_show&sub=2" class="btn btn-info"  style="width: 100%;" type="submit" name="pass" id="user" >SAVE</a>
            </div>
            <div class="col-lg-6">
                <a href="../views/ReportController/project_print_po.php" class="btn btn-info" style="width: 100%;" target="_blank"  >PRINT</a>
            </div>
        </div>
    </div>
</div>

