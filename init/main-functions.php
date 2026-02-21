<?php
$author = "Anthony Rivas";
$base_url = "http://127.0.0.1/real_estate_funnels_git";













date_default_timezone_set('America/New_York');
session_start();




if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
  $user_id = $_SESSION['user_id'];

  $get_user = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");
  $userdata = mysqli_fetch_assoc($get_user);

} else {
  $user_id = 0;
}




function logged_in( $role = false ){
  global $userdata;

  if(isset($_SESSION['user_id']) && $_SESSION['user_id']){

    if( isset( $role ) && $role && $role == "admin" ){
      if( isset( $userdata ) && is_array( $userdata ) && isset( $userdata['role'] ) && $userdata['role'] == "admin" ){
        return true;
      } else {
        return false;
      }

    } else {
      return true;
    }
    
  } else {
    return false;
  }
}










function email_exist( $email ){
  global $conn;
  $email_exist_query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' ");

    if( $email_exist_query->num_rows > 0 ){
      return true;
    } else {
      return false;
    }
}

function username_exist( $username ){
  global $conn;
  $username_exist_query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");

    if( $username_exist_query->num_rows > 0 ){
      return true;
    } else {
      return false;
    }
}


if( isset( $_POST['action'] ) && $_POST['action'] == "register" ){
  $current_time = date('m/d/Y H:i:s');


  $errors = [];

  if( isset($_POST['firstname']) && $_POST['firstname'] ){
    $firstname = $_POST['firstname'];
  } else {
    $errors[] = "Firstname is required";
  }

  if( isset($_POST['lastname']) && $_POST['lastname'] ){
    $lastname = $_POST['lastname'];
  } else {
    $errors[] = "Lastname is required";
  }

  if( isset($_POST['email']) && $_POST['email'] ){
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid Email Format";
    } else {
      if( email_exist( $email ) ){
        $errors[] = "Email is already taken";
      }
    }
    

  } else {
    $errors[] = "Email is required";
  }



  if( isset($_POST['username']) && $_POST['username'] ){

    $username = $_POST['username'];

    if( username_exist( $username ) ){
      $errors[] = "Username is already taken";
    }

  } else {
    $errors[] = "Username is required";
  }

  if( isset($_POST['password']) && $_POST['password'] ){

    if( isset($_POST['confirmpassword']) && $_POST['confirmpassword'] ){

      if( $_POST['password'] == $_POST['confirmpassword'] ){

        if( strlen( $_POST['password'] ) >= 8 ){
          if( strlen( $_POST['password'] ) > 32 ){
            $errors[] = "Password must not exceed 32 characters.";
          } else {
            $password = md5( $_POST['password'] );
          }
        } else {
          $errors[] = "Password must be atleast 8 characters.";
        }


      } else {
        $errors[] = "Password and confirm password doesn't match";
      }
      
    } else {
      $errors[] = "Confirm Password is required";
    }

  } else {
    $errors[] = "Password is required";
  }





  if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
    //make html error for return
    $html = "<ul>";

    foreach( $errors as $error ){
      $html .= "<li>".$error."</li>";
    }

    $html .= "</ul>";

    echo $html;
    exit();
  } else {
    
    $password = md5( $password );

    $register_query = 
      "
      INSERT INTO users 
      (
        firstname, 
        lastname,
        username,
        password,
        email,
        role,
        datetimeinserted
      ) 
      VALUES 
      (
        '$firstname', 
        '$lastname', 
        '$username', 
        '$password', 
        '$email', 
        'user', 
        '$current_time'
      )
      ";

    if (mysqli_query($conn, $register_query)) {
        $last_id = mysqli_insert_id($conn);



        $_SESSION['user_id'] = $last_id;
        echo "success";
        exit();
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      exit();
    }


  }


  exit();
}


function get_business_valuation_exit_entry(){

  global $conn;

  $entries = [];
  $start = 0;
  $end = 50;

  $get_entries = mysqli_query($conn, "SELECT * FROM business_valuation_exit_entry WHERE id >= '$start' AND id <= '$end'");
  while( $the_entry = mysqli_fetch_assoc( $get_entries ) ){
    $entries[] = $the_entry;
  }

  return $entries;
}










function get_commercial_real_estate_entry(){

  global $conn;

  $entries = [];
  $start = 0;
  $end = 50;

  $get_entries = mysqli_query($conn, "SELECT * FROM commercial_real_estate_entry WHERE id >= '$start' AND id <= '$end'");
  while( $the_entry = mysqli_fetch_assoc( $get_entries ) ){
    $entries[] = $the_entry;
  }

  return $entries;
}










