<?php

$tag = $_POST["tag"];
$view_count = $_POST["viewcount"];
$tag1 = str_replace(',','%2C',$tag);
$tag2 = str_replace(' ','+',$tag1);
$hostname = getenv('HTTP_HOST');
$home_url = "http://".$hostname;


$api_key = "*************************";

$url = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=".$api_key."&tags=".$tag2."&tag_mode=all&extras=views&per_page=200&page=1&format=json&nojsoncallback=1";

$string = file_get_contents($url);
    
$json_decoded = json_decode($string,true);

$total = $json_decoded['photos']['total'];

if ($total != 0) {

$secret = array();
$id = array();
$server = array();
$farm = array();
$owner = array();
$int = 0;

while($int <= 199) {
    
   

    $views = $json_decoded['photos']['photo'][$int]['views'];
    $output1 = $json_decoded['photos']['photo'][$int]['secret'];
    $output2 = $json_decoded['photos']['photo'][$int]['id'];
    $output3 = $json_decoded['photos']['photo'][$int]['server'];
    $output4 = $json_decoded['photos']['photo'][$int]['farm'];
    $output5 = $json_decoded['photos']['photo'][$int]['owner'];
    
    if ($views > $view_count) {
        
    array_push($secret, $output1);
    array_push($id, $output2);
    array_push($server, $output3);
    array_push($farm, $output4);
    array_push($owner, $output5);
        
    }
        
    $int++;
 
}

if (count($id) > 0) {    

$array_length = count($id);
$array_length = $array_length - 1;
$random_int = rand(0, $array_length);

$rand_secret = $secret[$random_int];
$rand_id = $id[$random_int];
$rand_server = $server[$random_int];
$rand_farm = $farm[$random_int];
$rand_owner = $owner[$random_int];

// if everything has worked, generate the random image url
$link_url = "https://www.flickr.com/photos/".$rand_owner."/".$rand_id."/";   
$base_url = "https://farm".$rand_farm.".staticflickr.com/".$rand_server."/".$rand_id."_".$rand_secret."_b.jpg";  
$error_message = "<a href='$link_url'><div class='button extra-class'>View Photo</div></a></h3>";        

} else {
    
// if images are returned but not any with the right amount of views, generate 'reduce views' error message
        
$base_url = "https://ununsplash.imgix.net/uploads/14128324071271c853818/3765c625?dpr=1.5&fit=crop&fm=jpg&h=700&q=75&w=1075";
$error_message = "<h3>No images found! Try lowering the number of views.<br><a href='$home_url'><div class='button extra-class' style='margin-top: 10px !important;'>Go Back</div></a></h3>";   
}

                      

} else {
    
// if no images are returned, generate 'try different search params' error message
    
$base_url = "https://ununsplash.imgix.net/uploads/14128324071271c853818/3765c625?dpr=1.5&fit=crop&fm=jpg&h=700&q=75&w=1075";
$error_message = "<h3>No images found! Try searching for different tags.<br><a href='$home_url'><div class='button extra-class' style='margin-top: 10px !important;'>Go Back</div></a></h3>";     
}

?>