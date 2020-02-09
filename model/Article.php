<?php
class Article
{
    private $_id;
    private $_titre;
    private $_user_id;
    private $_contenu;
    private $_type_article_id;
    private $_visible;
    private $_db;

    public function __construct($id = null,$titre = null,$contenu = null,$typeIdArticle = null)
    {
        if ( !empty($id) ){
            $this->_id = $id;
        }
        $this->_titre =  $titre;
        $this->_contenu = $contenu;
        $this->_type_article_id = $typeIdArticle;
        $this->_db =  new mysqli('localhost', 'root', '', 'blog');
    }
    
    public function save($titre,$contenu,$typeIdArticle, $user_id,$visible){
        $q = $this->_db->prepare("INSERT INTO article (titre, user_id , contenu, type_article_id,visible) VALUES('".$titre."', ".$user_id.",'".$contenu."',".$typeIdArticle.",".$visible.")");
        $q->execute();
    }

    public function update() {

       $q = $this->_db->prepare('UPDATE article SET titre= "'.$this->_titre.'",contenu="'.$this->_contenu.'" WHERE id='.$this->_id);
       $result = $q->execute();
       if( $result){
            return true;
        }
        return false;
    }

    public function delete($id) {
        $this->_db->query("DELETE FROM article WHERE id =".$id);
    }

    
    public function view($id) {
        $update = false;
        $titre = '';
        $contenu = '';
        $result =  $this->_db->query("SELECT * FROM article WHERE id = ". $id);
        $data = $result->fetch_array();
        $this->setId($data['id']);
        $this->setTitre($data['titre']);
        $this->setContenu($data['contenu']);

    }


    public function getId(){
        return $this->_id;
    }

public function setId($id) {
     $this->_id = $id; 
}

public function getContenu() {
    return $this->_contenu;
}

public function setContenu($contenu){
    $resultat = addslashes($contenu);
    $this->_contenu = $resultat;
}

public function getTitre(){
    return $this->_titre;
}

public function setTitre($titre){
     $this->_titre = $titre;
}


}
