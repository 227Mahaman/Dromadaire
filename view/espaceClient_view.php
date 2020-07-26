<?php
$title = "Espace Client";
ob_start();
?>
    <!-- Property Section Begin -->
    <section class="property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="property-title">Tèmoignage</h4>
                    <div class="property-list">
                        <?php
                        // $target = '';
                        // if ($_SERVER["SERVER_NAME"] == 'localhost') {
                        //     $target = "http://localhost/dromadaire/";
                        // } else {
                        //     $target = "http://sonef.net/admin/";
                        // }
                        // $data = Manager::getData("agence", true)['data'];
                        // if (is_array($data) || is_object($data)) {
                        //     foreach ($data as $value) {
                        //         $ville = Manager::getData('ville', 'id_ville', $value['ville'])['data'];
                        //         $pays = Manager::getData('pays', 'id_pays', $ville['pays'])['data'];
                            ?>
                        <!--<div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="<?//= $target.Manager::getData("files", "id", $value['file'])['data']['file_url'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">For Sale</div>
                                        <h5 class="r-title"><?//= $value['nom_agence']?></h5>-->
                                        <!--<div class="room-price">
                                            <span>Start From:</span>
                                            <h5>$3.000.000</h5>
                                        </div>-->
                                        <!--<div class="properties-location"><i class="icon_pin"></i> <?//= $ville['intitule'] . ', ' .$pays['nom']?></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="public/img/banniere/6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text"></div>
                                        <h5 class="r-title">Tahirou Sani</h5>
                                        <div class="room-price">
                                            <span>Je suis satisfait de vos services, je me sens en sécurité dans vos bus.</span>
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="public/img/banniere/6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text"></div>
                                        <h5 class="r-title">Tahirou Sani</h5>
                                        <div class="room-price">
                                            <span>Je suis satisfait de vos services, je me sens en sécurité dans vos bus.</span>
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="public/img/banniere/6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text"></div>
                                        <h5 class="r-title">Tahirou Sani</h5>
                                        <div class="room-price">
                                            <span>Je suis satisfait de vos services, je me sens en sécurité dans vos bus.</span>
                                            <h5></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php /* } 
                        } */?>
                        </tbody>
                    </div>
                    <div class="property-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->

<?php
    $content = ob_get_clean();
    require("template.php");
?>