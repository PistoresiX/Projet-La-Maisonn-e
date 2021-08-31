<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
     class Upload extends CI_Controller{  //la classe Produits hérite de la classe CI_Controller.
       
	

		public function activite() //permet de charger une vue directement pour cela elle doit estre placer dans la partie "view"
		{
            // Appel des vues
			$this->load->view('entete');
			$this->load->view('activite');
            $this->load->view('footer');
		}

///////////////////////////////////////////
public function revue()
{
	$this->load->model('ImageModel');
	$aListe = $this->ImageModel->articles('revue de presse');
	// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
	$aView["articles"] = $aListe;
	// var_dump($aView["media"]);
	$this->load->view('entete');
	$this->load->view('revue',$aView);
	$this->load->view('footer');

}

	public function action()
	{
		$this->load->model('ImageModel');
		$aListe = $this->ImageModel->articles('action insertion sociale');
		//var_dump($aListe);
		// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
		$aView["articles"] = $aListe;

		$this->load->view('entete');
		$this->load->view('action', $aView);
        $this->load->view('footer');
	}
/////////////////////////////////////////////
	 public function chantier()
	 {
		$aListe = $this->ImageModel->articles('nos travaux en cours');

		// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
		$aView["articles"] = $aListe;

		$this->load->view('entete');
		$this->load->view('chantier', $aView);
        $this->load->view('footer');
	}

	}

	
?>
<!-- http://localhost/ci/index.php/Upload/activite -->