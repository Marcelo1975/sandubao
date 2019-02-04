<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;

class ContactController extends Controller {
    
    private $user;
    
    public function __construct() {
       $this->user = new Users();
    }
    
    public function index() {
        $array = array(
           'user' => $this->user,
           'warning' => ''
        );

        if(isset($_POST['name']) && !empty($_POST['name'])) {
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $subjectmatter = addslashes($_POST['subjectmatter']);
            $msg = addslashes($_POST['msg']);

            $to = "cecel.alex@gmail.com";
            $body = "Nome: ".$name." - E-mail: ".$email." - Mensagem: ".$msg;
            $header = "From: cecel.alex@gmail.com"."\n\r".
                      "Replay-To: ".$email."\r\n".
                      "X-Mailer: PHP/".phpversion();
            //mail($to, $subjectmatter, $body, $header);

            $array['warning'] = "E-mail enviado com sucesso!";
        } 

        $this->loadTemplate('contact', $array);
    }

}