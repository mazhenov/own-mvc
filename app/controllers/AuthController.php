<?php

class AuthController extends Controller {

	public function __construct() {
        authTest(false);
    }

	public function actionIndex(){
		$this->view('login');
	}

	public function actionLogin(){
		$v = new Valitron\Validator($_POST);
		$v->rule('required', ['email', 'password']);
		$v->rule('email', 'email');
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		if($v->validate()) {
    		$this->addModel('User');
			$data = new $this->data;
			$data = $data->loginByEmail($email, $password);
			if(!isset($data['id'])){

			}
			else {
				
			}
		}
		else {
    		print_r($v->errors());
		}
		
	}
}