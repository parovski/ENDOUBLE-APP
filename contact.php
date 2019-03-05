<?php 
    include("contactFunc.php"); 
    include("header.php"); 
?>

  <link rel="stylesheet" href="css/nav2.css">



    <form action="" method="POST" name="formContact">



      <section id="contact">
 
    <div class="container" id="apply">
      <table>
        <div class="well">
        <h3><strong>Our help desk service is on your service</strong></h3>
        </div>
      </table>

  
  <div class="row">
    <div class="col-md-7">
  <!--  <iframe src="" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
         <img src="images/support.jpg" style="width:100%">
   </div>

      <div class="col-md-5">
          <h4><strong></strong></h4>
        <form>
          <div class="form-group">
            <input type="first_name" class="form-control" name="first_name" value="" placeholder="First Name">
          </div>
      <div class="form-group">
            <input type="last_name" class="form-control" name="last_name" value="" placeholder="Last Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="telephone" class="form-control" name="telephone" value="" placeholder="Telefoon">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="comment" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-primary btn-lg" type="submit" name="btnContact">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send
          </button>
        </form>
      </div>
    </div>
  </div>
</section>



    </form>

<br><br><br clear="both">

 <?php include("footer.php"); ?> 