<?php
$title = "Notification";
if (isset($_SESSION['client'])) {
    $datas = Manager::getData("client", "id_client", $_SESSION['client'])['data'];
    if ($datas['is_account'] == 1) {
        $_SESSION['client'] = $datas;
    }
}
$agences = Manager::Count('agence', 'id_agence');
$employes = Manager::Count('employes', 'id_employe');
$bus = Manager::Count('bus', 'id_bus');
$garages = Manager::Count('garages', 'id_garage');
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
                                    <p><?= $bus['total'] ?>  Bus</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p><?= $garages['total'] ?> Garages</p>
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
                                    <p><?= $garages['total'] ?> Garages</p>
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
                                    <p><?= $bus['total'] ?>  Bus</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p><?= $garages['total'] ?> Garages</p>
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
                <img src="public/img/banniere/6.jpg" alt="bannière sonef">
            </div>
            <div class="item">
                <img src="public/img/banniere/8.jpeg" alt="bannière sonef">
            </div>
            <div class="item">
                <img src="public/img/banniere/3.jpg" alt="bannière sonef">
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
                        <i class="fa fa-home"></i>Reservation finalisée
                    </div>
                </div>
                <form method="post" id="form" class="filter-form">
                    <div class="first-row">  
                        <h5>Félicition,</h5>
                        <h3><?= $datas['nom'] . ' - ' . $datas['prenom'] ?></h3>
                        <br>
                        <p>N'oubliez pas de passer au Billeterie pour récuperer votre billet.<p>
                                <br>
                                <p>Vous pouvez aussi voir l'ensemble de vos réservations sur l'espace client.</p>
                                <br>
                    </div>
                    <div class="second-row">
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