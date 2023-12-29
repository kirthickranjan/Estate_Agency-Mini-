<?php  
 $connect = mysqli_connect("localhost", "root", "", "images");  
 if(isset($_POST["insert"]))  
 {   
     $land_name =  $_REQUEST['landname'];
     $lcost = $_REQUEST['landcost'];
     $landsize =  $_REQUEST['landsize'];
     $owner = $_REQUEST['landowner'];
     $landarea = $_REQUEST['landarea'];
     $ownernum = $_REQUEST['ownernum'];
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     $query = "INSERT INTO tbl_images VALUES (0,'$file','$land_name',$lcost,'$owner',$landsize,'$landarea','$ownernum')";  
     if(mysqli_query($connect, $query))  
     {  
          echo '<script>alert("Image Inserted into Database")</script>';  
     }  
 }  
 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\styles1.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link href="img\admin.png" rel="icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    
  <title>Registration Form</title>
</head>
<body>
    <!-- Container Start -->
    <div id="container">
      <!-- Form Wrap Start -->
      <div class="form-wrap">
        <img class="rounded-circle mt-5" width="150px" style="margin-left: 95px " src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
        <h1 class="text">Property form</h1>
        
        <!-- Form Start -->
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="first-name">Land Name</label>
            <input type="text" name="landname" id="landname">
          </div>
          <div class="form-group">
            <label for="last-name">Landcost</label>
            <input type="text" name="landcost" id="landcost">
          </div>
          <div class="form-group">
            <label for="last-name">Landsize</label>
            <input type="text" name="landsize" id="landsize">
          </div>
          <div class="form-group">
            <label for="last-name">Landowner</label>
            <input type="text" name="landowner" id="landowner">
          </div>
          <div class="form-group">
            <label for="last-name">Landarea</label>
            <input type="text" name="landarea" id="landarea">
          </div>
          <div class="form-group">
            <label for="last-name">Owner number</label>
            <input type="text" name="ownernum" id="ownernum">
          </div>
          <div class="form-group">
            <label for="email">Image</label>
            <input type="file" name="image" id="image" />
          </div>
         
          
          <button type="submit" name="insert" id="insert" value="Insert">insert</button>
         
        </form>
        <!-- Form Close -->
      </div>
      <!-- Form Wrap Close -->
      <footer>
        <p>Already Have an Account? <a href="#">Login Here</a></p>
      </footer>
    </div>
    <!-- Container Start -->
</body>

</html>


<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  