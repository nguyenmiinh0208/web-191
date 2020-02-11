<?php 

class Database {
    public $conn;
    protected $localhost = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $dbName = "zingmp3";


    function __construct() {
        if (!$this->conn) {
            // Kết nối
            $this->conn = mysqli_connect($this->localhost, $this->user, $this->pass, $this->dbName) or die('Connect Error');
            mysqli_select_db($this->conn, $this->dbName);
            mysqli_query($this->conn, "set names 'utf8'");
        }
    }

    function insert($table, $data) {
        $value_list = '';

        // Lặp qua data
        foreach ($data as $key => $value) {
            $value_list .= ",'" . mysqli_escape_string($this->conn, $value) . "'";
        }

        // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'INSERT INTO ' . $table . ' VALUES (' . trim($value_list, ',') . ')';
        return mysqli_query($this->conn, $sql);
    }

    function update($sql) {
        return mysqli_query($this->conn, $sql);
    }

    function remove($table, $where) {
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->conn, $sql);
    }

    function getListItem($sql) {
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            die('sql query wrong ! ' . $sql);
        }

        $return = array();
        // Lặp qua kết quả để đưa vào mảng
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
        return $return;
    }

    // Hàm lấy chi tiết 1 record
    function getRow($sql) {
        $result = mysqli_query($this->conn, $sql);
        if (!$result) {
            die('sql query wrong ! ' . $sql);
        }
        $row = mysqli_fetch_assoc($result);
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);

        if ($row) {
            return $row;
        }

        $msg = ["msg" => $sql];
        return json_encode($msg);
    }

}




?>