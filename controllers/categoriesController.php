<?php

class Categories extends AppController
{
	public function index(){
        $categories = $this->db->find("categories");
        $this->set("categories", $categories);
	}
	public function add(){
		if ($_POST) {
			if ($this->db->save("categories", $_POST)) {
				$this->redirect(array("controller"=>"categories"));
			}else{
				$this->redirect(array("controller"=>"categories", "action"=>"add"));
			}
		}
	}
	public function edit($args){
        if($_POST){
            $filter = new Validations();
            if(!empty($_POST['new_name'])){
                $_POST['name'] = $filter->sanitizeText($_POST["new_name"]);
            }
            if($this->db->update("categories", $_POST)){
                $this->redirect(array("controller"=>"categories"));
            }else{
                $this->redirect(array("controller"=>"categories","action"=>"edit/".$args[0]));
            }
        }
        $category = $this->db->find("categories","first",array("conditions"=>"categories.id=".$args[0]));
        $this->set("category", $category);
	}
	public function delete(){
        if($_GET){
            if(!empty($_GET['id'])){
                $condition = "id=".$_GET['id'];
                $this->db->delete("categories", $condition);
            if($this->db->numberRows>0){
                echo "Registro eliminado!";
                }else{
                echo "Registro no eliminado";
                }
            }
        }
	}
}