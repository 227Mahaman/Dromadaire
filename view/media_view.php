<?php
$title = "Media";
ob_start();
?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Média</h2>
                    <div class="breadcrumb-option">
                        <a href="index.php?action=accueil"><i class="fa fa-home"></i> Accueil</a>
                        <span>Média</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section Begin -->

<!-- Blog Section Begin -->
<section class="blog-section blog-page spad">
    <div class="container">
        <div class="row">
            <?php
            $target = '';
            if ($_SERVER["SERVER_NAME"] == 'localhost') {
                $target = "http://localhost/dromadaire/";
            } else {
                $target = "http://sonef.net/admin/";
            }
            $data = Manager::getData("post", true)['data'];
            // die(var_dump($data));
            if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
                    $admin = Manager::getData('users', 'id', $value['user_create'])['data'];
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="<?= $target.Manager::getData("files", "id", $value['file'])['data']['file_url'] ?>" alt="Nouveau Bus">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <!--<li><i class="fa fa-user"></i> <?//= $admin['first_name'] . ' '. $admin['last_name'];?></li>-->
                                <li><i class="fa fa-clock-o"></i> <?= $value['created_at']?></li>
                            </ul>
                            <h4><a href="#"><?= $value['intitule_post']?></a></h4>
                        </div>
                    </div>
                </div>
                <?php } 
            }?>
            <!--<div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="sb-pic">
                        <img src="public/img/medias/media-6.JPG" alt="Fonaf">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i> Adam Smith</li>
                            <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                        </ul>
                        <h4><a href="./blog-details.html">Au Fonaf 2019</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="sb-pic">
                        <img src="public/img/medias/media-9.JPG" alt="">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i> Adam Smith</li>
                            <li><i class="fa fa-clock-o"></i> 22th Jan, 2019</li>
                        </ul>
                        <h4><a href="./blog-details.html">Jeux Concours</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="sb-pic">
                        <img src="public/img/medias/media-10.JPG" alt="">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i> Adam Smith</li>
                            <li><i class="fa fa-clock-o"></i> 24th Jan, 2019</li>
                        </ul>
                        <h4><a href="./blog-details.html">Looking For Your Dvd Printing Solution</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="sb-pic">
                        <img src="public/img/medias/media-11.JPG" alt="">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i> Adam Smith</li>
                            <li><i class="fa fa-clock-o"></i> 29th Jan, 2019</li>
                        </ul>
                        <h4><a href="./blog-details.html">Ici c'est sonef</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="sb-pic">
                        <img src="public/img/medias/media-15.jpg" alt="">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i> Adam Smith</li>
                            <li><i class="fa fa-clock-o"></i> 30th Jan, 2019</li>
                        </ul>
                        <h4><a href="./blog-details.html">SafeTrip 2020</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="sb-pic">
                        <img src="public/img/medias/media-12.png" alt="">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i> Adam Smith</li>
                            <li><i class="fa fa-clock-o"></i> 02th Feb, 2019</li>
                        </ul>
                        <h4><a href="./blog-details.html">Des Bus Flanbaneuf</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="sb-pic">
                        <img src="public/img/medias/media-17.jpg" alt="">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i> Adam Smith</li>
                            <li><i class="fa fa-clock-o"></i> 09th Feb, 2019</li>
                        </ul>
                        <h4><a href="./blog-details.html">Not All Blank Cassettes Are Created Equal</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                    <div class="sb-pic">
                        <img src="public/img/medias/media-16.jpg" alt="">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i> Adam Smith</li>
                            <li><i class="fa fa-clock-o"></i> 12th Feb, 2019</li>
                        </ul>
                        <h4><a href="./blog-details.html">The Small Change That Creates Massive Results</a></h4>
                    </div>
                </div>
            </div>-->
            <div class="col-lg-12">
                <div class="loadmore">
                    <a href="#" class="primary-btn">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<?php
$content = ob_get_clean();
require("template.php");
?>