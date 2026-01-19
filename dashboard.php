
<!-- primary #002469 -->
<?php include("init/database.php"); ?>
<?php include("init/main-functions.php"); ?>

<?php
// Vars
$page = "home";
$pagetitle = "FREE Ultimate Homebuyer’s Guide | AR";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";




if( !logged_in() ){
  header("Location: admin.php");
}


?>


<?php include("template-parts/header-admin.php"); ?>

    
   <div class="container mt-5">
    <h2>Funnels</h2>



     <table class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>Funnel Name</th>
           <th>Report Url</th>
         </tr>
       </thead>

       <tbody>
         <tr>
           <td>business_valuation_exit_entry</td>
           <td><a href="<?php echo $base_url;?>/entries_business_valuation_exit.php" class="btn btn-success">Visit</a></td>
         </tr>



         <tr>
           <td>real_estate_disposition_opportunities</td>
           <td><a href="<?php echo $base_url;?>/entries_real_estate_disposition_opportunities.php" class="btn btn-success">Visit</a></td>
         </tr>



         <tr>
           <td>commercial_real_estate</td>
           <td><a href="<?php echo $base_url;?>/entries_commercial_real_estate.php" class="btn btn-success">Visit</a></td>
         </tr>


         <tr>
           <td>residentialrealestate</td>
           <td><a href="<?php echo $base_url;?>/entries_residentialrealestate.php" class="btn btn-success">Visit</a></td>
         </tr>

         
       </tbody>
     </table>












   </div>



<?php include("template-parts/footer.php"); ?>

