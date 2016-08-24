<?php

class Accounts extends AppController
{
    /*public __construct(){
        parent:: __construct();
    }*/
	public function index(){
        $accounts = $this->db->find("accounts");
        $this->set("accounts", $accounts);
	}
	public function add(){
		if ($_POST) {
			if ($this->db->save("accounts", $_POST)) {
				$this->redirect(array("controller"=>"accounts"));
			}else{
				$this->redirect(array("controller"=>"accounts", "action"=>"add"));
			}
		}
		$users = $this->db->find("users");
		$this->set("users", $users);
	}
	public function edit($args){
        if($_POST){
            $filter = new Validations();
            if(!empty($_POST['new_name'])){
                $_POST['name'] = $filter->sanitizeText($_POST["new_name"]);
            }
            if($this->db->update("accounts", $_POST)){
                $this->redirect(array("controller"=>"accounts"));
            }else{
                $this->redirect(array("controller"=>"accounts","action"=>"edit/".$args[0]));
            }
        }
        $account = $this->db->find("accounts","first",array("conditions"=>"accounts.id=".$args[0]));
        $this->set("account", $account);
	}
	public function delete(){
        if($_GET){
            if(!empty($_GET['id'])){
                $condition = "id=".$_GET['id'];
                $this->db->delete("accounts", $condition);
            if($this->db->numberRows>0){
                echo "Registro eliminado!";
            }else{
                echo "Registro no eliminado";
                }
            }
        }
	}
}