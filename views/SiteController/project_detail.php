<!--
/*
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
*/
/* 
    Created on : May 21, 2016, 2:21:44 PM
    Author     : wuthisak.M
*/ -->

<script type="text/javascript" >
    $(document).ready(function () {
       $('#headder').text("P201605001 บ.ไลอ้อน");
     
        $("#hpj").text("รายละเอียดโปรเจค");
    });

</script>
<style>

    hr{
        color: #000;
    }
    .pos-txtmain{
        float: left;
        font-size: xx-large;
    }
</style>
<link rel="stylesheet" href="css/project_detail_style.css"/>
<script type="text/javascript" src="js/js_project_detail.js"></script>
<div class="container "  >
    <div class="row containpj" style="margin-left: 15px;">


        <form action="#" method="post" style="" role="form"  >
            <div class="form-group">
                <table class="">

                    <tr>
                        <td>
                            <div>PO.no</div>
                        </td>
                        <td>
                            <div>E-mail</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" value="20160601001" />
                            <a  href="#" style="color: black;" class="glyphicon glyphicon-plus-sign" aria-hidden="true" style="font-size: larger;"></a>
                        </td>
                        <td>
                            <input type="email" value="iampoo.rorak@gmail.com"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>ผู้ดูแลโปรเจค</div>
                        </td>
                        <td>
                            <div>[FAX]</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select>
                                <option></option>
                                <option>นาย สุระชัย สุระชัย</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" value="038-843-2123"/>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div>ชื่อผู้ติดต่อ</div>
                        </td>
                        <td>
                            <div>หมายเหต</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" value="นาย วุฒิศักดิ์ หมอยา" />
                        </td>
                        <td rowspan="2">
                            <textarea></textarea>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div>เบอร์โทรผู้ติดต่อ</div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input type="tel" value="0945295082"  />
                        </td> 
                    </tr>

                    <tr>
                        <td>สถานะ</td>
                        <td>วันที่ปิดโปรเจค</td>
                    </tr>
                    <tr>
                        <td>
                            <label style="font-weight: normal; "> <input type="checkbox" id="pj_close" name="pj_close"  class="" style="width: 14px;" /> ปิดโปรเจค</label>
                            <div class="pj_text_close"></div>
                        </td>
                        <td><input type="datetime" name="pj_date_close" id="pj_date_close"disabled="disabled"></td></td>
                    </tr>
                    <tr >
                        <td>
                            <div class="form-inline">
                                <input type="button" class="btn btn-info "    value="เพิ่มเติม" name="pass"  >
                            </div>
                        </td>
                        <td> <div class="form-inline">
                                <input class="btn btn-info " type="submit" value="บันทึก"   >
                            </div>
                        </td>

                    </tr>
                </table>
            </div>
        </form>

    </div>
</div>
