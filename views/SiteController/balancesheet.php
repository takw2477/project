<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("BalanceSheet");

        $('#red').change(function () {
            var v = $(this).val();
            if (v == 3) {
                $("#s").prop('disabled', true);
            } else if (v == 1) {
                $("#s").prop('disabled', false);
            } else if (v == 2) {
                $("#s").prop('disabled', false);
            }

        });

    });
</script>



<div class="container" >

    <div class="row" >   

        <div  style="text-align: right;" >
            <a onclick='return confirm("คุณต้องการExport Excel หรือไม่");' href="#"  class="btn btn-info" >Export Excel</a>

        </div>

    </div>
</div>
<div class="container" >
    <div class="row " style="margin-left: 10px;" >


        <div class=" filter col-lg-8 col-md-8 col-sm-8" >
            <input type="radio" id="rad" value="1" name="t" >Customer
            <input type="radio" id="rad" value="2" name="t" >CustomerID
            <input type="radio" value="3" id="red" name="t" >ทั้งหมด
            <input style="color: black;" id="s" type="search" >
            From:<select  class="" style="color: black;">
                <option value="" >2016</option>
                <option value="" selected='selected' >2017</option>

            </select>
            To:<select  class="" style="color: black;">
                <option value="" >2016</option>
                <option value="" selected='selected' >2017</option>
            </select>
            Status:<select  class="" style="color: black;">
                <option value="" >all</option>
                <option value="" selected='selected' >open</option>
                <option value=""  >close</option>
            </select>
        </div>




        <div class="">
            <table class="table table-bordered table-hover" >
                <thead >
                    <tr >
                        <th style="text-align: center;">CustomerId</th>
                        <th style="text-align: center;">Customer</th>
                        <th style="text-align: center;">ประเภท</th>
                        <th style="text-align: center;">รายรับ</th>
                        <th style="text-align: center;">รายจ่าย</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C00016</td>
                        <td>Lion</td>
                        <td >
                            <div class="row" >
                                <div class="col-lg-1" >
                                    1.PLC 
                                </div>

                            </div>
                            <div class="row"  >
                                <div class="col-lg-1" >
                                    2.software
                                </div>

                            </div>


                        </td>
                        <td> <div class="row"  >
                                <div class="col-lg-1" >0</div>

                            </div>
                            <div class="row" >
                                <div class="col-lg-1" >2500</div>
                            </div></td>
                        <td><div class="row">
                                <div class="col-lg-1" >2500</div>
                            </div>
                            <div class="row"  >
                                <div class="col-lg-1" >0</div>
                            </div></td>

                    </tr>
                    <tr>
                        <td>C00017</td>
                        <td>Lion</td>
                        <td >
                            <div class="row" >
                                <div class="col-lg-1" >
                                    1.PLC 
                                </div>

                            </div>
                            <div class="row"  >
                                <div class="col-lg-1" >
                                    2.software
                                </div>

                            </div>


                        </td>
                        <td> <div class="row"  >
                                <div class="col-lg-1" >0</div>

                            </div>
                            <div class="row" >
                                <div class="col-lg-1" >2000</div>
                            </div></td>
                        <td><div class="row">
                                <div class="col-lg-1" >2000</div>
                            </div>
                            <div class="row"  >
                                <div class="col-lg-1" >0</div>
                            </div></td>

                    </tr>



                </tbody>
            </table>
        </div>
        <div class="container" >
            <div class="row" >
                <div class="col-lg-6" ></div>
                <div class="col-lg-6" >
                    <div class="row" style="border-color: black;border-width: 1px;border-bottom-style: solid;"  >
                        <div class="col-lg-4"  >รวม</div>
                        <div class="col-lg-4" >4500</div>
                        <div class="col-lg-4" >4500</div>
                    </div>
                    <div class="row" style="border-color: black;border-width: 1px;border-bottom-style: solid;" >
                        <div class="col-lg-6">งบดุล</div>
                        <div class="col-lg-6">0</div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</div>