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

    //Metodo
    public function setEta($_eta){
        if($_eta < 18 || $_eta > 65 || !is_numeric($_eta)){
          throw new Exception('I dati inseriti non sono corretti.');
        } else {
          $this->eta = $_eta;
        }
      }
    
      public function getEta(){
        return $this->eta;
      }
}


$utente1 = new User('Riccardo', 'Neri');
$utente1->email = 'ricky_92@gmail.com';
$utente1->username = 'nerone_7';
$utente1->password = 'ciwbc1w9c49';
$utente1->like = 35;
$utente1->post = 2;


try {
    $utente1->setEta(16);
  } catch(Exception $e){
    echo $e->getMessage();
  }

var_dump($utente1);

$utente2 = new User('Lorenzo', 'Onorato');
$utente2->email = 'lollo@gmail.com';
$utente2->username = 'renzo24';
$utente2->password = 'edh893hd92dqp';
$utente1->like = 40;

try {
    $utente2->setEta(27);
  } catch(Exception $e){
    echo $e->getMessage();
  }
var_dump($utente2);