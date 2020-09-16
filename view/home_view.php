<?php
$title = "Accueil";
$agences = Manager::Count('agence', 'id_agence');
$employes = Manager::Count('employes', 'id_employe');
$bus = Manager::Count('bus', 'id_bus');
$agences = Manager::Count('agence', 'id_agence');
ob_start();
?>

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-item set-bg" data-setbg="public/img/banniere/6.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="hero-text">
                            <p class="room-location"><i class="icon_pin"></i> Avenue Mali Bero, Niamey-NIGER</p>
                            <h2>Le plaisir de voyage</h2>
                            <div class="room-price">
                                <span>24H/24H --</span>
                                <p>7j/7j</p>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <p><?= $agences['total'] ?> Agences</p>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <p><?= $employes['total'] ?> employés</p>
                                </li>
                                <li>
                                    <i class="fa fa-bus"></i>
                                    <p><?= $bus['total'] ?> Bus</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p>8 Garages</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-item set-bg" data-setbg="public/img/banniere/8.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="hero-text">
                            <p class="room-location"><i class="icon_pin"></i> Avenue Mali Bero, Niamey-NIGER</p>
                            <h2>Le plaisir de voyage</h2>
                            <div class="room-price">
                                <span>24H/24H --</span>
                                <p>7j/7j</p>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <p><?= $agences['total'] ?> Agences</p>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <p><?= $employes['total'] ?> employés</p>
                                </li>
                                <li>
                                    <i class="fa fa-bus"></i>
                                    <p><?= $bus['total'] ?> Bus</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p>8 Garages</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-item set-bg" data-setbg="public/img/banniere/3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="hero-text">
                            <p class="room-location"><i class="icon_pin"></i> Avenue Mali Bero, Niamey-NIGER</p>
                            <h2>Le plaisir de voyage</h2>
                            <div class="room-price">
                                <span>24H/24H --</span>
                                <p>7j/7j</p>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <p><?= $agences['total'] ?> Agences</p>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i>
                                    <p><?= $employes['total'] ?> employés</p>
                                </li>
                                <li>
                                    <i class="fa fa-bus"></i>
                                    <p><?= $bus['total'] ?> Bus</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p>8 Garages</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumbnail-pic">
        <div class="thumbs owl-carousel">
            <div class="item">
                <img src="public/img/banniere/6.jpg" alt="">
            </div>
            <div class="item">
                <img src="public/img/banniere/8.jpeg" alt="">
            </div>
            <div class="item">
                <img src="public/img/banniere/3.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Search Form Section Begin -->
<div id="reservation" class="search-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-form-text">
                    <div class="search-text">
                        <i class="fa fa-search"></i>
                        Accueil
                    </div>
                    <div class="home-text">
                        <i class="fa fa-home"></i>
                        Reservation
                    </div>
                </div>
                <form action="index.php?action=home" method="post" class="filter-form">
                    <div class="first-row">
                        <label>Ville de Départ</label>
                        <select name="depart" id="depart" class="form-control searchable" required>
                            <!--<option disabled selected>Ville de Départ</option>-->
                            <?php
                            $file = fopen("ville.json", "w+") or die("Can't create file");
                            $sql = "SELECT id_ville, vdepart, vdestination, intitule, pays 
                            FROM tarif, ville WHERE  id_ville=vdestination";
                            $data = Manager::getMultiplesRecords($sql);
                            $ville = json_encode($data);
                            fwrite($file, $ville);
                            fclose($file);
                            chmod("ville.json", 0777);
                            $data = Manager::getData("ville", true)['data'];
                            // Manager::showError($data);
                            if (is_array($data) || is_object($data)) {
                                foreach ($data as $value) {
                            ?>
                                    <option value="<?= $value['id_ville'] ?>"><?= $value['intitule'] ?></option>
                            <?php }
                            } ?>
                        </select>
                        <small>Obligatoire (*)</small>
                        <br>
                        <label>Ville de Destination</label>
                        <select name="destination" id="destination" class="form-control destination" required>
                            <!--<option disabled selected>Ville de Destination</option>-->
                            <?php
                            // die(var_dump($data));
                            if (is_array($data) || is_object($data)) {
                                foreach ($data as $value) {
                            ?>
                                    <option value="<?= $value['id_ville'] ?>"><?= $value['intitule'] ?></option>
                            <?php }
                            } ?>
                        </select>
                        <small>Obligatoire (*)</small>
                        <!-- <select name="bus" required>
                            <option disabled selected>Bus</option>
                            <option value="0">Express</option>
                            <option value="1">Climatisé</option>
                        </select> -->
                        <!-- <br>
                        <label>Heure</label>
                        <select class="form-control" name="heure"> -->
                            <!--<option disabled selected>Heure</option>-->
                            <!--<option value="00H">00H</option>
                            <option value="01H">01H</option>
                            <option value="02H">02H</option>
                            <option value="03H">03H</option>
                            <option value="04H">04H</option>
                            <option value="05H">05H</option>-->
                            <!-- <option value="06H">O6H</option> -->
                            <!--<option value="07H">07H</option>-->
                            <!-- <option value="08H">O8H</option> -->
                            <!--<option value="09H">09H</option>
                            <option value="10H">10H</option>
                            <option value="11H">11H</option>
                            <option value="13H">13H</option>
                            <option value="14H">14H</option>
                            <option value="15H">15H</option>
                            <option value="16H">16H</option>
                            <option value="17H">17H</option>
                            <option value="18H">18H</option>
                            <option value="19H">19H</option>
                            <option value="20H">20H</option>
                            <option value="21H">21H</option>
                            <option value="22H">22H</option>
                            <option value="23H">23H</option>-->
                        <!-- </select> -->
                        <br>
                    </div>
                    <div class="second-row">
                        <label>Date</label>
                        <input type="date" class="form-control" name="date" required>
                        <small>Obligatoire (*)</small>
                        <br>
                        <!--<div class="form-group">
                                <input type="text" class="form-control" name="" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="" placeholder="Prénom">
                            </div>
                            <div class="form-group">
                                <input type="mail" class="form-control" name="" placeholder="aaaaa@aaaa.com">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="" placeholder="(+227)00000000">
                            </div>-->
                        <button type="submit" class="search-btn">Suivant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Form Section End -->

