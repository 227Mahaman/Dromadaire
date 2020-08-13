<?php
$title = "Reservation de Billet";
if (!empty($_GET['id'])) {
    $datas = Manager::getData("reservation", "id_reservation", $_GET['id'])['data'];
    $billet = Manager::getData("billet", "id_billet", $datas['billet'])['data'];
    //   Manager::showError($billet);
    $sql = "SELECT * FROM tarif WHERE vdepart=? AND vdestination=?";
    $data = Manager::getMultiplesRecords($sql, [$billet['depart'], $billet['destination']]);
    //$tarif = Manager::getData("tarif", "id_tarif", $data['id_billet'])['data'];
} //elseif (!empty($_GET['c'])) {
//     $datas = Manager::getData("client", "id_client", $_GET['c'])['data'];
//     if ($datas['is_account'] == 1) {
//         $_SESSION['client'] = $datas;
//     }
// }
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
                            Reservation | Complement d'Information
                    </div>
                </div>
                <form method="post" id="form" class="filter-form">
                    <div class="first-row">
                        <?php if (is_array($data) || is_object($data)) {
                            foreach ($data as $value) { ?>
                                <h5> Tarif: <?= $value['valeur'] ?> FCFA</h5>

                                <br>
                                <input type="text" class="form-control" name="nom" placeholder="Nom du client" required>
                                <br>
                                <input type="text" class="form-control" name="prenom" placeholder="Prénom du client" required>
                                <br>
                                <input type="tel" class="form-control" name="tel" placeholder="(+227)93939393" required>
                                <br>
                                <input type="mail" class="form-control" name="email" placeholder="aaaaa@aaaa.com">
                                <br>
                                <input type="number" class="form-control" name="place" id="place" value="1">
                                <br>
                                <input type="text" class="form-control" name="cout" id="cout" value="<?= $value['valeur'] ?>" disabled>
                                <br>
                                <div style="display: flex;">
                                    <label for="is_account">Créer un compte pour bénéficier d'un espace client</label>
                                    <input style="width: 5%; height: 20px;" type="checkbox" class="form-control" name="is_account" id="is_account" value="1">
                                </div>
                        <?php } } ?>

                            <br>
                    </div>
                    <div class="second-row">
                            <button type="submit" class="search-btn">Réserver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var cout = $("#cout").val();
    $("#place").on("change", function() {
        var place = $(this).val();
        // console.log(place, cout);
        $("#cout").val(cout * place);
    });
    // $("#valider").click(function() {
    //     alertify.confirm("Voulez vous créer un compte pour bénéficier d'un espace client ?",
    //         function() {
    //             $("#is_account").val(1);
    //             $("#form").submit();
    //         },
    //         function() {
    //             return;
    //         });
    //             // event.preventDefault();
    // });
</script>

<?php
$content = ob_get_clean();
require("template.php");
?>