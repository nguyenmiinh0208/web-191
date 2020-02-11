<?php 

class Album extends Controller{
    function index() {
        //get albums
        $modelAlbums = $this->model("AlbumsModel");
        $resultsVN = $modelAlbums->getAlbumsVN();
        $resultsUSUK = $modelAlbums->getAlbumsUSUK();
        $resultsKPOP = $modelAlbums->getAlbumsKPOP();
    
        $this->view("album", 
            ["listSongVN" => $resultsVN,
            "listSongUSUK" => $resultsUSUK,
            "listSongKPOP" => $resultsKPOP
            ]);
    }

    function single() {
        $view = $this->view("single");
    }
}

?>