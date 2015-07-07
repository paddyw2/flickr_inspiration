<?php include('flickr.php') ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Flickr Inspiration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Search recent Flickr photos by page views and tags.">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="main-body" style="background-image:url('<?php echo($base_url); ?>');">
    <div class="menu">
    <a href="<?php echo($home_url); ?>"><p><i class="fa fa-arrow-left"></i>&nbsp;Back To Search</p></a>
    </div>
      <div class="error-message">
        <?php echo($error_message); ?>
    </div>
</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="functions.js"></script>  
</body>
</html>