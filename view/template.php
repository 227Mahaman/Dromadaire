<?php
if (!empty($_POST)) {
    $data = $_POST;
    $manager  = new Manager();
    $res = $manager->insert($data, "news");
    //Manager::showError($res);
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <script src="public/js/jquery-3.3.1.min.js"></script>
</head>
<!-- #f7f7f7 -->

<body style=" background-color: #FFFFF0;">
    <!-- Page Preloder -->
    <div id="prelode">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <!--<div class="language-bar">
            <div class="language-option">
                <img src="img/flag.png" alt="">
                <span>English</span>
                <i class="fa fa-angle-down"></i>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">Germany</a></li>
                        <li><a href="#">China</a></li>
                    </ul>
                </div>
            </div>
            <div class="property-btn">
                <a href="#" class="property-sub">Submit Property</a>
            </div>
        </div>-->
        <nav class="main-menu">
            <ul>
                <li><a href="index.php?action=home">Accueil</a></li>
                <li><a href="index.php?action=home#reservation">Réservation</a></li>
                <li><a href="index.php?action=service">Nos Destination & Tarif</a></li>
                <li><a href="index.php?action=agence">Nos Agences/Gares</a></li>
                <li><a href="index.php?action=eclient">Espace Client</a></li>
                <li><a href="index.php?action=media">Media</a></li>
                <li><a href="index.php?action=contact">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-logo-right">
            <ul>
                <li>
                    <i class="icon_phone"></i>
                    <div class="info-text">
                        <span>Phone:</span>
                        <p>(+227) 20000000 / 89592626</p>
                    </div>
                </li>
                <li>
                    <i class="icon_map"></i>
                    <div class="info-text">
                        <span>Adresse:</span>
                        <p>BP 11576 <span>Niamey</span></p>
                    </div>
                </li>
                <li>
                    <i class="icon_mail"></i>
                    <div class="info-text">
                        <span>Email:</span>
                        <p>contact@sonef.net</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menu">
                            <ul>
                                <li class="active"><a href="index.php?action=home">Accueil</a></li>
                                <li><a href="index.php?action=home#reservation">Réservation</a></li>
                                <li><a href="index.php?action=service">Nos Destination & Tarif</a></li>
                                <li><a href="index.php?action=agence">Nos Agences/Gares</a></li>
                                <li><a href="index.php?action=eclient">Espace Client</a></li>
                                <li><a href="index.php?action=media">Media</a></li>
                                <li><a href="index.php?action=contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--<div class="col-lg-2">
                        <div class="top-right">
                            <div class="language-option">
                                <img src="img/flag.png" alt="">
                                <span>English</span>
                                <i class="fa fa-angle-down"></i>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">China</a></li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="property-sub">Submit</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="nav-logo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.php?action=home"><img src="public/img/logo/logook2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="nav-logo-right">
                            <ul>
                                <li>
                                    <i class="icon_phone"></i>
                                    <div class="info-text">
                                        <span>Phone:</span>
                                        <p>(+227) 20000000 / 89592626</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon_map"></i>
                                    <div class="info-text">
                                        <span>Adresse:</span>
                                        <p>BP 11576 <span>Niamey</span></p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon_mail"></i>
                                    <div class="info-text">
                                        <span>Email:</span>
                                        <p>contact@sonef.net</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <?php
    echo $content;
    ?>

    <!-- Partner Carousel Section Begin -->
    <!--<div class="partner-section">
        <div class="container">
            <h2>Nos Partenaires</h2>
            <div class="partner-carousel owl-carousel">
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="public/img/partner/partner-1.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="public/img/partner/partner-2.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="public/img/partner/partner-3.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="public/img/partner/partner-4.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="public/img/partner/partner-5.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>-->
    <!-- Partner Carousel Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="public/img/footer-bg.jpg">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href="#"><img src="public/img/logo/logook2.png" alt=""></a>
                            </div>
                            <p>Pour recevoir des notifications nous concernant.</p>
                            <form method="post" class="newslatter-form">
                                <input type="mail" name="mail" placeholder="Renseignez votre email...">
                                <button type="submit"><i class="fa fa-location-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="footer-widget">
                            <h4>Nos pays où nous sommes présent.</h4>
                            <ul>
                                <?php
                                $data = Manager::getData("pays", true)['data'];
                                //die(var_dump($data));
                                if (is_array($data) || is_object($data)) {
                                    foreach ($data as $value) {
                                ?>
                                        <li <?= $value['nom'] == 'Niger' ? 'id="nig"' : "" ?>><i class="fa fa-caret-right"></i> <a href="#"><?= $value['nom'] ?></a></li>
                                        <?php
                                        if ($value['nom'] == 'Niger') {
                                            $ville = Manager::getData('ville', 'pays', $value['id_pays'], true)['data'];
                                            // Manager::showError($ville);
                                            echo ('<ul class="row">');
                                            foreach ($ville as $val) {



                                        ?>
                                                <li class="col-lg-3"><i class="fa fa-caret-right"></i> <a href="#"><?= $val['intitule'] ?></a></li>
                                <?php
                                            }
                                            echo ("</ul>");
                                        }
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h4>Social</h4>
                            <ul class="social">
                                <li><i class="ti-facebook"></i> <a href="https://www.facebook.com/PlaisirDeVoyager/">Facebook</a></li>
                                <li><i class="ti-twitter-alt"></i> <a href="https://twitter.com/Sonefstv">Twitter</a></li>
                                <li><i class="ti-instagram"></i> <a href="https://www.instagram.com/soneftransport">Instagram</a></li>
                                <li><i class="ti-youtube"></i> <a href="https://www.youtube.com/channel/UCwpNgtSWwgziy4XSATdNa-g">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Contactez Nous</h4>
                            <ul class="contact-option">
                                <li><i class="fa fa-map-marker"></i> Boulevard Mali Béro 11576,Niamey</li>
                                <li><i class="fa fa-phone"></i> (+227) 20000000 / 89 59 26 26</li>
                                <li><i class="fa fa-envelope"></i> contact@sonef.net</li>
                                <!-- <li><i class="fa fa-clock-o"></i> Mon - Sat, 08 AM - 06 PM</li> -->
                            </ul>
                        </div>
                    </div>
                    <br> <br>
                    <div class="col-md-6 col-12">
                        <a class="twitter-timeline" data-height="400" href="https://twitter.com/sonefstv?lang=fr">Tweets by Sonef</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="fb-page" data-href="https://www.facebook.com/PlaisirDeVoyager/" data-tabs="timeline" data-width="550" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/PlaisirDeVoyager/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/PlaisirDeVoyager/">Sonef</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p>
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Tous les droits réservés à SONEF, développé<i class="ti-heart" aria-hidden="true"></i> par <a href="www.elyconsulting.net" target="_blank">Ely Consulting</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0&appId=1475822219173269&autoLogAppEvents=1"></script>

    <!-- Js Plugins -->

    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/jquery.nice-select.min.js"></script>
    <script src="public/js/jquery.slicknav.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>

</html>