<!-- How It Works Section Begin -->
<!--<section class="howit-works spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Find Your Dream House</span>
                        <h2>How It Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="public/img/howit-works/howit-works-1.png" alt="">
                        <h4>Search & Find Apertment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="public/img/howit-works/howit-works-2.png" alt="">
                        <h4>Find Your Room</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="public/img/howit-works/howit-works-3.png" alt="">
                        <h4>Talk To Agent</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
<!-- How It Works Section End -->

<!-- Feature Section Begin -->
<!--<section class="feature-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Listing From Our Agents</span>
                        <h2>Featured Properties</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="feature-carousel owl-carousel">
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="public/img/feature/feature-1.jpg">
                                <div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="public/img/feature/f-author-1.jpg" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span>Rena Simmons</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4>French Riviera Villa</h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> 180 York Road, London, UK</li>
                                        <li><i class="fa fa-tag"></i> Villa</li>
                                    </ul>
                                    <h5 class="price">$5900<span>/month</span></h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>780 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>4</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>3</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>2</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="public/img/feature/feature-2.jpg">
                                <div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="public/img/feature/f-author-2.jpg" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span>Rena Johnston</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4>French Riviera Villa</h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> 180 York Road, London, UK</li>
                                        <li><i class="fa fa-tag"></i> Villa</li>
                                    </ul>
                                    <h5 class="price">$5900<span>/month</span></h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>780 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>4</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>3</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>2</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="public/img/feature/feature-3.jpg">
                                <div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="public/img/feature/f-author-3.jpg" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span>Jonathan Walters</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4>French Riviera Villa</h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> 180 York Road, London, UK</li>
                                        <li><i class="fa fa-tag"></i> Villa</li>
                                    </ul>
                                    <h5 class="price">$5900<span>/month</span></h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>780 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>4</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>3</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>2</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="public/img/feature/feature-4.jpg">
                                <div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="public/img/feature/f-author-3.jpg" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span>Jonathan Walters</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4>French Riviera Villa</h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> 180 York Road, London, UK</li>
                                        <li><i class="fa fa-tag"></i> Villa</li>
                                    </ul>
                                    <h5 class="price">$5900<span>/month</span></h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>780 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>4</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>3</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>2</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="public/img/feature/feature-5.jpg">
                                <div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="public/img/feature/f-author-3.jpg" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span>Jonathan Walters</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4>French Riviera Villa</h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> 180 York Road, London, UK</li>
                                        <li><i class="fa fa-tag"></i> Villa</li>
                                    </ul>
                                    <h5 class="price">$5900<span>/month</span></h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>780 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>4</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>3</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>2</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
<!-- Feature Section End -->

