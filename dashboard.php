<?php
// Vars
$page = "dashboard";
$pagetitle = "Dashboard | AR";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";


include("template-parts/header-admin.php");

if( !logged_in( "admin" ) ){
  if( !logged_in() ){
    header("Location: admin.php");
  } else {
    header("Location: ".$base_url );
  }
}


?>


    
   <div class="container mt-5">
    <h2>Funnels</h2>



     <table class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>Funnel Name</th>
           <th>Funnel Form Url</th>
           <th>Report Url</th>
         </tr>
       </thead>

       <tbody>
         <tr>
           <td>business valuation exit entry</td>
           <td><a href="<?php echo $base_url;?>/business_valuation_exit.php" target="_blank"><?php echo $base_url;?>/business_valuation_exit.php</a></td>
           <td><a href="<?php echo $base_url;?>/entries_business_valuation_exit.php" class="btn btn-success">Visit</a></td>
         </tr>



         <tr>
           <td>commercial real estate</td>
           <td><a href="<?php echo $base_url;?>/commercial_real_estate.php" target="_blank"><?php echo $base_url;?>/commercial_real_estate.php</a></td>
           <td><a href="<?php echo $base_url;?>/entries_commercial_real_estate.php" class="btn btn-success">Visit</a></td>
         </tr>


         <tr>
           <td>residential real estate</td>
           <td><a href="<?php echo $base_url;?>/contact-us.php" target="_blank"><?php echo $base_url;?>/contact-us.php</a></td>
           <td><a href="<?php echo $base_url;?>/entries_residentialrealestate.php" class="btn btn-success">Visit</a></td>
         </tr>

         
       </tbody>
     </table>












   </div>



<?php include("template-parts/footer.php"); ?>

