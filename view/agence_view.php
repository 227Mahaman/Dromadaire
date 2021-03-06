<?php
$title = "Nos Agences";
ob_start();
?>
<!-- Map Section Begin -->
<!--<div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen=""></iframe>
        <div class="icon-list">
            <div class="icon icon-1">
                1
            </div>
            <div class="icon icon-2">
                2
            </div>
            <div class="icon icon-3">
                3
            </div>
            <div class="icon icon-4">
                4
            </div>
            <div class="icon icon-5">
                5
            </div>
        </div>
    </div>-->
<!-- Map Section End -->

<!-- Property Section Begin -->
<section class="property-section spad">
    <div class="container">
        <div class="row">
            <!--<div class="col-lg-3">
                    <div class="property-sidebar">
                        <h4>Search Property</h4>
                        <form action="#" class="sidebar-search">
                            <div class="sidebar-btn">
                                <div class="bt-item">
                                    <input type="radio" name="s-type" id="st-buy" checked>
                                    <label for="st-buy">Buy</label>
                                </div>
                                <div class="bt-item">
                                    <input type="radio" name="s-type" id="st-rent">
                                    <label for="st-rent">Rent</label>
                                </div>
                            </div>
                            <select>
                                <option value="">Locations</option>
                            </select>
                            <select>
                                <option value="">Status</option>
                            </select>
                            <select>
                                <option value="">No of Bedroom</option>
                            </select>
                            <select>
                                <option value="">No of Bathrooms</option>
                            </select>
                            <select>
                                <option value="">No of Guest</option>
                            </select>
                            <div class="room-size-range">
                                <div class="price-text">
                                    <label for="roomsizeRangeP">Size:</label>
                                    <input type="text" id="roomsizeRangeP" readonly>
                                </div>
                                <div id="roomsize-range-P" class="slider"></div>
                            </div>
                            <div class="price-range-wrap">
                                <div class="price-text">
                                    <label for="priceRangeP">Price:</label>
                                    <input type="text" id="priceRangeP" readonly>
                                </div>
                                <div id="price-range-P" class="slider"></div>
                            </div>
                            <button type="submit" class="search-btn">Search Property</button>
                        </form>
                        <div class="best-agents">
                            <h4>Best Agents</h4>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="public/img/properties/best-agent-1.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Lester Bradley</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="public/img/properties/best-agent-2.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Janie Blair</h5>
                                    <span>Company Agents</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                            <a href="#" class="ba-item">
                                <div class="ba-pic">
                                    <img src="public/img/properties/best-agent-3.jpg" alt="">
                                </div>
                                <div class="ba-text">
                                    <h5>Sophia Cole</h5>
                                    <span>Marketing & Ceo</span>
                                    <p class="property-items">6 property </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>-->
            <div class="col-lg-12">
                <h4 class="property-title">Nos Agences</h4>
                <div class="property-list">
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
                            <div class="single-property-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="property-pic">
                                            <img src="<?= $target . Manager::getData("files", "id", $value['file'])['data']['file_url'] ?>" alt="<?= $ville['intitule'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-8 row">
                                        <div class="property-text col-md-6">
                                            <div class="s-text">Agence</div>
                                            <h5 class="r-title"><?= $value['nom_agence'] ?></h5>
                                            <!--<div class="room-price">
                                            <span>Start From:</span>
                                            <h5>$3.000.000</h5>
                                        </div>-->
                                            <div class="properties-location"><i class="icon_pin"></i> <?= $ville['intitule'] . ', ' . $pays['nom'] ?></div>
                                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore.</p>
                                        <ul class="room-features">
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
                                        <div class="col-md-6">
                                            <?php
                                            if (!empty($value['localisation'])) {
                                            ?>
                                                <iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAuclWKo_cizf2ox2zrZHBDEw5JoVo1V0Q&q=<?=str_replace(" ", "+", $value['localisation'])?>" allowfullscreen>
                                                </iframe>
                                            <?php
                                                
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
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