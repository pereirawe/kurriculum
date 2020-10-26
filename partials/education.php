<div id="education" class="bgSecondary">
    <div class="container" >
        <div class="row py-5">
            <div id="title" class="col-md-12">
                <h3 class="textSuccess">
                        <?= $appContent->appEducationTitle;?>
                </h3>
            </div>
                <?php
                    $grades = json_decode(file_get_contents('./json/'.$jsonLang.'education.json'));
                    krsort($grades);
                    foreach ($grades as $grade) {
                        echo '<div class="col-md-6 p-3 " data-aos="fade-up">
                            <div class="bgLight p-3">
                                <h5 class="textPrimary">'. $grade->title .'</h5>
                                <small>'. $grade->academy .'
                                -
                                <b>'. $grade->location .'</b></small>
                                <p class="textPrimary">'. $grade->period .'</p>
                            </div>
                        </div>';
                    }
                ?>
        </div>
    </div>

</div>
