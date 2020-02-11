<?php 

class Index extends Controller {
    function index() {
        //get hot singers
        $modelSingers = $this->model("ArtistsModel");
        $results = $modelSingers->getHotSinger();
        $results_active = array_slice($results,0,4);
        $results_hide = array_slice($results,4,8);
        $dataSingers = ["results_active" => $results_active, "results_hide" => $results_hide];
        
        //get categories
        $songModel = $this->model("SongModel");
        $listCategories = $songModel->getCategories();
        $list_first = array_slice($listCategories,0,4);
        $list_second = array_slice($listCategories,4,8);
        $dataCategories = ["list_first" =>$list_first, "list_second" => $list_second];

        //get Albums hot
        $listAlbums = $songModel->getAlbums();
        // get chart
        $chartModel = $this->model("ChartModel");
        $resutChart = $chartModel->getChart();
        $idListChart = [];
        foreach ($resutChart as $item) {
            array_push($idListChart, $item["idSong"]);
        }

        $this->view("index", [
            "singers"=>$dataSingers,
            "categories" => $dataCategories,
            "listAlbums" => $listAlbums,
            "listChart" => $idListChart
        ]);
    }

    function login() {
        // $username = $_POST["username"];
        // $password = $_POST["password"];
        // $loginModel = $this->model("LoginModel");
        // $result = $loginModel->checkLogin($username, $password);
        // if (count($result) > 0) {
        //     $_SESSION["username"] = $username;
        //     $_SESSION["name"] = $result[0]["name"];
        //     $_SESSION["id"] = $result[0]["id"];
        //     return "1";
        // } else {
        //     return "0";
        // }

        return "cac";
    }
}

?>