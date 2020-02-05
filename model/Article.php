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
    
    public function __construct()
    {
        $this->_db =  new mysqli('localhost', 'root', '', 'blog');
    }


    public function save($titre,$contenu,$typeIdArticle, $user_id,$visible){
        $q = $this->_db->prepare("INSERT INTO article (titre, user_id , contenu, type_article_id,visible) VALUES('".$titre."', ".$user_id.",'".$contenu."',".$typeIdArticle.",".$visible.")");
        $q->execute();
    }

   /* public function update($article ,$_titre,$_contenu) {
        $this->_db->exec('UPDATE $article SET titre= '.$_titre'",contenu="'.$_contenu.'" WHERE id=".$id');
    }*/

    public function delete($id) {
        $this->_db->query("DELETE FROM article WHERE id =".$id);
    }

    public function getId(){
        return $this->id;
    }

public function setId($id) {
     $this->_id = $id; 
}





}
