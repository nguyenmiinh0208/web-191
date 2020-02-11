<?php 

class Chart extends Controller{
    function index() {
        $modelChart = $this->model("ChartModel");
        $result = $modelChart->getChart();
        $this->view("chart", 
            ["chart" => $result]
            );
        
    }
}

?>