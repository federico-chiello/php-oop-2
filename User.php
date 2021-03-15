<?php 
class User {
    //Proprietà
    public $nome;
    public $cognome;
    public $email;
    public $eta;
    public $username;
    public $password;

    //Construct
    public function __construct($_nome, $_cognome){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }
}


$utente1 = new User('Riccardo', 'Neri');
$utente1->email = 'ricky_92@gmail.com';
$utente1->eta = 25;
$utente1->username = 'nerone_7';
$utente1->password = 'ciwbc1w9c49';
var_dump($utente1);