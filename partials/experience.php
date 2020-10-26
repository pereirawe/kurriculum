<div id="experience" class="bgDark">
        <div class="container pb-5">
            <div class="row h-100">
                <div id="title" class="col-md-12">
                    <h3 class="pt-5 pb-2">
                        <?= $appContent->appExperienceTitle;?>
                    </h3>
                </div>
    <?php
        $jobs = json_decode(file_get_contents('./json/'.$jsonLang.'experience.json'));
    
        krsort($jobs);
        foreach ($jobs as $job) {
            echo '<div class="col-md-12 bgLight my-2" data-aos="fade-up">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="bgPrimary p-3">
                            <h5 class="textSuccess">'. $job->title .'</h5>
                            <small>'. $job->company .'
                            <p>
                                <b>'. $job->location .'</b>
                                    <br>
                                '. $job->period .'
                                    </small>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="bgLight textDark py-3">
                            '. $job->description .'
                        </div>
                    </div>
                </div>
            </div>';
        }
    ?>
            </div>
        </div>
</div>