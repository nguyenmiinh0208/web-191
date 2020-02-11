<?php 
class User extends Controller {

    public function index() {
        $model = $this->model("UserModel");
        $results = $model->getYourMusic();
        $data = ["results" => $results];

        // $view = $this->view("profile");
        $this->view("profile", [
            "data"=>$data
        ]);
        // $view = $this->view("profile");
    
    }

    function single() {
        $view = $this->view("single");
    }
}
?>