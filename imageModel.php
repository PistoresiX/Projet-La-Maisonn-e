<?php

class ImageModel extends CI_Model
{
    public function revue()
    {

        // Exécute la requête 
        $results = $this->db->query("SELECT class.*, actuality.*,media.*
            FROM class
            JOIN actuality ON class.cla_id = actuality.cla_id
            JOIN detail ON actuality.actu_id = detail.actu_id
            JOIN media ON detail.med_id = media.med_id
            WHERE cla_name = '' LIMIT 1");

        // Récupération des résultats    
        $aListe = $results->result();
    }

    public function articles($nomclasse)
    {

        // Exécute la requête 
        $results = $this->db->query("SELECT actuality.*
        FROM actuality
        JOIN class ON actuality.cla_id = class.cla_id
        WHERE cla_name = '$nomclasse'");

        // Récupération des résultats    
        $tab_articles = $results->result_array();
        //var_dump(sizeof($tab_articles));
        //    foreach($tab_articles as $art)
        for ($i = 0; $i < sizeof($tab_articles); $i++) {
            //var_dump($tab_articles[$i]);

            $art = $tab_articles[$i];
            $idarticle = $art['actu_id'];
            $tabmedias = $this->medias($idarticle);
            //var_dump($tabmedias);
            $tab_articles[$i]['medias'] = $tabmedias;
            //$art['medias'] = $tabmedias;
        }
        //var_dump($tab_articles);

        return $tab_articles;
    }


    public function medias($idarticle)
    {

        // Exécute la requête 
        $results = $this->db->query("SELECT media.*
    FROM detail
    JOIN media ON detail.med_id = media.med_id
    WHERE detail.actu_id = $idarticle");

        // Récupération des résultats    
        $tab_medias = $results->result_array();

        return $tab_medias;
    }
}
