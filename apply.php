<?php

include ("databese_connect.php");
mysql_query("SET NAMES utf8");

if(isset($_POST['Send'])){



 $target_dir = "upload/";

 $target_file = time().rand(1000,9999).".".  end(explode(".",$_FILES["fileToUpload"]["name"]));
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir. $target_file)) {
         $sql1 .= ", cv ";
         $sql2 .= ",'$target_file' ";
     } 

 $target_file = time().rand(1000,9999).".".  end(explode(".",$_FILES["fileToUpload1"]["name"]));
  if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"],$target_dir. $target_file)) {
         $sql1 .= ", motivation ";
         $sql2 .= ",'$target_file' ";
     } 
  

    $firstName = mysql_real_escape_string($_POST['firstName']);

    $lastName = mysql_real_escape_string($_POST['lastName']);

    $birth = mysql_real_escape_string($_POST['birth']);

    $email = mysql_real_escape_string($_POST['email']);

    $sex = mysql_real_escape_string($_POST['sex']);

    $address = mysql_real_escape_string($_POST['address']);

    $houseNumber = mysql_real_escape_string($_POST['houseNumber']);

    $zipCode = mysql_real_escape_string($_POST['zipCode']);

    $euPermition = mysql_real_escape_string($_POST['euPermition']);

    $bnsNumber = mysql_real_escape_string($_POST['bnsNumber']);

   // $sex = mysql_real_escape_string($_POST['sex']);





    $sql = "INSERT INTO `recruitment` (firstName, lastName, birth, email, sex, address, houseNumber, zipCode, euPermition, bnsNumber $sql1) VALUES ('$firstName','$lastName','$birth','$email','$sex','$address','$houseNumber','$zipCode','$euPermition','$bnsNumber' $sql2)";

    mysql_query($sql) or die(mysql_error());


$success=1;
header("Location: appSuccess.php");exit;

} 

?>

<?php include("header.php"); ?>

  <link rel="stylesheet" type="text/css" href="css/nav2.css">

  

<?php include("header.php"); ?>

</header>

<div class="container" id="apply">
  <table>
  <div class="well">
  <h3><strong>All fields are required!</strong></h3>
