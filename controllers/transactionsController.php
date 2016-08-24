<?php

class Transactions extends AppController
{
    public function __Construct(){
        parent:: __construct();
    }
	public function index(){
        $conditions = array("conditions"=>"transactions.category_id=categories.id and transactions.account_id=accounts.id", "order" => "transactions.id desc");
        $transactions = $this->db->find("transactions, categories, accounts", "all", $conditions);
        $transactions = $transacions = $transactions->fetchAll(PDO::FETCH_NUM);
        $this->set("transactions", $transactions);
	}
	public function add(){
		if ($_POST) {
			if ($this->db->save("transactions", $_POST)) {
				$this->redirect(array("controller"=>"transactions"));
			}else{
				$this->redirect(array("controller"=>"transactions", "action"=>"add"));
			}
		}
		$categories = $this->db->find("categories");
		$accounts = $this->db->find("accounts");
		$this->set("categories", $categories);
		$this->set("accounts", $accounts);
	}
	public function edit($args){
        $categories = $this->db->find("categories","all");
	    $accounts = $this->db->find("accounts");
	    $this->set("categories", $categories);
	    $this->set("accounts", $accounts);

        if ($_POST) {
            $filter = new Validations();
        if (!empty($_POST['update'])) {
            $_POST['account_id'] = $filter->sanitizeText($_POST["new_account"]);
            $_POST['category_id'] = $filter->sanitizeText($_POST["new_category_id"]);
            $_POST['description'] = $filter->sanitizeText($_POST["new_description"]);
            $_POST['date'] = $filter->sanitizeText($_POST["new_date"]);
            $_POST['amount'] = $filter->sanitizeText($_POST["new_amount"]);
        }
    if ($this->db->update("transactions",$_POST)) {
            $this->redirect(array("controller"=>"transactions"));
            }else{
                $this->redirect(array("controller"=>"transactions","action"=>"edit/".$args[0]));
            }
        }
            $transaction = $this->db->find("transactions","first", array("conditions"=>"transactions.id=".$args[0]));
            $this->set("transaction", $transaction);
    }
	public function delete(){
        if ($_GET) {
		       if (!empty($_GET['id'])) {
		          $condition = "id=".$_GET['id'];
		          $this->db->delete("transactions", $condition);
		        if ($this->db->numberRows>0) {
		          echo "transaccion eliminado!";
		          }else{
		              echo "nose a eliminado";
		          }
		       }

		  }
	}
}