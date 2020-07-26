<?php

require "model/Manager.php";
session_start();
if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action == "home") {
        if($_POST){// View Etape 1 de la Reservation
            $data = $_POST;
            //var_dump($data);
            //die();
            $reservation = array();
            $reservation['date'] = $data['date'];
            $reservation['heure'] = $data['heure'];
            unset($data['date']);
            unset($data['heure']);
            $manager  = new Manager();
            $res = $manager->insert($data, "billet");
            $database = Manager::bdd();
            $res['lastId'] = $database->lastInsertId();
            if (!empty($res['lastId'])) {
                $reservation['billet'] = $res['lastId'];
            }
            $res = $manager->insert($reservation, "reservation");
            $res['lastId'] = $database->lastInsertId();
            if($res['error'] == false){
                header('Location: index.php?action=reservation&id=' . $res['lastId']);
            }
        }
        include_once('view/home_view.php');
    } elseif ($action == "reservation") { //View Etape 2 de la Reservation
        if($_POST){
            $data = $_POST;
            $reservation = array();
            //$reservation['etat'] = $data['etat'];
            $reservation['place'] = $data['place'];
            $reservation['cout'] = $data['cout'];
            //unset($data['etat']);
            unset($data['place']);
            unset($data['cout']);
            $manager  = new Manager();
            $res = $manager->insert($data, "client");
            $database = Manager::bdd();
            $res['lastId'] = $database->lastInsertId();
            if (!empty($res['lastId'])) {
                $reservation['client'] = $res['lastId'];
                Manager::updateData($reservation, 'reservation', 'id_reservation', $_GET['id']);
            }
            if($res['error'] == false){
                header('Location: index.php?action=reservation&c=' . $res['lastId']);
            }
            
            $res = $manager->insert($reservation, "reservation");
            $res['lastId'] = $database->lastInsertId();
            
        }
        include_once('view/reservation_view.php');
    } elseif ($action == "media") { //View Media
        include_once('view/media_view.php');
    } elseif ($action == "service") { //View Nos services
        include_once('view/service_view.php');
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
