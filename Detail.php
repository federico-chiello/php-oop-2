<?php
require_once 'User.php';

class Detail extends User {
    public $like = 0;
    public $post;

    public function __construct($_nome, $_cognome, $_post, $_like){
        parent::__construct($_nome,$_cognome);
        $this->like = $_like;
        $this->post = $_post;
    }
}
