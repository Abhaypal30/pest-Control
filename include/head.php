<?php
include_once('admin/dbOperation/crude.php');
$crud = new crud();


$result = $crud->selectallquery("SELECT * FROM meta_tags ORDER BY id DESC");
?>

<!DOCTYPE html>


<html lang="zxx">

<head>
    <meta charset="utf-8" />
  
    <?php
    
    if (mysqli_num_rows($result) > 0) {
        // Loop through the fetched meta tags
        while ($item = mysqli_fetch_array($result)) {
            // Extract meta tag values
            $meta_title = $item['meta_title'];
            $meta_description = $item['meta_description'];
            $meta_author = $item['meta_author'];
            $meta_viewport = $item['meta_viewport'];
            $meta_keywords = $item['meta_keywords'];
            $meta_charset = $item['meta_charset'];
            // Output meta tags
            echo '<title>' . $meta_title . '</title>';
            echo '<meta charset="UTF-8">';
            echo '<meta name="viewport" content="' . $meta_viewport . '">';
            echo '<meta name="description" content="' . $meta_description . '">';
            echo '<meta name="keywords" content="' . $meta_keywords . '">';
            echo '<meta name="author" content="' . $meta_author . '">';
            echo '<meta charset="' . $meta_charset . '">';
            // Other meta tags and link tags
        }
    } else {
        // If no meta tags are found, provide default values or handle the case as needed
        $default_meta_title = "Default Title";
        $default_meta_description = "Default Description";
        $default_meta_author = "Default Author";
        $default_meta_viewport = "width=device-width, initial-scale=1.0";
        $default_meta_keywords = "default, keywords";
        $default_meta_charset = "default, charset";
    
        // Output default meta tags
        echo '<title>' . $default_meta_title . '</title>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="' . $default_meta_viewport . '">';
        echo '<meta name="description" content="' . $default_meta_description . '">';
        echo '<meta name="keywords" content="' . $default_meta_keywords . '">';
        echo '<meta name="author" content="' . $default_meta_author . '">';
        echo '<meta  charset="' . $default_meta_charset . '">';
        // Other meta tags and link tags
    }
    
    ?>
    <meta name="MobileOptimized" content="320" />
  
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="venobox/css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/layers.css" />
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/navigation.css" />
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/settings.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
    <!-- favicon link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="shortcut icon" type="image/icon" href="images/civic_s_logo.jpg" />
<style>
   
</style>

</head>  