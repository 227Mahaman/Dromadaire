<?php
$title = "Nos Services";
ob_start();
?>

<!-- Property Details Section Begin -->
<section class="property-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="pd-details-text">
                    <div class="pd-details-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-send"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-print"></i></a>
                        <a href="#"><i class="fa fa-cloud-download"></i></a>
                    </div>
                    <div class="property-more-pic">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="public/img/medias/media-16.jpg" alt="">
                        </div>
                        <!--<div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt" data-imgbigurl="public/img/properties/property-details-b2.jpg"><img
                                        src="public/img/properties/thumb-1.jpg" alt=""></div>
                                <div class="pt active" data-imgbigurl="public/img/properties/property-details-b1.jpg"><img
                                        src="public/img/properties/thumb-2.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="public/img/properties/property-details-b3.jpg"><img
                                        src="public/img/properties/thumb-3.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="public/img/properties/property-details-b4.jpg"><img
                                        src="public/img/properties/thumb-4.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="public/img/properties/property-details-b5.jpg"><img
                                        src="public/img/properties/thumb-5.jpg" alt=""></div>
                            </div>
                        </div>-->
                    </div>
                    <div class="pd-desc">
                        <h4>Destination et Tarif</h4>
                        <p>Le plaisir de voyage</p>
                    </div>
                    <div class="pd-details-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">Overview</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="" role="tab"></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="" role="tab"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="property-more-table">
                                        <table class="left-table">
                                            <tbody>
                                                <td class="pt-name">Départ</td>
                                                <td class="pt-name">Destination</td>
                                                <td class="p-value">Tarif</td>
                                                <?php
                                                $data = Manager::getData("tarif", true)['data'];
                                                // die(var_dump($data));
                                                if (is_array($data) || is_object($data)) {
                                                    foreach ($data as $value) {
                                                        $depart = Manager::getData("ville", "id_ville", $value['vdepart'])['data'];
                                                        $destination = Manager::getData("ville", "id_ville", $value['vdestination'])['data'];
                                                    ?>
                                                <tr>
                                                    <td class="pt-name"><?= $depart['intitule']?></td>
                                                    <td class="pt-name"><?= $destination['intitule']?></td>
                                                    <td class="p-value"><?= $value['valeur']?> FCFA</td>
                                                </tr>
                                                
                                                <?php } 
                                            }?>
                                            </tbody>
                                        </table>
                                        <table class="right-table"></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-map">
                        <h4>Agence Siège Niamey, Map</h4>
                        <div class="map-inside">
                            <iframe
                                src="https://www.google.com/maps/d/viewer?msa=0&ie=UTF8&t=m&ll=13.530970371937721%2C2.1097012783204816&spn=18.721452%2C24.65332&z=20&source=embed&showlabs=1&mid=1YhcBuNRssDYwJIyYqJylJfmxlk8"
                                height="320" style="border:0;" allowfullscreen=""></iframe>
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                        </div>
                    </div>
                    <div class="property-contactus">
                        <h4>Contact Us</h4>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="agent-desc">
                                    <!--<img src="public/img/properties/agent-contact.jpg" alt="">
                                    <div class="agent-title">
                                        <h5>Adam Smith</h5>
                                        <span>Saler Marketing</span>
                                    </div>-->
                                    <div class="agent-social">
                                        <a href="https://facebook.com/PlaisirDeVoyager/"><i class="fa fa-facebook"></i></a>
                                        <a href="https://twitter.com/sonefstv?lang=fr"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/channel/UCwpNgtSWwgziy4XSATdNa-g"><i class="fa fa-youtube"></i></a>
                                        <a href="https://www.instagram.com/s0nef._a/"><i class="fa fa-instagram"></i></a>
                                    </div>
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <form action="#" class="agent-contact-form">
                                    <input type="text" name="nom" placeholder="Name*">
                                    <input type="text" name="email" placeholder="Email">
                                    <textarea name="message" placeholder="Messages"></textarea>
                                    <button type="submit" class="site-btn">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="property-sidebar">
                    <div class="best-agents">
                        <h4>Nos Agences</h4>
                        <?php
                        $target = '';
                        if ($_SERVER["SERVER_NAME"] == 'localhost') {
                            $target = "http://localhost/dromadaire/";
                        } else {
                            $target = "http://sonef.net/admin/";
                        }
                        $data = Manager::getData("agence", true)['data'];
                        if (is_array($data) || is_object($data)) {
                            foreach ($data as $value) {
                                $ville = Manager::getData('ville', 'id_ville', $value['ville'])['data'];
                                $pays = Manager::getData('pays', 'id_pays', $ville['pays'])['data'];
                            ?>
                        <a href="#" class="ba-item">
                            <!--<div class="ba-pic">
                                <img src="<//?= $target.Manager::getData("files", "id", $value['file'])['data']['file_url'] ?>" alt="">
                            </div>-->
                            <div class="ba-text">
                                <h5><?= $value['nom_agence']?></h5>
                                <span><?= $ville['intitule']?></span>
                                <p class="property-items"><?= $pays['nom']?></p>
                            </div>
                        </a>
                        <?php } 
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Property Details Section End -->

<!-- Partner Carousel Section End -->
<?php
$content = ob_get_clean();
require("template.php");
?>