function get_residential_real_estate_entry(){

  global $conn;

  $entries = [];
  $start = 0;
  $end = 50;

  $get_entries = mysqli_query($conn, "SELECT * FROM residential_real_estate_entry WHERE id >= '$start' AND id <= '$end'");
  while( $the_entry = mysqli_fetch_assoc( $get_entries ) ){
    $entries[] = $the_entry;
  }

  return $entries;
}



























if( isset( $_POST['action'] ) && $_POST['action'] == "login" ){

  $errors = [];

  if( isset($_POST['username']) && $_POST['username'] ){
    $username = $_POST['username'];
  } else {
    $errors[] = "Username is required";
  }

  if( isset($_POST['password']) && $_POST['password'] ){
    $password = $_POST['password'];
  } else {
    $errors[] = "Password is required";
  }


  if( isset( $username ) && $username && isset( $password ) && $password ){
    $password = md5( $password );

    $login_query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");

    if( $login_query->num_rows > 0 ){
      $user = mysqli_fetch_assoc( $login_query );

      $_SESSION['user_id'] = $user['id'];

      echo $user['id'];
      exit();
      
    } else {

      $errors[] = "Invalid username or password";


    }

  }

  if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
    //make html error for return
    $html = "<ul>";

    foreach( $errors as $error ){
      $html .= "<li>".$error."</li>";
    }

    $html .= "</ul>";

    echo $html;
    exit();
  } else {
    echo "Something wen't wrong";
    exit();
  }


}







//API//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$headers = getallheaders();
if( isset( $headers ) && isset( $headers['action'] ) && $headers['action'] ){







  if( $headers['action'] == "get_cta_entries" ){

    $current_time = date('m/d/Y H:i:s');


    $response = [
      "success" => null,
      "errors" => [],
      "cta_entries" => []
    ];


    if( isset( $headers['auth_token'] ) && $headers['auth_token'] ){
      if( $headers['auth_token'] == "ee7f6a148ff6c66d7b07f2a8a25486878a79c93b201edec810eb40d2de91f7f54aac53ef5eeeef8a9e01796a2bc2eb97806187a371ad0de4af7028525e74789c" ){

      } else {

        $response['errors'][] = "Auth token is invalid or expired";

      }
    } else {
      $response['errors'][] = "Auth token is required";
    }





    if( isset( $response['errors'] ) && is_array( $response['errors'] ) && count( $response['errors'] ) > 0 ){
      
      exit( json_encode( $response ) );

    } else {
      $id = 0;

      $get_entries = mysqli_query($conn, "SELECT * FROM residential_real_estate_entry WHERE id >= '$id' ORDER BY id DESC LIMIT 100 ");
      while( $the_entry = mysqli_fetch_assoc( $get_entries ) ){
        $response['cta_entries'][] = $the_entry;
      }


      $response['success'] = true;
      exit( json_encode( $response ) );
    }






    $response['errors'][] = "Something wen't wrong";
    $response['success'] = false;

    exit( json_encode( $response ) );
  }











}/////// API END ///////////////////////////



















