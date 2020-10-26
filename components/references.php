<div class="container-fluid pb-5" id="references">
        <div class="row">
            <div id="title" class="col-md-12">
                <h2 class="pt-5 pb-2"><i class="fas fa-thumbs-up"></i> REFERENCIAS</h2>
            </div>
<?php
    $references = json_decode(file_get_contents('./json/'.$jsonLang.'references.json'));
    shuffle($references);
    foreach ($references as $reference) {
        echo '<div class="col-md-3  p-3 " data-aos="fade-up">
            <div class="bgLight p-3">
                <h5>'. $reference->name .'</h5>
                <small>'. $reference->position .'</small>
                <p class="textPrimary">'. $reference->phone .'<br>
                '. $reference->email .'</p>
            </div>
        </div>';
    }
?>
        </div>
    </div>