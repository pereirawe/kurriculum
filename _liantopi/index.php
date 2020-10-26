<?php
    if (isset($_GET['lang'])) {
        $jsonLang = $_GET['lang']."/";
    } else {
        $jsonLang ="pt/";
    }
    $appContent = json_decode(file_get_contents('./json/'.$jsonLang.'content.json'));
?> 
<?php include_once('./components/header.php');?>
<?php include_once('./components/top.php');?>
<?php include_once('./components/profile.php');?>
<?php include_once('./components/education.php');?>
<?php include_once('./components/experience.php');?>
<?php include_once('./components/complementary.php');?>
<?php // include_once('./components/references.php');?>
<?php include_once('./components/footer.php');?>