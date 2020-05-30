<!DOCTYPE html>
<html>
<head>
    <title>Mote</title>
    
    <!--
        TODO:
            HANDLE SQL INJECTIONS!!
            
            Navigation sidebar menu in header.html.
            Get rid of categories section.
            Put search into sidebar.
            
            Use templates (twig?) for:
                accordion item
            
            index.php:
                Add recent notes on index.php? (okay but when we have templating to reduce duplication)
            
            notes.php:
                Button to expand/collapse all.
                Order by dates.
    -->
    
    <meta charset="UTF-8">
    <meta name="description" content="Simple public note database.">
    <meta name="keywords" content="Notes, Database">
    <meta name="author" content="Cygnut">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/content/moteIcon-64x64-Transparent.png" />
    
    <script src="vendor/jquery-3.1.1.min.js"></script>
    
    <link rel="stylesheet" href="vendor/w3.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/accordion.css">
    
<script>
</script>
</head>
<body>
<?php include(realpath(dirname(__FILE__) . "./header.html")); ?>

<article>

    <h3>Welcome to Mote :)</h3>

</article>

<?php include(realpath(dirname(__FILE__) . "./footer.html")); ?>
</body>
</html>