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
    <h2 class="mb-5">Residential Real Estate</h2>



    <?php $entries = get_residential_real_estate_entry(); ?>

    <!-- <pre><?php print_r( $entries ) ; ?></pre>  -->






     <table id="entriesContainer" class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>ID</th>
           <th>First name</th>
           <th>Last Name</th>
           <th>Phone</th>
           <th>Email</th>
           <th>Message</th>

           <th>Service</th>

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
           
           <td><?=$entry['service'];?></td>

           <td><?=$entry['datetimeinserted'];?></td>
         </tr>

        <?php endforeach; ?>


       </tbody>
     </table>








   </div>

   <script type="text/javascript">
     jQuery( document ).ready(function(){
        $('#entriesContainer').DataTable({
          paging: true,       // Enable pagination
          searching: true,    // Enable search box
          ordering: true,     // Enable sorting
          info: true,         // Show table info
          responsive: true    // Make table responsive
      });
     });
   </script>

<?php include("template-parts/footer-admin.php"); ?>

