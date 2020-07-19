<?php
        //Pour la connexion à la base de donnée
        $this->config["host"] = 'localhost';
        $this->config["db_name"] = 'dromadaire';
        $this->config["username"] = 'root';
        $this->config["password_"] = '';
$this->config["tables"] = ['actions','agence','billet','client','files','module','module_role','news','pays','post','reservation','roles','tarif','type_agent','users','ville',];

$this->config['tables']['actions'] = ['id','name','description','action_url','module',];

$this->config['tables']['actions']['id'] = ['id'];

$this->config['tables']['agence'] = ['id_agence','code_agence','nom_agence','ville',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];

$this->config['tables']['billet'] = ['id_billet','code_billet','created_at','user_create','depart','destination',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];

$this->config['tables']['client'] = ['id_client','nom','prenom','tel','email','fonction','nationalite','login','pass',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];

$this->config['tables']['files'] = ['id','file_name','file_url','file_type','file_size',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];

$this->config['tables']['module'] = ['id','name','icon','description','action_url','sub_module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];

$this->config['tables']['module_role'] = ['id','role_id','module',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];

$this->config['tables']['news'] = ['id_news','mail',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];

$this->config['tables']['pays'] = ['id_pays','nom',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];$this->config['tables']['pays']['id'] = ['id_pays'];

$this->config['tables']['post'] = ['id_post','intitule_post','description','theme','created_at','user_create','file',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['post']['id'] = ['id_post'];

$this->config['tables']['reservation'] = ['id_reservation','client','billet','date','heure','etat','place','cout',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['post']['id'] = ['id_post'];$this->config['tables']['reservation']['id'] = ['id_reservation'];

$this->config['tables']['roles'] = ['id','name','description',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['post']['id'] = ['id_post'];$this->config['tables']['reservation']['id'] = ['id_reservation'];$this->config['tables']['roles']['id'] = ['id'];

$this->config['tables']['tarif'] = ['id_tarif','code_tarif','valeur',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['post']['id'] = ['id_post'];$this->config['tables']['reservation']['id'] = ['id_reservation'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['tarif']['id'] = ['id_tarif'];

$this->config['tables']['type_agent'] = ['id','label',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['post']['id'] = ['id_post'];$this->config['tables']['reservation']['id'] = ['id_reservation'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['tarif']['id'] = ['id_tarif'];$this->config['tables']['type_agent']['id'] = ['id'];

$this->config['tables']['users'] = ['id','first_name','last_name','matricule','phone_number','type_agent','created_at','updated_at','photo','role','status','password_',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['post']['id'] = ['id_post'];$this->config['tables']['reservation']['id'] = ['id_reservation'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['tarif']['id'] = ['id_tarif'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];

$this->config['tables']['ville'] = ['id_ville','intitule','pays','tarif',];

$this->config['tables']['actions']['id'] = ['id'];$this->config['tables']['agence']['id'] = ['id_agence'];$this->config['tables']['billet']['id'] = ['id_billet'];$this->config['tables']['client']['id'] = ['id_client'];$this->config['tables']['files']['id'] = ['id'];$this->config['tables']['module']['id'] = ['id'];$this->config['tables']['module_role']['id'] = ['id'];$this->config['tables']['news']['id'] = ['id_news'];$this->config['tables']['pays']['id'] = ['id_pays'];$this->config['tables']['post']['id'] = ['id_post'];$this->config['tables']['reservation']['id'] = ['id_reservation'];$this->config['tables']['roles']['id'] = ['id'];$this->config['tables']['tarif']['id'] = ['id_tarif'];$this->config['tables']['type_agent']['id'] = ['id'];$this->config['tables']['users']['id'] = ['id'];$this->config['tables']['ville']['id'] = ['id_ville'];
