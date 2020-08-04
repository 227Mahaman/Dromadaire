<?php
if (empty($_SESSION['client'])) {
	header("Location:index.php?action=login");
}
$title = "Espace Client";
$sql = "SELECT COUNT(client) nb FROM reservation WHERE client = ?";
$nb = Manager::getSingleRecords($sql, [$_SESSION['client']['id_client']])['nb'];
$sql = "SELECT COUNT(client) nb FROM reservation WHERE client = ? AND etat='OUI'";
$nba = Manager::getSingleRecords($sql, [$_SESSION['client']['id_client']])['nb'];
$sql = "SELECT COUNT(client) nb FROM reservation WHERE client = ? AND (etat='NON' OR etat!='OUI')";
$nbn = Manager::getSingleRecords($sql, [$_SESSION['client']['id_client']])['nb'];

$sql = "SELECT date, heure, etat, place, cout FROM reservation WHERE client = ?";
$datas = Manager::getMultiplesRecords($sql, [$_SESSION['client']['id_client']]);
$sql = "SELECT date, heure, etat, place, cout FROM reservation WHERE client = ? AND etat='OUI'";
$datasa = Manager::getMultiplesRecords($sql, [$_SESSION['client']['id_client']]);
$sql = "SELECT date, heure, etat, place, cout FROM reservation WHERE client = ? AND etat='NON'";
$datasn = Manager::getMultiplesRecords($sql, [$_SESSION['client']['id_client']]);
setlocale(LC_TIME, "fr_FR"); 
ob_start();
?>
<style>
	html,
	body {
		height: 100%;
		padding: 0;
		background: rgba(0, 0, 0, 0.02) !important;
	}

	.card-header {
		background-image: url('public/img/adventure-1850713_1920.jpg') !important;
		padding: 0 !important;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		height: 350px;
		position: relative;
		display: flex;
		justify-content: center;
		text-align: center;
	}

	.card {
		overflow: hidden;
		border: 0 !important;
		width: 90%;
		box-shadow: 0px 0px 15px 1px;
		-webkit-box-shadow: 0px 0px 15px 1px;
	}

	.profile_pic {
		position: absolute;
		bottom: -50px;
		height: 112px;
		width: 112px;
		padding: 5px;
		border: 2px solid #f39c12;
		border-radius: 50%;
	}

	.card-body {
		padding-top: 55px !important;
	}

	.profile_pic img {
		height: 100px;
		width: 100px;
		border-radius: 50%;
	}

	.name_container {
		display: flex;
		justify-content: center;

	}

	.name {
		font-size: 20px;
		font-weight: 700;
		color: gray;
		position: relative;
	}

	.name::after {
		font-family: "Font Awesome 5 Free";
		content: '\f058';
		position: absolute;
		right: -15px;
		top: 0;
		font-size: 15px;
		font-weight: 700;
		color: #4CAF50;
	}

	.address {
		display: flex;
		justify-content: center;
		font-size: 12px;
		color: gray;
	}

	.follow {
		padding-top: 20px;
		display: flex;
		justify-content: center;
	}

	.follow_btn {
		background: #2196F3;
		padding: 7px;
		color: #fff;
		border-radius: 12px;
		cursor: pointer;
	}

	.follow_btn::before {
		font-family: "Font Awesome 5 Free";
		content: "\f234";
		font-weight: 600;
		margin-right: 5px;



	}

	.follow_btn:hover {
		background: #f39c12;
	}

	.info_container {
		padding-top: 20px;
		display: flex;
		justify-content: space-around;
		flex-direction: row;
	}

	.info {
		display: flex;
		flex-direction: column;
	}

	.info p:first-child {
		margin-bottom: 0;
		font-size: 12px;
		color: gray;
		text-transform: uppercase;
		text-align: center;
	}

	.info p:last-child {
		margin-bottom: 0;
		font-size: 20px;
		font-weight: 700;
		color: gray;
		text-transform: uppercase;
		text-align: center;
	}

	.card-footer {
		padding: 0 !important;
		background: #fff !important;
		display: flex;
		border-top: 0 !important;
	}

	.message {
		display: flex;
		justify-content: center;
		padding: 10px;
		width: 50%;
		text-transform: uppercase;
		background: #f39c12;
		color: #fff;
		cursor: pointer;
		border-bottom-right-radius: calc(0.25rem - 1px);
	}

	.message::before {
		font-family: "Font Awesome 5 Free";
		content: "\f27a";
		font-weight: 600;
		margin-right: 5px;
	}

	.view_profile {
		display: flex;
		justify-content: center;
		padding: 10px;
		width: 50%;
		text-transform: uppercase;
		background: #e74c3c;
		color: #fff;
		cursor: pointer;
		border-bottom-left-radius: calc(0.25rem - 1px);

	}

	.view_profile::before {
		font-family: "Font Awesome 5 Free";
		content: "\f406";
		margin-right: 5px;
		font-weight: 600;
	}
