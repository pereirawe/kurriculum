    <div class="container-fluid pb-5" id="experience">
        <div class="row h-100">
            <div id="title" class="col-md-12">
                <h2 class="pt-5 pb-2"><i class="fas fa-archive"></i> <?= $appContent->appExperienceTitle;?></h2>
            </div>
<?php
    $jobs = json_decode(file_get_contents('./json/'.$jsonLang.'experience.json'));

    krsort($jobs);
    foreach ($jobs as $job) {
        echo '<div class="col-md-4  p-3 pt-auto" data-aos="fade-up">
            <div class="bgSuccess p-3">
                <h5>'. $job->title .'</h5>
                <small>'. $job->company .'</small>
                <p class="text-white pt-auto">
                <b>'. $job->location .'</b>
                    <br>
                '. $job->period .'
                    </small>

                </p>
            </div>
            <div class="bgDark p-3">
                '. $job->description .'
            </div>
        </div>';
    }
?>
        </div>
    </div>