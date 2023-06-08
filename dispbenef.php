<?php

  include "header.php";
  include "connection.php";

?>
        <!-- main content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3> </h3>
                    </div>
                    <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    </div>
                   </div>
                   </div>
                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                                <h2 style=color:#000>Beneficiaries</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <form name="form1" action="" method="post">
                                <table>
                                  <tr>
                                    <td>
                                <input type="text" name="t1"  class="form-control" placeholder="Enter Beneficiary Details">
                              </input>
                                  </td>
                                  <td>
                                <input type="submit" name="submit1" value="Search Beneficiary" class="btn btn-default" style="margin-top: 5px">
                              </td>
                            </tr>
                          </table>
                        </form>
                              <?php
                              if(isset($_POST["submit1"]))
                              {
                                $res=mysqli_query($link, "select * from benefs where fname like('%$_POST[t1]%') or idno like('%$_POST[t1]%') or mname like('%$_POST[t1]%') or lname like('%$_POST[t1]%')");
                                echo "<table class='table table-bordered'>";
                                echo "<tr style=color:#000>";
                                echo "<th>"; echo "ID No."; echo "</th>";
                                echo "<th>"; echo "First Name"; echo "</th>";
                                echo "<th>"; echo "Middle Name"; echo "</th>";
                                echo "<th>"; echo "Last Name"; echo "</th>";
                                echo "<th>"; echo "Extension Name"; echo "</th>";
                                echo "<th>"; echo "Birthday"; echo "</th>";
                                echo "<th>"; echo "Barangay"; echo "</th>";
                                echo "<th>"; echo "City"; echo "</th>";
                                echo "<th>"; echo "Province"; echo "</th>";
                                echo "<th>"; echo "District"; echo "</th>";
                                echo "<th>"; echo "ID Type"; echo "</th>";
                                echo "<th>"; echo "Contact No."; echo "</th>";
                                echo "<th>"; echo "Bank Account"; echo "</th>";
                                echo "<th>"; echo "Beneficiary Type"; echo "</th>";
                                echo "<th>"; echo "Occupation"; echo "</th>";
                                echo "<th>"; echo "Sex"; echo "</th>";
                                echo "<th>"; echo "Civil Status"; echo "</th>";
                                echo "<th>"; echo "Age"; echo "</th>";
                                echo "<th>"; echo "Dependent"; echo "</th>";
                                echo "<th>"; echo "Int For Skills"; echo "</th>";
                                echo "<th>"; echo "If Yes"; echo "</th>";
                                echo "</tr>";
                                while ($row=mysqli_fetch_array($res))
                                {
                                echo "<tr style=color:#000>";
                                echo "<td>"; echo $row["idno"]; echo "</td>";
                                echo "<td>"; echo $row["fname"]; echo "</td>";
                                echo "<td>"; echo $row["mname"]; echo "</td>";
                                echo "<td>"; echo $row["lname"]; echo "</td>";
                                echo "<td>"; echo $row["extname"]; echo "</td>";
                                echo "<td>"; echo $row["bdate"]; echo "</td>";
                                echo "<td>"; echo $row["barangay"]; echo "</td>";
                                echo "<td>"; echo $row["city"]; echo "</td>";
                                echo "<td>"; echo $row["province"]; echo "</td>";
                                echo "<td>"; echo $row["district"]; echo "</td>";
                                echo "<td>"; echo $row["idtype"]; echo "</td>";
                                echo "<td>"; echo $row["contactno"]; echo "</td>";
                                echo "<td>"; echo $row["bankaccount"]; echo "</td>";
                                echo "<td>"; echo $row["beneftype"]; echo "</td>";
                                echo "<td>"; echo $row["occupation"]; echo "</td>";
                                echo "<td>"; echo $row["sex"]; echo "</td>";
                                echo "<td>"; echo $row["civilstatus"]; echo "</td>";
                                echo "<td>"; echo $row["age"]; echo "</td>";
                                echo "<td>"; echo $row["dependent"]; echo "</td>";
                                echo "<td>"; echo $row["intforskills"]; echo "</td>";
                                echo "<td>"; echo $row["ifyes"]; echo "</td>";
                                echo "</tr>";
                                }
                                echo "</table>";
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