if( isset( $_POST['action'] ) && $_POST['action'] == "entry" ){

  $current_time = date('m/d/Y H:i:s');


  $errors = [];

  if( isset($_POST['firstname']) && $_POST['firstname'] ){
    $firstname = $_POST['firstname'];
  } else {
    $errors[] = "first name cannot be empty.";
  }

  if( isset($_POST['lastname']) && $_POST['lastname'] ){
    $lastname = $_POST['lastname'];
  } else {
    $errors[] = "last name cannot be empty.";
  }

  if( isset($_POST['email']) && $_POST['email'] ){
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid Email Format";
    }

  } else {
    $errors[] = "Email cannot be empty.";
  }

  if( isset($_POST['phone']) && $_POST['phone'] ){
    $phone = $_POST['phone'];

  } else {
    $errors[] = "Phone cannot be empty.";
  }


  if( isset($_POST['message']) && $_POST['message'] ){
    $message = $_POST['message'];

  } else {
    $errors[] = "Message cannot be empty.";
  }







  if( isset( $_POST['service'] ) && $_POST['service'] ){
    $service = $_POST['service'];
  } else {
    $errors[] = "Please select as service.";
  }

  // if( isset( $_POST['selling'] ) && $_POST['selling'] ){
  //   $selling = $_POST['selling'];
  // } else {
  //   $selling = "0";
  // }

  // if( isset( $_POST['buying'] ) && $_POST['buying'] ){
  //   $buying = $_POST['buying'];
  // } else {
  //   $buying = "0";
  // }

  // if( isset( $_POST['other'] ) && $_POST['other'] ){
  //   $other = $_POST['other'];
  // } else {
  //   $other = "0";
  // }





  if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
    //make html error for return
    $html = "<ul>";

    foreach( $errors as $error ){
      $html .= "<li>".$error."</li>";
    }

    $html .= "</ul>";

    echo $html;

  } else {




    $server_output = "n/a";


    //Send api to FUB
    $url = "https://api.followupboss.com/v1/events";
    $post_data = array(
      'person' => array(
        'firstName' => $firstname,
        'lastName' => $lastname,
        'emails' => array(
          "work" => $email
        ),
        'phones' => array(
          "mobile" => $phone
        ),
        'customCustominquiry' => $message,
        'customCustomservice' => $service
      )
    );


    $ch = curl_init($url);
    // return the response instead of sending it to stdout:
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // set the POST data, corresponding method and headers:
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    // send the request and get the response

    curl_setopt($ch, CURLOPT_USERPWD, "fka_16Rgc0NNIxgKvh7YK8uju7bDoD9PQi3aeJ:");  

    $server_output = curl_exec($ch);





    //insert data and return success

      mysqli_query($conn, "INSERT INTO residential_real_estate_entry 
      (
        firstname, 
        lastname,
        phone,
        email,
        message,


        service,
        posted_by_id,

        datetimeinserted,
        fub_api_response
      ) 
      VALUES 
      (
        '$firstname', 
        '$lastname', 
        '$phone', 
        '$email', 
        '$message', 

        '$service',
        '$user_id',

        '$current_time',
        '$server_output'
      ) 
      ");

      echo "success";


  }




  

  exit();
}







































function get_articles_feeds( $get_start=false, $get_end=false){
  global $conn;
  $articles = [];


  // if( isset( $get_start ) && $get_start ){
  //   $start = $get_start;
  // } else {
  //   $start = 0;
  // }


  // if( isset( $get_end ) && $get_end ){
  //   $end = $get_end;
  // } else {
  //   $end = 14;
  // }

  $get_articles = mysqli_query($conn, 
    "SELECT
        M.*,
        COUNT(J.id) AS comment_counts
    FROM
        articles AS M
    LEFT JOIN
        comments AS J ON M.id = J.article_id
    GROUP BY
        M.id -- Include all non-aggregated columns from the SELECT list in the GROUP BY clause
    ORDER BY
        M.datetimeinserted
        DESC;

    "
  );

  while( $the_articles = mysqli_fetch_assoc( $get_articles ) ){
    $articles[] = $the_articles;
  }

  return $articles;

}






function get_comments_by_article_id( $article_id ){
  global $conn;
  $comments = [];

  $get_comments = mysqli_query($conn, 
    "SELECT
        M.*,
        J.firstname AS firstname,
        J.lastname AS lastname
    FROM
        comments AS M
    LEFT JOIN
        users AS J ON M.user_id = J.id

    WHERE M.article_id = '$article_id'

    GROUP BY
        M.id -- Include all non-aggregated columns from the SELECT list in the GROUP BY clause

    ORDER BY
        M.datetimeinserted
        ASC;

    "
  );
  while( $the_comments = mysqli_fetch_assoc( $get_comments ) ){
    $comments[] = $the_comments;
  }
  return $comments;
}







function get_article_single( $article_id ){
  global $conn;

  // $get_article = mysqli_query($conn, "SELECT * FROM articles WHERE id = '$article_id' ");

  $get_article = mysqli_query($conn, 

    "SELECT
        M.*,
        COUNT(J.id) AS comment_counts
    FROM
        articles AS M
    LEFT JOIN
        comments AS J ON M.id = J.article_id

    WHERE M.id = '$article_id'

    GROUP BY
        M.id -- Include all non-aggregated columns from the SELECT list in the GROUP BY clause
    ORDER BY
        M.datetimeinserted
        DESC;

    "
  );
  $the_article = mysqli_fetch_assoc( $get_article );
  return $the_article;
}



function get_userdata_by_id( $id ){
  global $conn;

  $get_user = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
  $userdata = mysqli_fetch_assoc($get_user);

  return $userdata;
}














