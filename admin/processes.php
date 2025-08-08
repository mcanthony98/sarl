<?php 
session_start();
require "../includes/connect.php";
//include "../includes/mailer.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i:s");
$filedate = date("Y_m_d_H_i_s");

if(isset($_POST["login"])){
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $pw = mysqli_real_escape_string($conn, $_POST["password"]);

    if($email == " info@sarl.co.ke" && $pw == "SARL@2024"){
        $_SESSION['chid'] = "1";
        $_SESSION['chname'] = "SARL Admin";
        header("location:  dashboard.php");
    }else{
        $_SESSION['error'] = "Invalid Credentials!";
        header("location:  index.php");
    }
    exit;
    
}
elseif(isset($_POST["new-service"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
			

    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


    $insert = "INSERT INTO service (name, slag, short_desc, long_desc, image, date_created) VALUES ('$name',  '$slag', '$sdesc', '$ldesc', '$new', '$date')";
    
    if ($conn->query($insert)===TRUE){
        $pk = $conn->insert_id;
          
          $_SESSION["success"] = "New Service Added Sucessfully.";
          header("location: edit-service.php?id=$pk");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location:  add-service.php");
      }
    }

    
elseif(isset($_POST["edit-service"])){
    $id = mysqli_real_escape_string($conn, $_POST["sid"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);

    


    $insert = "UPDATE `service` SET `name`='$name',`slag`='$slag',`short_desc`='$sdesc' ,`long_desc`='$ldesc', `status`='$status' WHERE service_id='$id'";
    
    if ($conn->query($insert)===TRUE){
        
          
          $_SESSION["success"] = "Service Updated Sucessfully.";
          header("location: edit-service.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-service.php?id=$id");
      }
    }
    
elseif(isset($_POST["edit-srv-img"])){
        $id = mysqli_real_escape_string($conn, $_POST["edit-srv-img"]);

        $image = $_FILES['photos']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
                

        $file_name = $_FILES["photos"]["name"];
        $_FILES["photos"]["type"];
        $tmp_file = $_FILES["photos"]["tmp_name"];
        
        $destination = "../uploads/" . $file_name;
        
        move_uploaded_file($tmp_file, $destination);
        $new = $filedate.$file_name;
        $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


        $insert = "UPDATE `service` SET `image`='$new' WHERE service_id='$id'";
        
        if ($conn->query($insert)===TRUE){
              
              $_SESSION["success"] = "Service Updated Sucessfully.";
              header("location: edit-service.php?id=$id");
              
          }else{
              $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
              header("location: edit-service.php?id=$id");
          }
}

elseif(isset($_POST["new-job"])){
    $job_title = mysqli_real_escape_string($conn, $_POST["job_title"]);
    $job_desc = mysqli_real_escape_string($conn, $_POST["job_description"]);
    $location = mysqli_real_escape_string($conn, $_POST["location"]);
    $deadline = mysqli_real_escape_string($conn, $_POST["deadline"]);

    $insert = "INSERT INTO jobs (job_title, job_description, job_status, location, deadline) VALUES ('$job_title', '$job_desc', 1, '$location', '$deadline')";
    
    if ($conn->query($insert) === TRUE) {
        $pk = $conn->insert_id;
        $_SESSION["success"] = "New Job Added Successfully.";
        header("location: jobs.php?id=$pk");
    } else {
        $_SESSION["error"] = "Error Occurred. Please Try Again. " . $conn->error;
        header("location: add-job.php");
    }
}

elseif (isset($_POST["edit-job"])) {
    $id = mysqli_real_escape_string($conn, $_POST["job_id"]);
    $job_title = mysqli_real_escape_string($conn, $_POST["job_title"]);
    $location = mysqli_real_escape_string($conn, $_POST["location"]);
    $deadline = mysqli_real_escape_string($conn, $_POST["deadline"]);
    $job_desc = mysqli_real_escape_string($conn, $_POST["job_description"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);

    $update = "UPDATE `jobs` SET `job_title`='$job_title', `location`='$location', `deadline`='$deadline', `job_description`='$job_desc', `job_status`='$status' WHERE job_id='$id'";
    
    if ($conn->query($update) === TRUE) {
        $_SESSION["success"] = "Job Advert Updated Successfully.";
        header("location: jobs.php?id=$id");
    } else {
        $_SESSION["error"] = "Error Occurred. Please Try Again. " . $conn->error;
        header("location: edit-job.php?id=$id");
    }
}


elseif (isset($_GET['delete-event'])) {
    $ev_id = mysqli_real_escape_string($conn, $_GET['delete-event']);

    $delete = "DELETE FROM event WHERE event_id = '$ev_id'";
    
    if ($conn->query($delete) === TRUE) {
        $_SESSION["success"] = "Project deleted successfully.";
        header("Location: projects.php");
    } else {
        $_SESSION["error"] = "Error occurred. Please try again. " . $conn->error;
        header("Location: projects.php");
    }
}

elseif (isset($_GET['delete-job'])) {
    $job_id = mysqli_real_escape_string($conn, $_GET['delete-job']);

    $delete = "DELETE FROM jobs WHERE job_id = '$job_id'";
    
    if ($conn->query($delete) === TRUE) {
        $_SESSION["success"] = "Job deleted successfully.";
        header("Location: jobs.php");
    } else {
        $_SESSION["error"] = "Error occurred. Please try again. " . $conn->error;
        header("Location: jobs.php");
    }
}

elseif(isset($_POST["new-prof"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $name = ucwords($name);
   


    $insert = "INSERT INTO profile (name, description, date_created) VALUES ('$name', '$desc', '$date')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Testimonial Added Sucessfully.";
        header("location: profile.php");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: new-profile.php");
    }
}

elseif(isset($_POST["edit-prof"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $id = mysqli_real_escape_string($conn, $_POST["sid"]);
    $name = ucwords($name);
   


    $insert = "UPDATE `profile` SET `name`='$name',`description`='$desc', `status`='$status' WHERE profile_id='$id'";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Testimonial Updated Sucessfully.";
        header("location: edit-profile.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-profile.php?id=$id");
    }
}

 
elseif(isset($_POST["new-event"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $category = $_POST['category'];
    $year = $_POST['year'];
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);

    $insert = "INSERT INTO `event`(`title`, `short_desc`, `description`, `category`, `year`, `cover_image`, `event_status`, `date_added`, `date_modified`) VALUES ('$name', '$sdesc', '$desc', '$category', '$year', '$new','1','$date','$date')";
    
    if ($conn->query($insert)===TRUE){
        $pk = $conn->insert_id;
          
          $_SESSION["success"] = "New Project Added Sucessfully.";
          header("location: edit-event.php?id=$pk");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location:  new-event.php");
      }
}
elseif(isset($_POST["edit-event"])){
    $id = mysqli_real_escape_string($conn, $_POST["rid"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $category = $_POST['category'];
    $year = $_POST['year'];
    
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    
    $insert = "UPDATE `event` SET `title`='$name',`short_desc`='$sdesc',`description`='$desc', `category`='$category', `year`='$year',  `location`='$loc',`services`='$serv',`slots`='$slots',`start_datetime`='$st',`end_datetime`='$et', `event_status`='$status', `date_modified`='$date' WHERE event_id='$id'";
    
    if ($conn->query($insert)===TRUE){
        $_SESSION["success"] = "Project Updated Sucessfully.";
        header("location: edit-event.php?id=$id");
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-event.php?id=$id");
    }
}
    
elseif(isset($_POST["edit-event-img"])){
        $id = mysqli_real_escape_string($conn, $_POST["edit-event-img"]);

        $image = $_FILES['photos']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
                

        $file_name = $_FILES["photos"]["name"];
        $_FILES["photos"]["type"];
        $tmp_file = $_FILES["photos"]["tmp_name"];
        
        $destination = "../uploads/" . $file_name;
        
        move_uploaded_file($tmp_file, $destination);
        $new = $filedate.$file_name;
        $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


        $insert = "UPDATE `event` SET `cover_image`='$new' WHERE event_id='$id'";
        
        if ($conn->query($insert)===TRUE){
              
              $_SESSION["success"] = "Project Image Updated Sucessfully.";
              header("location: edit-event.php?id=$id#img");
              
          }else{
              $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
              header("location: edit-event.php?id=$id#img");
          }
}
elseif(isset($_POST["edit-event-doc"])){
    $id = mysqli_real_escape_string($conn, $_POST["edit-event-doc"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
            

    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


    $insert = "UPDATE `event` SET `report`='$new' WHERE event_id='$id'";
    
    if ($conn->query($insert)===TRUE){
          
          $_SESSION["success"] = "Project Document Updated Sucessfully.";
          header("location: edit-event.php?id=$id#doc");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-event.php?id=$id#doc");
      }
}

elseif(isset($_POST["add-gallery"])){
    $id = mysqli_real_escape_string($conn, $_POST["add-gallery"]);

        // Iterate through each uploaded file
    foreach ($_FILES['photos']['tmp_name'] as $key => $tmp_name) {
        // Skip if no file was uploaded
        if (empty($_FILES['photos']['name'][$key])) {
            continue;
        }
        
        $image = $_FILES['photos']['tmp_name'][$key];
        $imgContent = addslashes(file_get_contents($image));
        
                

        $file_name = $_FILES["photos"]["name"][$key];
        $_FILES["photos"]["type"][$key];
        $tmp_file = $_FILES["photos"]["tmp_name"][$key];
        
        $destination = "../uploads/" . $file_name;
        
        move_uploaded_file($tmp_file, $destination);
        $new = $filedate.$file_name;
        $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);


        $insert = "INSERT INTO `event_gallery`(`event_id`, `image`, `date_created`) VALUES ('$id','$new','$date')";
        $conn->query($insert);

    }
          
          $_SESSION["success"] = "Image Added Sucessfully.";
          header("location: edit-event.php?id=$id#gallery");
          
     
}

elseif(isset($_GET["del-gallery"])){
    $id = mysqli_real_escape_string($conn, $_GET["eid"]);
    $act = mysqli_real_escape_string($conn, $_GET["del-gallery"]);

    $qry = "DELETE FROM `event_gallery` WHERE event_gallery_id='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Image Deleted Sucessfully.";
        header("location: edit-event.php?id=$id#gallery");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-event.php?id=$id#gallery");
    }
}


elseif(isset($_POST["add-pkg-act"])){
        $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
        $act = mysqli_real_escape_string($conn, $_POST["name"]);
        $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
        $price = mysqli_real_escape_string($conn, $_POST["price"]);
       


        $insert = "INSERT INTO package_exp (package_id, experience_name, description, price) VALUES ('$id', '$act', '$desc', '$price')";
        
        if ($conn->query($insert)===TRUE){
              
            $_SESSION["success"] = "Package Updated Sucessfully.";
            header("location: edit-package.php?id=$id");
            
        }else{
            $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
            header("location: edit-package.php?id=$id");
        }
}


elseif(isset($_POST["add-pkg-acc"])){
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
    $act = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $sprice = mysqli_real_escape_string($conn, $_POST["sprice"]);
    $dprice = mysqli_real_escape_string($conn, $_POST["dprice"]);
   


    $insert = "INSERT INTO package_acc (package_id, accommodation, acc_desc, double_p, single) VALUES ('$id', '$act', '$desc', '$sprice', '$dprice')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Package Updated Sucessfully.";
        header("location: edit-package.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-package.php?id=$id");
    }
}
elseif(isset($_GET["del_pkg_act"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_pkg_act"]);

    $qry = "DELETE FROM package_exp WHERE package_exp_id='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Package Item Deleted Sucessfully.";
        header("location: edit-package.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-package.php?id=$id");
    }
}

elseif(isset($_GET["del_pkg_acc"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_pkg_acc"]);

    $qry = "DELETE FROM package_acc WHERE package_acc_id ='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Package Item Deleted Sucessfully.";
        header("location: edit-package.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-package.php?id=$id");
    }
}


elseif(isset($_POST["new-dest"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
   


    $insert = "INSERT INTO destination (destination_name, destination_desc, date_created) VALUES ('$name', '$desc', '$date')";
    
    if ($conn->query($insert)===TRUE){
          
        $id = $conn->insert_id;
        $_SESSION["success"] = "Destination Added Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}

elseif(isset($_POST["edit-dest"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);

    $qry = "UPDATE destination SET destination_name='$name', destination_desc='$desc', destination_status='$status' WHERE destination_id='$id'";

    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Updated Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}
elseif(isset($_POST["add-dest-act"])){
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
    $act = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
   


    $insert = "INSERT INTO destination_activities (destination_id, act_name, act_desc, act_price) VALUES ('$id', '$act', '$desc', '$price')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Destination Updated Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}

elseif(isset($_POST["add-dest-acc"])){
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
    $act = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $sprice = mysqli_real_escape_string($conn, $_POST["sprice"]);
    $dprice = mysqli_real_escape_string($conn, $_POST["dprice"]);
   


    $insert = "INSERT INTO destination_accommodation (destination_id, acc_name, acc_desc, acc_single, acc_double) VALUES ('$id', '$act', '$desc', '$sprice', '$dprice')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Destination Updated Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}

elseif(isset($_POST["add-trans-act"])){
    $id = mysqli_real_escape_string($conn, $_POST["pkid"]);
    $act = mysqli_real_escape_string($conn, $_POST["name"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
   


    $insert = "INSERT INTO destination_transport (destination_id, trans_name, trans_desc, trans_price) VALUES ('$id', '$act', '$desc', '$price')";
    
    if ($conn->query($insert)===TRUE){
          
        $_SESSION["success"] = "Destination Updated Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}


elseif(isset($_GET["del_dest_trans"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_dest_trans"]);

    $qry = "DELETE FROM destination_transport WHERE dest_trans_id ='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Item Deleted Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}


elseif(isset($_GET["del_dest_acc"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_dest_acc"]);

    $qry = "DELETE FROM destination_accommodation WHERE dest_acc_id ='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Item Deleted Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}


elseif(isset($_GET["del_dest_act"])){
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $act = mysqli_real_escape_string($conn, $_GET["del_dest_act"]);

    $qry = "DELETE FROM destination_activities WHERE dest_act_id ='$act'";
    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Item Deleted Sucessfully.";
        header("location: edit-destination.php?id=$id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: edit-destination.php?id=$id");
    }
}

// Add new Blog
elseif(isset($_POST["add-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $cat_color = mysqli_real_escape_string($conn, $_POST["cat_color"]);
    
    $slag = str_replace(' ', '-', $tit);
    $tit = ucwords($tit);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);
		
    
    $cat_insert = "INSERT INTO blog(blog_title, blog_slag, blog_description, blog_content, blog_image, blog_category, blog_category_color, date_created) VALUES ('$tit',  '$slag', '$desc', '$content', '$new', '$cat', '$cat_color', '$date')";
    
    if ($conn->query($cat_insert)===TRUE){
          
          $last_id = $conn->insert_id;
          $_SESSION["success"] = "New Blog Created Sucessfully.";
          header('location: edit-blog.php?id='.$last_id);
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header('location: new-insight.php');
      }
    
}
elseif(isset($_POST["edit-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $cat_color = mysqli_real_escape_string($conn, $_POST["cat_color"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $id = mysqli_real_escape_string($conn, $_POST["blog_id"]);
    $slag = str_replace(' ', '-', $tit);
    $slag = strtolower($slag);
    $tit = ucwords($tit);

    
    $updqry = "UPDATE blog SET blog_title='$tit', blog_slag='$slag', blog_description='$desc', blog_content='$content', blog_category='$cat', blog_category_color='$cat_color', blog_status='$status' WHERE blog_id  = '$id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Blog Updated Sucessfully.";
          header("location: edit-blog.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-blog.php?id=$id");
      }
}elseif(isset($_POST["edit-blog-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-blog-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../uploads/'.$file_name , '../uploads/'.$new);
    
    $updqry = "UPDATE blog SET blog_image ='$new'  WHERE blog_id  = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Blog Image Updated Sucessfully.";
          header("location: edit-blog.php?id=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-blog.php?id=$cat_id");
      }


}

elseif(isset($_POST["seo-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE blog SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE blog_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: edit-blog.php?id=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: edit-blog.php?id=$id");
      }
    
}


elseif(isset($_GET['logout'])){
    session_destroy();

    session_start();
    $_SESSION['success'] = "Logged Out Successfully!";
    header('location: index.php');
}
  ?>