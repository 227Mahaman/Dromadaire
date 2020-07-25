<?php
$title = "Reservation de Billet";
if (!empty($_GET['id'])){
  $datas = Manager::getData("reservation", "id_reservation", $_GET['id'])['data'];
  $billet = Manager::getData("billet", "id_billet", $datas['billet'])['data'];
  $sql = "SELECT * FROM tarif WHERE vdepart=? AND vdestination=?";
    $data = Manager::getMultiplesRecords($sql, [$billet['depart'], $billet['destination']]);
  //$tarif = Manager::getData("tarif", "id_tarif", $data['id_billet'])['data'];
} elseif (!empty($_GET['c'])){
    $datas = Manager::getData("client", "id_client", $_GET['c'])['data'];
} 
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
                                        <p>20 Agences</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <p> 500 employés</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bus"></i>
                                        <p>120 Bus</p>
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
                                        <p>20 Agences</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <p> 500 employés</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bus"></i>
                                        <p>120 Bus</p>
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
                                        <p>20 Agences</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <p> 500 employés</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bus"></i>
                                        <p>120 Bus</p>
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
    <div class="search-form">
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
                            <?php if(!empty($_GET['id'])){?>
                            Reservation | Complement d'Information
                            <?php }elseif(!empty($_GET['c'])){?>
                            Reservation finalisée
                            <?php }?>
                        </div>
                    </div>
                    <form method="post" class="filter-form">
                        <div class="first-row">
                        <?php if(!empty($_GET['id'])){?>
                            <?php if (is_array($data) || is_object($data)) {
                                foreach ($data as $value) {?>
                                <h5> Tarif: <?= $value['valeur']?> FCFA</h5>
                            
                            <br>
                            <input type="text" class="form-control" name="nom" placeholder="Nom du client" required>
                            <br>
                            <input type="text" class="form-control" name="prenom" placeholder="Prénom du client" required>
                            <br>
                            <input type="tel" class="form-control" name="tel" placeholder="(+227)93939393" required>
                            <br>
                            <input type="mail" class="form-control" name="email" placeholder="aaaaa@aaaa.com">
                            <input type="hidden" class="form-control" name="place" value="<?= $value['valeur']?>">
                            <input type="hidden" class="form-control" name="cout" value="<?= $value['valeur']?>">
                            <?php } }?>
                            
                            <br>
                            <?php }elseif(!empty($_GET['c'])){?>
                            <h5>Félicition,</h5>
                            <h3><?= $datas['nom'] . ' - ' . $datas['prenom']?></h3>
                            <br>
                            <p>N'oubliez pas de passer au Billeterie pour récuperer votre billet.<p>
                            <br>
                            <p>Vous pouvez aussi voir l'ensemble de vos réservations sur l'espace client.</p>
                            <br>
                            <?php }?>
                        </div>
                        <div class="second-row">
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
                            <?php if(!empty($_GET['id'])){?>
                            <button type="submit" class="search-btn">Réserver</button>
                            <?php }?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
$content = ob_get_clean();
require("template.php");
?>