<?php
    $title = "Contact";
    ob_start();
?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Contactez Nous</h2>
                        <div class="breadcrumb-option">
                            <a href="index.php?action=home"><i class="fa fa-home"></i> Accueil</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/d/viewer?msa=0&ie=UTF8&t=m&ll=13.530970371937721%2C2.1097012783204816&spn=18.721452%2C24.65332&z=20&source=embed&showlabs=1&mid=1YhcBuNRssDYwJIyYqJylJfmxlk8"
                            height="700" style="border:0;" allowfullscreen=""></iframe>
                        <div class="map-inside">
                            <i class="icon_pin"></i>
                            <div class="inside-widget">
                                <h4>Niamey</h4>
                                <ul>
                                    <li>Phone: (+227) 20000000 / 89592626</li>
                                    <li>Add: Avenue Mali Bero, Niamey-NIGER</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-1">
                            <div class="contact-text">
                                <div class="section-title">
                                    <span>Contact</span>
                                    <h2>On est à votre écoute.</h2>
                                </div>
                                <form action="#" class="contact-form">
                                    <input name="nom" type="text" placeholder="Nom">
                                    <input type="text" name="email" placeholder="Email">
                                    <input type="text" placeholder="Website">
                                    <textarea name="message" placeholder="Messages"></textarea>
                                    <button type="submit" class="site-btn">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

<?php
    $content = ob_get_clean();
    require("template.php");
?>