<!-- Video Section Begin -->
<div class="video-section set-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-text">
                    <iframe width="750" height="421" src="https://www.youtube.com/embed/jWp-x76WqeA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!-- <a href="https://www.youtube.com/embed/jWp-x76WqeA" class="play-btn video-popup"><i class="fa fa-play"></i></a> -->
                    <h4></h4>
                    <h2></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Section End -->

<!-- Feature Section Begin -->
<section class="feature-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>La participation est ouverte tous.</span>
                    <h2>Jeux Concours</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="feature-carousel owl-carousel">
                <div class="col-lg-4">
                    <div class="feature-item">
                        <div class="fi-pic set-bg" data-setbg="public/img/feature/jc-1.jpg">
                            <!--<div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>-->
                            <div class="feature-author">
                                <!--<div class="fa-pic">
                                        <img src="public/img/feature/f-author-1.jpg" alt="">
                                    </div>-->
                                <div class="fa-text">
                                    <span>Intitulé</span>
                                </div>
                            </div>
                        </div>
                        <div class="fi-text">
                            <div class="inside-text">
                                <h4>Selfie Facebook</h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Date:</li>
                                    <li><i class="fa fa-tag"></i> 20 Janvier</li>
                                </ul>
                                <h5 class="price">1ere Edition<span></span></h5>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <!--<i class="fa fa-arrows"></i>-->
                                    <p>2020</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item">
                        <div class="fi-pic set-bg" data-setbg="public/img/feature/jc-7.jpg">
                            <!--<div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>-->
                            <div class="feature-author">
                                <!--<div class="fa-pic">
                                        <img src="public/img/feature/f-author-2.jpg" alt="">
                                    </div>-->
                                <div class="fa-text">
                                    <span>Selfie Instagram</span>
                                </div>
                            </div>
                        </div>
                        <div class="fi-text">
                            <div class="inside-text">
                                <h4>Intitulé</h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Date:</li>
                                    <li><i class="fa fa-tag"></i> 12 Avril</li>
                                </ul>
                                <h5 class="price"> 1ere Edition<span></span></h5>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <!--<i class="fa fa-arrows"></i>-->
                                    <p>2020</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item">
                        <div class="fi-pic set-bg" data-setbg="public/img/feature/jc-12.jpg">
                            <!--<div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>-->
                            <div class="feature-author">
                                <!--<div class="fa-pic">
                                        <img src="public/img/feature/f-author-3.jpg" alt="">
                                    </div>-->
                                <div class="fa-text">
                                    <span>Sonef</span>
                                </div>
                            </div>
                        </div>
                        <div class="fi-text">
                            <div class="inside-text">
                                <h4>Intitulé</h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Date:</li>
                                    <li><i class="fa fa-tag"></i> 30 Mai</li>
                                </ul>
                                <h5 class="price">2e Edition<span></span></h5>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <!--<i class="fa fa-arrows"></i>-->
                                    <p>2020</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item">
                        <div class="fi-pic set-bg" data-setbg="public/img/feature/jc-14.jpg">
                            <!--<div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>-->
                            <div class="feature-author">
                                <!--<div class="fa-pic">
                                        <img src="public/img/feature/f-author-3.jpg" alt="">
                                    </div>-->
                                <div class="fa-text">
                                    <span>Ok ok</span>
                                </div>
                            </div>
                        </div>
                        <div class="fi-text">
                            <div class="inside-text">
                                <h4>Intitulé</h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Date:</li>
                                    <li><i class="fa fa-month"></i> 00 Juin</li>
                                </ul>
                                <h5 class="price">1ere Edition<span></span></h5>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <!--<i class="fa fa-arrows"></i>-->
                                    <p>2020</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item">
                        <div class="fi-pic set-bg" data-setbg="public/img/feature/jc-16.jpg">
                            <!--<div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">For Sale</div>
                                </div>-->
                            <div class="feature-author">
                                <!--<div class="fa-pic">
                                        <img src="public/img/feature/f-author-3.jpg" alt="">
                                    </div>-->
                                <div class="fa-text">
                                    <span>Plantation d'arbre</span>
                                </div>
                            </div>
                        </div>
                        <div class="fi-text">
                            <div class="inside-text">
                                <h4>Intitulé</h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> Date:</li>
                                    <li><i class="fa fa-tag"></i> 03 Août</li>
                                </ul>
                                <h5 class="price">2e Edition<span></span></h5>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <!--<i class="fa fa-arrows"></i>-->
                                    <p>2020</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section End -->

