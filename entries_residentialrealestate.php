<?php
// Vars
$page = "home";
$pagetitle = "FREE Ultimate Homebuyer’s Guide | AR";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";



include("template-parts/header-admin.php");


if( !logged_in() ){
  header("Location: admin.php");
}


?>


    
   <div class="container mt-5">

    <a class="btn btn-info text-white mb-4" href="<?php echo $base_url; ?>/dashboard.php">Go back to funnel list</a>

    <h2 class="mb-5">Residential Real Estate</h2>



    <?php $entries = get_residential_real_estate_entry(); ?>

    <!-- <pre><?php print_r( $entries ) ; ?></pre>  -->






     <table class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>ID</th>
           <th>First name</th>
           <th>Last Name</th>
           <th>Phone</th>
           <th>Email</th>
           <th>Message</th>

           <th>businessvaluation</th>
           <th>selling</th>
           <th>buying</th>
           <th>other</th>
           <th>Datetime</th>
         </tr>
       </thead>

       <tbody>

        <?php foreach( $entries as $entry ): ?>

         <tr>
           <td><?=$entry['id'];?></td>
           <td><?=$entry['firstname'];?></td>
           <td><?=$entry['lastname'];?></td>
           <td><?=$entry['phone'];?></td>
           <td><?=$entry['email'];?></td>
           <td><?=$entry['message'];?></td>
           
           <td><?=$entry['businessvaluation'];?></td>
           <td><?=$entry['selling'];?></td>
           <td><?=$entry['buying'];?></td>
           <td><?=$entry['other'];?></td>
           <td><?=$entry['datetimeinserted'];?></td>
         </tr>

        <?php endforeach; ?>


       </tbody>
     </table>





   </div>



<?php include("template-parts/footer.php"); ?>

