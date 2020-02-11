<?php 

class Searchpage extends Controller {

    public function index() {
        // $modelUser = $this->model("UserModel");

        // $this->view("index", [
        //     "info" => $modelUser->selectAll()
        // ]);
        
            // $this->view("singers/show",["json_str" => $_GET['id']]);
        $modelSearch = $this->model("SearchModel");
        $result = $modelSearch->getSearchresult( $_GET['key']);
        // die('ccc');
        $this->view("searchpage",['json_str' => json_encode($result)]);    
    }
    
}
?>