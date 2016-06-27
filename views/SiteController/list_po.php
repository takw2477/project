<script type="text/javascript" >
    $(document).ready(function () {
        $('#headder').text("List PO");
    });
</script>
<div class="container" >

    <div class="filter col-lg-8 col-md-8 col-sm-8"  >
        เลือก: <select style="color:black;">  
            <option value="" >บริษัท</option> 
            <option value="" >บุคคล</option>
        </select>
        Name:<input value="Lion" style="color: black;" type="search" >

        Form: <input style="color: black;" type="datetime-local" >
        To: <input style="color: black;" type="datetime-local" >
    </div>

    <div table-responsive>
        <table class="table table-bordered table-hover ">
            <thead>
                <tr >
                    <!-- ToDo head -->
                    <th  style="width: 5%;text-align: center;">NO.</th>
                    <th  style="width: 5%;text-align: center;">Day</th>
                    <th style="width: 5%;text-align: center;">Month</th>
                    <th style="width: 7%;text-align: center;">Year</th>
                     <th style="text-align: center;">Name</th>    
                      <th style="text-align: center;">SupplierId</th>    
                    <th style="text-align: center;">PO</th>      
                    
                     <th style="text-align: center;">Status</th>   
                    <th style="width: 20%;text-align: center;">Price</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">        
                <!-- ToDo Body -->
                <tr>
                    <td>1</td>
                    <td>5</td>
                    <td>7</td>
                    <td>2016</td>
                    <td>Lion</td>
                    <td>S59001</td>
                    <td>PO59001</td>
                    <td>pay</td>
                    <td>25000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>5</td>
                    <td>7</td>
                    <td>2016</td>
                     <td>Lion</td>
                    <td>S59001</td>
                    <td>PO59002</td>
                       <td>pay</td>
                    <td>30000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>5</td>
                    <td>7</td>
                    <td>2016</td>
                     <td>Lion</td>
                    <td>S59001</td>
                    <td>PO59003</td>
                       <td>pay</td>
                    <td>40000</td>
                </tr>


                <tr>
                    <td colspan="6" ></td>
                    <td style="text-align: right;">Total</td>
                    <td>95000</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>