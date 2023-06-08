<?php

  include "header.php";
  include "connection.php";
?>

        <!-- main content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>
                    </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                                <h2 style=color:#000>Add Beneficiary</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<form class="form1" action="" method="post">
<table class="table table-bordered">
<tr>
  <td>
    <input type="text" class="form-control" placeholder="ID No." name="idno" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="First Name" name="fname" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Middle Name" name="mname" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Last Name" name="lname" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Extension Name" name="extname"/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Birthday" name="bdate" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Barangay" name="barangay" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="City" name="city" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Province" name="province" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="District" name="district" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="ID Type" name="idtype" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Contact No." name="contactno" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Bank Account" name="bankaccount" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Beneficiary Type" name="beneftype" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Occupation" name="occupation" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Sex" name="sex" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Civil Status" name="civilstatus" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Age" name="age" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Dependent(Name of the Beneficiary of the Micro-Insurance Holder)" name="dependent" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="Interested for Skills Training? (yes/no)" name="intforskills" required=""/>
  </td>
</tr><tr>
  <td>
    <input type="text" class="form-control" placeholder="If Yes, Indicate skills training needed" name="ifyes" />
  </td>
</tr>
<tr>
  <td>
    <input type="submit" value="Add Beneficiary"
              name="submit2" class="form-control btn btn-default"  style="background-color: blue; color:white;">
  </td>
</tr>
</table>


 </form>
 <?php
if(isset($_POST["submit2"]))

{
    mysqli_query($link, "insert into benefs values('$_POST[idno]','$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[extname]','$_POST[bdate]','$_POST[barangay]','$_POST[city]','$_POST[province]','$_POST[district]','$_POST[idtype]','$_POST[contactno]','$_POST[bankaccount]','$_POST[beneftype]','$_POST[occupation]','$_POST[sex]','$_POST[civilstatus]','$_POST[age]','$_POST[dependent]','$_POST[intforskills]','$_POST[ifyes]')");
}


  ?>
              </div>
             </div>
              </div>
             </div>
             </div>
             </div>
        <!-- main content -->



<?php
  include "footer.php";
 ?>