</style>
<!-- Property Section Begin -->
<section class="property-section spad">
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="card">
				<div class="card-header">
					<div style="background-color: #fff;" class="profile_pic">
						<img src="public/img/logo/Logo-sonef.png">
					</div>
				</div>
				<div class="card-body">
					<div class="d-lfex justify-content-center flex-column">
						<div class="name_container">
							<div class="name"><?= $_SESSION['client']['nom'] ?></div>
						</div>
						<div class="address"><?= $_SESSION['client']['prenom'] ?></div>
					</div>
					<!-- <div class="follow">
							<div class="follow_btn">Follow</div>
						</div> -->
					<div class="info_container">
						<div class="info">
							<p>Billet reserver</p>
							<p><?= $nb ?></p>
						</div>
						<div class="info">
							<p>Billet acheter</p>
							<p><?= $nba ?></p>
						</div>
						<div class="info">
							<p>Billet non acheter</p>
							<p><?= $nbn ?></p>
						</div>
					</div>
				</div>
				<!-- <div class="card-footer">
						<div class="view_profile">
							View profile
						</div>
						<div class="message">
							Message
						</div>
					</div> -->
			</div>
		</div>
		<div class="row mt-2">
			<div class="col">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Tout</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Billet acheter</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">Billet non acheter</a>
					</li>
					<!-- <li class="nav-item">
					<a class="nav-link" id="links-tab" data-toggle="tab" href="#links" role="tab" aria-controls="links" aria-selected="false">Links</a>
				</li> -->
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Date départ</th>
									<th>Heure</th>
									<th>Nombre de billet</th>
									<th>Prix</th>
									<th>État</th>
								</tr>
								<?php

								if (is_array($datas) || is_object($datas)) {
									foreach ($datas as $value) {

										//var_dump(Manager::getData('module', "id", $value['sub_module'])); die;
								?>
										<tr>
											<td><?php echo strftime("%A le %d %B, %Y", strtotime( $value['date'] )); ?></td>
											<td><?= $value['heure'] ?></td>
											<td><?= $value['place'] ?></td>
											<td><?= $value['cout'] ?></td>
											<td><?= $value['etat'] == "OUI" ? "Acheter" : "Non acheter" ?></td>
										</tr>
								<?php
									}
								} else {
									Manager::messages('Aucune donnée trouvé', 'alert-warning');
								}
								?>
							</tbody>
						</table>
					</div>

					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Date départ</th>
									<th>Heure</th>
									<th>Nombre de billet</th>
									<th>Prix</th>
									<th>État</th>
								</tr>
								<?php

								if (is_array($datasa) || is_object($datasa)) {
									foreach ($datasa as $value) {

										//var_dump(Manager::getData('module', "id", $value['sub_module'])); die;
								?>
										<tr>
											<td><?php echo  strftime("%A le %d %B, %Y", strtotime( $value['date'] ));?></td>
											<td><?= $value['heure'] ?></td>
											<td><?= $value['place'] ?></td>
											<td><?= $value['cout'] ?></td>
											<td><?= $value['etat'] == "OUI" ? "Acheter" : "Non acheter" ?></td>
										</tr>
								<?php
									}
								} else {
									Manager::messages('Aucune donnée trouvé', 'alert-warning');
								}
								?>
							</tbody>
						</table>
					</div>

					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
					<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Date départ</th>
									<th>Heure</th>
									<th>Nombre de billet</th>
									<th>Prix</th>
									<th>État</th>
								</tr>
								<?php

								if (is_array($datasn) || is_object($datasn)) {
									foreach ($datasn as $value) {

										//var_dump(Manager::getData('module', "id", $value['sub_module'])); die;
								?>
										<tr>
											<td><?php echo strftime("%A le %d %B, %Y", strtotime( $value['date'] )); ?></td>
											<td><?= $value['heure'] ?></td>
											<td><?= $value['place'] ?></td>
											<td><?= $value['cout'] ?></td>
											<td><?= $value['etat'] == "OUI" ? "Acheter" : "Non acheter" ?></td>
										</tr>
								<?php
									}
								} else {
									Manager::messages('Aucune donnée trouvé', 'alert-warning');
								}
								?>
							</tbody>
						</table>
					</div>

					<div class="tab-pane fade" id="links" role="tabpanel" aria-labelledby="links-tab">
						<table class="table table-hover table-sm table-properties">
							<tr v-show="user['@id']">
								<th>@id</th>
								<td><a v-bind:href="user['@id']">{{user["@id"]}}</a></td>
							</tr>
							<tr v-show="user.me">
								<th>me</th>
								<td><a v-bind:href="user.me">{{user.me}}</a></td>
							</tr>
							<tr v-show="user.website">
								<th>website</th>
								<td><a v-bind:href="user.website">{{user.website}}</a></td>
							</tr>
							<tr v-show="user.profile">
								<th>profile</th>
								<td><a v-bind:href="user.profile">{{user.profile}}</a></td>
							</tr>
							<tr v-show="user.webmail">
								<th>webmail</th>
								<td><a v-bind:href="user.webmail">{{user.webmail}}</a></td>
							</tr>
						</table>
					</div>
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