</div>
  </table>


  <form role="form" method="post" enctype="multipart/form-data">
  <table class="table table-bordered">
    
    <tbody id = "table1">
      <tr id = "row_id1">
        <th scope="row">First Name</th>
        <td><input type="text" class="form-control" id="text" name="firstName" value="<?=$data['firstName'] ?>" required></td>
      </tr>

      <tr id = "row_id1">
        <th scope="row">Last Name</th>
        <td><input type="text" class="form-control" id="text" name="lastName" value="<?=$data['lastName'] ?>" required></td>
      </tr>

      <tr id = "row_id1">
      <input type="hidden"  name="birth" value="<?=$data['rth'] ?>" required> 
        <th scope="row">Date of birth</th>
        <td>
          <input type="date" class="form-control" id="text" name="birth" value="<?=$data['birth'] ?>"  autocomplete="on" required>
        </td>
      </tr>

      <tr id = "row_id1">
        <th scope="row">E-mail address</th>
        <td><input type="text" class="form-control" id="text" name="email" value="<?=$data['email'] ?>" required></td>
      </tr>

      <tr id = "row_id1">
        <th scope="row">Sex</th>
        <td>
          <select name="sex" class="form-control" required>
                  <option value="Man" <?php if(in_array("Man",@explode(", ",$data['sex']))) echo "selected";?>>Man</option>
                  <option value="Woman" <?php if(in_array("Woman",@explode(", ",$data['sex']))) echo "selected";?>>Woman</option>
          </select>      
        </td>
      </tr>

      <tr id = "row_id1">
        <th scope="row">Address</th>
        <td><input type="text" class="form-control" id="text" name="address" value="<?=$data['address'] ?>" placeholder="Asterweg" required></td>
      </tr>

      <tr id = "row_id1">
        <th scope="row">House number</th>
        <td><input type="number" class="form-control" id="text" name="houseNumber" value="<?=$data['houseNumber'] ?>" placeholder="20-F1" required></td>
      </tr>

      <tr id = "row_id1">
        <th scope="row">Zip code</th>
        <td><input type="text" class="form-control" id="text" name="zipCode" value="<?=$data['zipCode'] ?>" placeholder="1031 HN" required></td>
      </tr>
     
      <tr id = "row_id1">
        <th scope="row">Do you have EU work permition?</th>
        <td>
          <select name="euPermition" class="form-control">
                  <option value="Yes" <?php if(in_array("Yes",@explode(", ",$data['euPermition']))) echo "selected";?>>Yes</option>
                  <option value="No" <?php if(in_array("No",@explode(", ",$data['euPermition  ']))) echo "selected";?>>No</option>
          </select>      
        </td> 
      </tr>


      <tr id = "row_id1">
        <th scope="row">Do you have BNS number?</th>
        <td>
          <select name="bnsNumber" class="form-control">
                  <option value="Yes" <?php if(in_array("Yes",@explode(", ",$data['bnsNumber']))) echo "selected";?>>Yes</option>
                  <option value="No" <?php if(in_array("No",@explode(", ",$data['bnsNumber']))) echo "selected";?>>No</option>
          </select>      
        </td>
      </tr>

      <tr id = "row_id1">
        <th scope="row">Upload CV</th>
        <td>
          <input type="file" class="form-control"<?php /*?> style="display: none; visibility: hidden;" <?php */?>id="myFileInput"  name="fileToUpload" ><!--<button type="button" class="btn-primary btn-lg" required>Upload</button> -->  

                    <p class="thumbnailClass">OR</p>
          <a href="https://www.dropbox.com/login?&_tk=sem_b_goog&_camp=sem-b-goog-emea-nl-eng-exact-restructure&_kw=dropbox|e&_ad=244676537428|1t1|c&gclid=Cj0KCQiAk-7jBRD9ARIsAEy8mh7uy0VJf5o28ZrqZcK-T4fu1bj5ePctLXpbkh0eERtgm6pjRoKG2iMaAvpNEALw_wcB" id="upload_link" style="text-decoration: none">Upload your file via 
          <img src="images/Dropbox_logo.png" style="width:100px"></a>​    
        </td>
      </tr>



      <tr id = "row_id1">
        <th scope="row">Upload motivation letter</th>
        <td>
          <input type="file" class="form-control id="upload"  name="fileToUpload1" >
          <p class="thumbnailClass">OR</p>
          <a href="https://www.dropbox.com/login?&_tk=sem_b_goog&_camp=sem-b-goog-emea-nl-eng-exact-restructure&_kw=dropbox|e&_ad=244676537428|1t1|c&gclid=Cj0KCQiAk-7jBRD9ARIsAEy8mh7uy0VJf5o28ZrqZcK-T4fu1bj5ePctLXpbkh0eERtgm6pjRoKG2iMaAvpNEALw_wcB" id="upload_link" style="text-decoration: none">Upload your file via 
          <img src="images/Dropbox_logo.png" style="width:100px"></a>​
        </td>
      </tr>


    </tbody>
  </table>
  <button type="submit" class="btn btn-primary btn-block" name="Send" value="send" >Send your application</button>
  </form><br><br>

<div class="container thumbnailClass">
  <h2>You might be interested in . . .</h2><br>
 
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.avgvoordemakelaar.nl/ENDOUBLE/apply.php" target="_blank">
          <img src="images/frontend.png" alt="apply" style="width:100%">
          <div class="caption">
            <p>Junior Frontend Developer</p>
          </div>
        </a>
        <a href="https://www.avgvoordemakelaar.nl/ENDOUBLE/apply.php">Apply now > ></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.avgvoordemakelaar.nl/ENDOUBLE/apply.php" target="_blank">
          <img src="images/frontend.png" alt="apply" style="width:100%">
          <div class="caption">
            <p>Medior Frontend Developer</p>
          </div>
        </a>
        <a href="https://www.avgvoordemakelaar.nl/ENDOUBLE/apply.php">Apply now > ></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.avgvoordemakelaar.nl/ENDOUBLE/apply.php" target="_blank">
          <img src="images/frontend.png" alt="apply" style="width:100%">
          <div class="caption">
            <p>Senior Frontend Developer</p>

          </div>
        </a>
        <a href="https://www.avgvoordemakelaar.nl/ENDOUBLE/apply.php">Apply now > ></a>
      </div>
    </div>
  </div>
</div>

<br clear="both">
<div></div></div>

        <!-- Footer -->
               <!-- Footer -->
        <?php include("footer.php"); ?>
        
        <script type="text/javascript">
          $("#fileupload").click(function(){
              $("#upload-file").click();
          });​
        </script>
</body>
</html>