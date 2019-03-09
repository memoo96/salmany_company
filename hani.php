<!DOCTYPE html>
<html>
    <head>
    <title>شركه السالماني للفورفورجيه</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      form{
        direction: rtl;
        padding: 40px;
        margin: 10% auto;
        text-align: center;
        }
      /* .custom-file-input {
        display: inline-block;
        position: relative;
        color: #fff;
        opacity:1;
        width: 20%;
      }
      .custom-file-input input {
        visibility: hidden;
        width: 100px;
      }
      .custom-file-input:before {
        content: 'اختر الصور للتحميل';
        display: block;
        background: #d64916;
        border: 2px solid #d64916;
        border-radius: 10px;
        padding: 5px 0px;
        outline: none;
        white-space: nowrap;
        cursor: pointer;
        text-align: center;
        font-size: 15px;
        font-weight: 600;
        position: absolute;
        left: 0;
        right: 0;
        transition: all 0.5s ease-in-out;
      }
      .custom-file-input:hover:before {
        border-color: #d64916;
        background: #fff;
        color:#d64916;
      } */

      .submitinput {
        width: 20%;
        border: 2px solid #069609;
        background-color: #069609;
        border-radius: 10px;
        padding: 5px 0px;
        outline: none;
        white-space: nowrap;
        cursor: pointer;
        text-align: center;
        font-size: 15px;
        color: #fff;
        font-weight: 600;
        margin-top:20px;
        transition: all 0.5s ease-in-out;
        }

     
    </style>
    


    </head>
    <body>
		<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $total = count($_FILES['upload']['name']);
          $i=0;
          // Loop through each file
          while($i<$total) {
            //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
                
            //Make sure we have a filepath
            if ($tmpFilePath != "") {
              //Setup our new file path
              $newFilePath = "images/imgs/" . $_FILES['upload']['name'][$i];

              //Upload the file into the temp dir
              if(move_uploaded_file($tmpFilePath, $newFilePath)) 
              {
                
              }
            }
            $i++;
          }
		  header('Location: gallery.php');
        }
      ?>
        <form action="?" method="post" enctype="multipart/form-data">
            <label  class="custom-file-input">
                <input type="file" name="upload[]" multiple>
            </label>
            <input class="submitinput" type="submit" value="حمل الأن"  name="upload_file">
        </form>

    </body>
</html> 