if( isset( $_POST['action'] ) && $_POST['action'] == "article-post" ){

  $current_time = date('m/d/Y H:i:s');
  global $conn;
  global $user_id;

  $errors = [];


  

  if( isset($_POST['article_title']) && $_POST['article_title'] ){
    $article_title = ucwords( $_POST['article_title'] );
  } else {
    $errors[] = "Article title cannot be empty.";
  }

  if( isset($_POST['article_description']) && $_POST['article_description'] ){
    $article_description = $_POST['article_description'];
  } else {
    $errors[] = "Article description cannot be empty.";
  }

  if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
    //make html error for return
    $html = "<ul>";

    foreach( $errors as $error ){
      $html .= "<li>".$error."</li>";
    }

    $html .= "</ul>";

    echo $html;
    exit();
  } else {

    if(isset($_FILES['article_img'])){

      $saved_imgs = [];

      // foreach($_FILES['article_img'] as $the_img_obj){
      foreach($_FILES['article_img']['tmp_name'] as $key => $tmp_name){


          $file_name =  $_FILES['article_img']['name'][$key];


          if( isset( $file_name ) && $file_name ){
          } else {
            continue;
          }

          

          $file_size = $_FILES['article_img']['size'][$key];
          $file_tmp =$_FILES['article_img']['tmp_name'][$key];
          $file_type=$_FILES['article_img']['type'][$key];
          $getting_extn = explode('.',$_FILES['article_img']['name'][$key]);



          $file_ext=strtolower(end($getting_extn));
          $article_pic = md5(date("YmDHis"))."x".rand(0,100).".".$file_ext;
          $saved_imgs[] = $article_pic;

          $extensions= array("png","jpg","jpeg");

          if(in_array($file_ext,$extensions) == true){
            if($file_size > 2097152){
              $errors[]= '"'.$file_name.'" Article image size must be lower than 2 MB.';
            } else {
              move_uploaded_file($file_tmp,"assets/article_imgs/".$article_pic);
              // $img_url = "/assets/article_imgs/".$article_pic;


              

            }

          } else {
            $errors[] = '"'.$file_name.'" is invalid, We only allow Png, Jpeg, Jpg file types to be uploaded.';
          }
      }

      if( isset( $saved_imgs ) && is_array( $saved_imgs ) && count( $saved_imgs ) > 0 ){

      } else {
        $errors[] = "Please upload at least 1 article image.";
      }


    }


    if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
      //make html error for return
      $html = "<ul>";

      foreach( $errors as $error ){
        $html .= "<li>".$error."</li>";
      }

      $html .= "</ul>";

      echo $html;
      exit();
    } else {

      $json_imgs = json_encode( $saved_imgs );

      $sql = "INSERT INTO articles 
      (
        title, 
        description,
        img_url,
        posted_by_id,
        datetimeinserted
      ) 
      VALUES 
      (
        '$article_title', 
        '$article_description', 
        '$json_imgs', 
        '$user_id', 
        '$current_time'
      ) 
      ";


    
      if ($conn->query($sql) === TRUE) {
        echo "success";
        exit();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }


    }







      exit();



  }












  if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
    //make html error for return
    $html = "<ul>";

    foreach( $errors as $error ){
      $html .= "<li>".$error."</li>";
    }

    $html .= "</ul>";

    echo $html;
    exit();
  }


  exit();
}



















if( isset( $_POST['action'] ) && $_POST['action'] == "comment" ){



  $current_time = date('m/d/Y H:i:s');


  $errors = [];



  if( isset($user_id) && $user_id ){
  } else {
    $errors[] = "You're not logged in, please refresh the page";
  }


  if( isset($_POST['article_id']) && $_POST['article_id'] ){
    $article_id = $_POST['article_id'];
  } else {
    $errors[] = "There has been error loading page data, please refresh the page";
  }


  if( isset($_POST['commentmsg']) && $_POST['commentmsg'] ){
    $commentmsg = $_POST['commentmsg'];

  } else {
    $errors[] = "Comment cannot be empty.";
  }

  if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
    //make html error for return
    $html = "<ul>";

    foreach( $errors as $error ){
      $html .= "<li>".$error."</li>";
    }

    $html .= "</ul>";

    echo $html;
    exit();

  } else {
    //insert data and return success

       $sql = "INSERT INTO comments 
      (
        article_id, 
        user_id,
        comment,
        datetimeinserted
      ) 
      VALUES 
      (
        '$article_id', 
        '$user_id', 
        '$commentmsg', 
        '$current_time'
      ) 
      ";
        
        if ($conn->query($sql) === TRUE) {
          echo "success";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }



  }




  

  exit();
}


?>