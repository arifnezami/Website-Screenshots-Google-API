<?php

//index.php

header ('Content-Type: image/png');
$screen_shot_image = '';


 $url = $_GET["url"];
 
 $screen_shot_json_data = file_get_contents("https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=$url&screenshot=true");
 $screen_shot_result = json_decode($screen_shot_json_data, true);
 
    
 $screen_shot = $screen_shot_result['lighthouseResult']['audits']['final-screenshot']['details']['data'];
 $screen_shot  = str_replace("data:image/jpeg;base64,","",$screen_shot);

 echo base64_decode($screen_shot);
 
 

?>