<!-- Top Properties Section Begin -->
<div class="top-properties-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="properties-title">
                    <div class="section-title">
                        <!--<span>Top Property For You</span>-->
                        <h2>Nos Medias</h2>
                    </div>
                    <a href="index.php?action=missions" class="top-property-all">Voir tous nos détails</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="top-properties-carousel owl-carousel">
            <?php
            $target = '';
            if ($_SERVER["SERVER_NAME"] == 'localhost') {
                $target = "http://localhost/dromadaire/";
            } else {
                $target = "https://www.coronackathon.org/droma_admin/";
            }
            $data = Manager::getData("post", true)['data'];
            // die(var_dump($data));
            if (is_array($data) || is_object($data)) {
                foreach ($data as $value) {
            ?>
                    <div class="single-top-properties">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="stp-pic">
                                    <img src="<?= $target . Manager::getData("files", "id", $value['file'])['data']['file_url'] ?>" alt="<?= $value['intitule_post'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stp-text">
                                    <!--<div class="s-text">For Sale</div>-->
                                    <h2><?= $value['intitule_post'] ?></h2>
                                    <div class="room-price">
                                        <span>Thème:</span>
                                        <h4><?= $value['theme'] ?></h4>
                                    </div>
                                    <!--<div class="properties-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</div>-->
                                    <p><?= $value['description'] ?></p>
                                    <!--<ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>5201 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>8 Bed Room</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>7 Baths Bed</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>1 Garage</p>
                                    </li>
                                </ul>-->
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } ?>
        </div>
    </div>
</div>
<!-- Top Properties Section End -->

<!-- Agent Section Begin -->
<section class="agent-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Le plaisir de voyage</span>
                    <h2>Nos Agences</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="agent-carousel owl-carousel">
                <?php
                $target = '';
                if ($_SERVER["SERVER_NAME"] == 'localhost') {
                    $target = "http://localhost/dromadaire/";
                } else {
                    $target = "http://coronackathon.org/droma_admin/";
                }
                $data = Manager::getData("agence", true)['data'];
                //die(var_dump($data));
                if (is_array($data) || is_object($data)) {
                    foreach ($data as $value) {
                        $ville = Manager::getData('ville', 'id_ville', $value['ville'])['data']['intitule'];
                ?>
                        <div class="col-lg-3">
                            <div class="single-agent">
                                <div class="sa-pic">
                                    <img src="<?= $target . Manager::getData("files", "id", $value['file'])['data']['file_url'] ?>" alt="<?= $value['nom_agence'] ?>">
                                    <div class="hover-social">
                                        <a href="#" class="twitter"><i class="fa fa-map"></i></a>
                                        <!--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>-->
                                    </div>
                                </div>
                                <h5><?= $value['nom_agence'] ?><span><?= $ville; ?></span></h5>
                            </div>
                        </div>
                        <!--<div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="public/img/agent/agent-2.jpg" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Tillie Burns <span>Marketing Manager</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="public/img/agent/agent-3.jpg" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Derrick Lawson <span>Company Agents</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="public/img/agent/agent-4.jpg" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Clifford Colon <span>Saler Manager</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single-agent">
                            <div class="sa-pic">
                                <img src="public/img/agent/agent-5.jpg" alt="">
                                <div class="hover-social">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <h5>Clifford Colon <span>Saler Manager</span></h5>
                        </div>
                    </div>-->
                <?php
                    }
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- Agent Section End -->

<!-- Latest Blog Section Begin -->
<!--<section class="blog-section latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Blog & Events</span>
                        <h2>News Latest</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="public/img/blog/latest-1.jpg" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                            </ul>
                            <h4><a href="#">Enhance Your Brand Potential With Giant.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="public/img/blog/latest-2.jpg" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                            </ul>
                            <h4><a href="#">Illustration In Marketing Materials</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="public/img/blog/latest-3.jpg" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                            </ul>
                            <h4><a href="#">Branding Do You Know Who You Are</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
<!-- Latest Blog Section End -->
<script>
    $("#depart").on("change", function() {
        console.log($(this).val(), 'des')
        v = $(this).val();
        $.getJSON("ville.json", function(data) {
            var option = '<option class="option" selected>Ville de Destination</option>';
            $.each(data, function(key, val) {
                // console.log(key, val, "ok villes");
                if (val.vdepart == v) {
                    console.log(key, val, "ok ville");

                    option += '<option value="' + val.id_ville + '">' + val.intitule + '</option>';
                }
            });
            console.log(option);

            $("#destination").html(option);
        });
    });
</script>
<?php
$content = ob_get_clean();
require("template.php");
?>