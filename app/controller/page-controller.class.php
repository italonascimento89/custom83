<?php

class PagesController {
    private static $PagesController;
    private static $validate;

    function __construct(){
    }

    public static function getPagesController() {
        if (empty(self::$PagesController)) {
            self::$PagesController = new PagesController();
        }
        return self::$PagesController;
    }

    public function login() {
        require_once ('app/view/autenticacao.php');
        if(isset($_SESSION['erro-email'])) $this->unsetSessionError('erro-email');
    }

    public function cliente() {
        require_once ('app/view/consultacliente.php');
    }

    public function autenticarUser() {
        self::$validate = new DataValidator();

        self::$validate->set('email', $_POST['email'])->is_required()->is_email();
        self::$validate->set('senha', $_POST['senha'])->is_required();

        if (self::$validate->validate()){
            $login  = Login::getInstanceLogin();

            $login->setEmail($_POST['email']);
            $login->setPassword($_POST['senha']);

            $d_logar = new DaoLogin($login);

            if($d_logar->loginDb()){
                if(isset($_SESSION['erro-email'])) $this->unsetSessionError('erro-email');

                self::cliente();
                die;
            } else {
                //ELSE PARA EMAIL OU SENHA INVALIDA
                self::$validate->set($_POST['email'], '')->no_found();
                $this->getErro();
                header('Location: /login');
                die;
            }
        } else {
            //ELSE PARA CAMPO INPUT INVALIDO
            $this->getErro();
            header('Location: /login');
            die;
        }
    }

    protected function unsetSessionError($campo) {
        unset($_SESSION[$campo]);
    }

    protected function getErro(){
        $array = self::$validate->get_errors();

        foreach ($array as $key => $value) { }

        $_SESSION['erro-email'] = $key;
    }
}
