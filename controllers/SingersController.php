<?php 

class Singers extends Controller{
    function index() {
        $modelSingers = $this->model("ArtistsModel");
        $results = $modelSingers->getSingers();
        $data_pass = array();
        $vn_artists= array();
        $usuk_artists= array();
        $kr_artists= array();
        foreach ($results as $value){ 
            if ($value['country_name'] == 'Việt Nam')
                $vn_artists[] = $value;
            elseif($value['country_name'] == 'Âu Mĩ')
                $usuk_artists[] = $value;
            else
                $kr_artists[] = $value;
        } 
        $data_pass['vn_artists'] = $vn_artists;
        $data_pass['usuk_artists'] = $usuk_artists;
        $data_pass['kr_artists'] = $kr_artists;
        $this->view("singers/index",["json_str" => json_encode($data_pass)]);
    }
    function show(){
        
        // $this->view("singers/show",["json_str" => $_GET['id']]);
        $modelSinger = $this->model("ArtistsModel");
        $result = $modelSinger->getSinger( $_GET['id']);
        // die('ccc');
        $this->view("singers/show",['json_str' => json_encode($result)]);

    }
}

?>