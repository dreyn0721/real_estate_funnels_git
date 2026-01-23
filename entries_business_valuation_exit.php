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

    <h2 class="mb-5">Business Valuation Exit Entries</h2>



    <?php $entries = get_business_valuation_exit_entry(); ?>

    <!-- <pre><?php print_r( $entries ) ; ?></pre>  -->






     <table class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>ID</th>
           <th>First name</th>
           <th>Last Name</th>
           <th>Phone</th>
           <th>Email</th>
           <th>businessowner</th>
           <th>investor</th>
           <th>looking_for_office</th>
           <th>looking_for_retail</th>
           <th>looking_for_industrial</th>
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
           <td><?=$entry['businessowner'];?></td>
           <td><?=$entry['investor'];?></td>
           <td><?=$entry['looking_for_office'];?></td>
           <td><?=$entry['looking_for_retail'];?></td>
           <td><?=$entry['looking_for_industrial'];?></td>
           <td><?=$entry['datetimeinserted'];?></td>
         </tr>

        <?php endforeach; ?>


       </tbody>
     </table>





   </div>



<?php include("template-parts/footer.php"); ?>

