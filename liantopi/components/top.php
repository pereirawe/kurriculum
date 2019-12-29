<div id="top_header" class="container-fluid">
    <div class="row">
        <div class="col-md-3 p-0">
            <img src="./img/photo.jpg" alt="" width="100%" data-aos="zoom-in">
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-8" data-aos="fade-right">
                    <h1 class="pt-4 pb-4"><?= $appContent->profileFirtsName;?><br> <?= $appContent->profileLastName;?></span></h1>
                    <h3>
                        <?= $appContent->profileOccupation;?>
                    </h3>
                </div>
                <div class="col-md-4 pt-5 small" data-aos="fade-left">
                    <p>
                        <i class="text-light-blue fas fa-birthday-cake pr-2"></i> <?= $appContent->profileAge;?><br>
                        <i class="text-light-blue fas fa-heart pr-2"></i> <?= $appContent->profileRelationship;?><br>

                        <a href="https://api.whatsapp.com/send?phone=<?= $appContent->profilePhone;?>&text=%20" target="_blank">
                            <i class="fab fa-whatsapp pr-2"></i> <?= $appContent->profilePhone;?>
                        </a><br>

                        <a href="mailto:<?= $appContent->profileEmail;?>" target="_blank">
                            <i class="text-light-blue fas fa-envelope-open pr-2"></i> <?= $appContent->profileEmail;?>
                        </a><br>

                        <a href="<?= $appContent->profileNationalityUrl;?>" target="new">                        
                            <i class="text-light-blue fas fa-passport pr-2"></i> <?= $appContent->profileNationality;?><br>
                        </a>                        
                        <a href="<?= $appContent->profileAddressUrl;?>" target="new">
                            <i class="text-light-blue fas fa-map-marker-alt pr-2"></i> <?= $appContent->profileAddress;?><br>
                            <i class="text-light-blue fas fa-map-marker-alt pr-2" style="opacity: 0;"></i> <?= $appContent->profileCity;?><br>
                        </a>
                        <br>
                    
                    <!--    <p> 
                        <a href="<?= $appContent->profileUrlFacebook;?>" target="new"><i class="text-light-blue pr-2 fa-lg fab fa-facebook-square"></i></a>
                        <a href="<?= $appContent->profileUrlInstagram;?>" target="new"><i class="text-light-blue pr-2 fa-lg fab fa-instagram"></i></a>
                        <a href="<?= $appContent->profileUrlTwitter;?>" target="new"><i class="text-light-blue pr-2 fa-lg fab fa-twitter-square"></i></a>
                        <a href="<?= $appContent->profileUrlLinkedin;?>" target="new"><i class="text-light-blue pr-2 fa-lg fab fa-linkedin"></i></a>
                        <a href="<?= $appContent->profileUrlYoutube;?>" target="new"><i class="text-light-blue pr-2 fa-lg fab fa-youtube"></i></a>
                        <a href="<?= $appContent->profileUrlGithub;?>" target="new"><i class="text-light-blue pr-2 fa-lg fab fa-github-square"></i></a>
                    </p> -->
                </div>


            </div>
        </div>

    </div>
</div>
