<?php
class User
{
    private $_id;
    private $_prenom;
    private $_nom;
    private $_age;
    private $_mdp;

    public function getId()
    {
        return $this->id;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function ger()
    {
        return $this->id;
    }

    public function save()
    {
        $q = $this->_db->prepare('INSERT INTO personnages(nom, forcePerso, degats, niveau, experience) VALUES(:nom, :forcePerso, :degats, :niveau, :experience)');
    }

   /* public function update($article ,$titre,$_contenu) {
        $this->_db->exec('UPDATE $article SET titre= $titre ,contenu='".$resultat."' WHERE id=".$id');
    }*/

    public function delete($id) {
        $this->_db->exec('DELETE * FROM Article');

    }


}
