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
<div class="search-body">
<div class="container">
    <h1>Search Flickr for Inspiring Recent Photos</h1>
    <form action="inspiration.php" method="post">
        <input id="tag" type="text" name="tag" placeholder="Tags" autocomplete="off">
        <input id="views" type="text" name="viewcount" placeholder="Views" autocomplete="off">
        <input id="submit" type="submit" value="Inspire Me">
    </form>
    <p class="attr">Image by <a href="https://www.flickr.com/photos/onepointfour/6315126418/">Dustin Gaffke</a></p>
    <div class="icons"><a href="https://github.com/paddyw2/flickr_inspiration"><i class="fa fa-github"></i></a></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="functions.js"></script>  
</body>
</html>