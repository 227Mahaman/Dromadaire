<?php

//require "model/Manager.php";
session_start();

// $d = strtotime("now");
// 		$manager = new Manager();
// 		$data['message'] = "ok";
// 		$data['candidat'] = 21;
// 		$data['receiver'] = 37;
// 		$data['date'] = date("Y-m-d h:i:s", $d);
// 		$res = $manager->insert($data, "forum");
// 		print_r($res); die;
if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action == "home") {
        include_once('view/home_view.php');
    } elseif ($action == "reservation") { //View Inscription
        //data contient l'etat des inscriptions

        // if (!empty($_POST) && !empty($_FILES)) { //Traitement Inscription Candidat
        //     $data = $_POST;
        //     $manager  = new Manager();
        //     //Manager::showError($_FILES);
        //     if (empty($_FILES['file']['name'])) {
        //         $data['file'] = 67;
        //     } else {

        //         $data['file'] = $manager->uploadProfilePicture($_FILES['file']);
        //     }
        //     date_default_timezone_set("Africa/Niamey");
        //     $d = strtotime("now");
        //     $data['date_post'] = date("Y-m-d h:i:s", $d);
        //     $res = $manager->insert($data, "projet");
        //     //Manager::showError($res);
        //     if ($res['error'] == false) {
        //         $_SESSION['equipe'] = $res['lastId'];
        //         include_once("model/mail.php");
        //     } else {
        //         //$message=$res['message'];
        //         $message = "Echec de l'Inscription !";
        //         $type = "alert-danger";
        //     }
        //     //Manager::showError($res);
        // }
        // if (!empty($_POST)) { //Inscription Coach
        //     $data = $_POST;
        //     //$email = Manager::getData("users",7)['data'];
        //     $email = Manager::is_not_use("users", "email", $data['email']);
        //     $phone = Manager::is_not_use("users", "phone_number", $data['phone_number']);
        //     //var_dump($email);
        //     //die();
        //     if (!$email) {
        //         $message = "Echec de l'Inscription ! Il se peut que l'adresse email soit déjà utilisé";
        //         $type = "alert-danger";
        //     } elseif (!$phone) {
        //         $message = "Echec de l'Inscription ! Il se peut que votre N° de téléphone soit déjà utilisé";
        //         $type = "alert-danger";
        //     } else {

        //         $manager  = new Manager();
        //         $res = $manager->insert($data, "users");
        //         //Manager::showError($res);

        //         if ($res['error'] == false) {
        //             $_SESSION['id'] = $res['lastId'];
        //             include_once("model/mail.php");
        //         } else {
        //             $message = "Echec de votre inscription en tant que coach";
        //             $type = "alert-danger";
        //         }
        //     }
        // }
        include_once('view/reservation_view.php');
    } elseif ($action == "media") { //View Media
        include_once('view/media_view.php');
    } elseif ($action == "destination") { //View Destination Tarif
        include_once('view/destination_view.php');
    } elseif ($action == "agence") { //View Agence
        include_once('view/agence_view.php');
    } elseif ($action == "contact") { //View Contact
        include_once('view/contact_view.php');
    } elseif ($action == "forum") { //View Forum
        if (empty($_SESSION['equipe_candidat'])) {
            header("Location:index.php?action=home");
        }
        // if (!empty($_POST) && !empty($_FILES)) { //Traitement File Joinds
        //     $data = $_POST;
        //     //var_dump($data);
        //     //die();
        //     $manager  = new Manager();
        //     //Manager::showError($_FILES);
        //     if (empty($_FILES['file']['name'])) {
        //          $data['file'] = 67;
        //      } else {

        //         $data['file'] = $manager->uploadProfilePicture($_FILES['file']);
        //     }
        //     $res = $manager->insert($data, "file_jointe");
        // }
        include_once('view/forum_view.php');
    } elseif ($action == "login") { //View Contact
        if (!empty($_POST)) { 
            /* extract($_POST);
            $sql = "SELECT id_candidat, nom_candidat, prenom_candidat,  email, telephone, role, nom_equipe,
            password_equipe, id_equipe, nom_region, nom_projet, id_projet, domaine, description, solution, statut, file_url 
            FROM equipe e, projet p, region r, candidat c, files f WHERE
            e.id_equipe = p.equipe AND e.id_equipe = c.equipe AND e.region = r.id_region AND
            p.file = f.id AND c.email = ?";
            $data = Manager::getSingleRecords($sql, [$email]);
            
            if (empty($data)) {
                $sql = "SELECT u.id, first_name, last_name, email, phone_number, nom_equipe,
            password_equipe, id_equipe, nom_region, nom_projet, id_projet, p.domaine, description, solution, statut, file_url 
            FROM equipe e, projet p, region r, users u, files f WHERE
            e.id_equipe = p.equipe AND e.user = u.id AND e.region = r.id_region AND
            p.file = f.id AND u.email = ? AND nom_equipe=?";
                $data = Manager::getSingleRecords($sql, [$email,$password_equipe]);
            }
            // die(var_dump($data));
            if ($data['password_equipe'] == md5($password_equipe)) {
                $_SESSION['equipe_candidat'] = $data;
                header("Location: index.php?action=forum");
            }{
                $_SESSION['message'] = "Impossible de se connecter, email ou mot de passe incorrect";
            } */
        }
        include_once('view/login_view.php');
    } elseif ($action == "notif") { //View Inscription Notification
        include_once('view/inscription_message_view.php');
    }
} else {
    include_once('view/home_view.php');
}
