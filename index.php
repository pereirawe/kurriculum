<?php
    $jsonLang ="pt/";
    if (isset($_GET['lang'])) {
        $jsonLang = $_GET['lang']."/";
    }
    $appContent = json_decode(file_get_contents('./json/'.$jsonLang.'content.json'));
?> 
<?php include_once('./partials/header.php');?>
<?php include_once('./partials/top.php');?>
<?php include_once('./partials/profile.php');?>
<?php include_once('./partials/skills.php');?>
<?php include_once('./partials/education.php');?>
<?php include_once('./partials/experience.php');?>
<?php include_once('./partials/complementary.php');?>
<?php // include_once('./partials/references.php');?>
<?php include_once('./partials/footer.php');?>