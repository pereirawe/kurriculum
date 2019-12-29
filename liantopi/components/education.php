<div class="container-fluid pb-5" id="education">
        <div class="row">
            <div id="title" class="col-md-12">
            <h2 class="pt-5 pb-2"><i class="fas fa-archive"></i> <?= $appContent->appEducationTitle;?></h2>
            </div>
<?php
    $grades = json_decode(file_get_contents('./json/'.$jsonLang.'education.json'));
    krsort($grades);
    foreach ($grades as $grade) {
        echo '<div class="col-md-12  p-3 " data-aos="fade-up">
            <div class="bgLight p-3">
                <h5>'. $grade->title .'</h5>
                <small>'. $grade->academy .'
                <br>
                <b>'. $grade->location .'</b></small>
                <p class="textPrimary">'. $grade->period .'</p>
            </div>
        </div>';
    }
?>
        </div>
    </div>