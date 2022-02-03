<?php


$screen_shot_image = '';

if(isset($_POST["screen_shot"]))
{
         $url = $_POST["url"];
         $screen_shot_json_data = file_get_contents("https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=$url&screenshot=true");
         $screen_shot_result = json_decode($screen_shot_json_data, true);
         
        
            
            
         $screen_shot = $screen_shot_result['lighthouseResult']['audits']['final-screenshot']['details']['data'];
         
         $screen_shot_image = "<img src=\"".$screen_shot."\" class='img-responsive img-thumbnail'/>";
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>How to capture website screen shot from url in php</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      

 </head>
 <body>
     <br>
  <div class="container">
   <h2 align="center">Unlimited Screenshots via Google API</h2>
   
    <br>
    
     <br>
     
      <br>
      
       <br>
   <form method="post">

     <div class="row">
         <div class="col-sm-4">
          <label>Enter Your URL</label>
          </div>
    <div class="col-sm-4">
        
     <input type="url" name="url" class="form-control input-lg" required autocomplete="off" />
     </div>
     <div class="col-sm-4">
     <input type="submit" name="screen_shot" value="Take Screenshot" class="btn btn-success" />
     </div>
    
    </div>
    <br />
    <br />
    
   </form>
   <br />
   <?php
   
   echo $screen_shot_image;
   
   ?>
  </div>
 
 </body>
</html>