<?php
    class DBConnectHelper {

        private $db;
        public $insert_id;
        public $affected_rows;

       function __construct() {
            $this->db = new mysqli('localhost', 'root', '', 'dbcemetery');
        }

        function status() {
            return $this->db->connect_error ? 'Error':'Ok';
        }
        
        function result($table, $where='', $orderby='', $limit=0) {
            $Where = (strlen($where) > 0) ? " WHERE $where":'';
            $Orderby = (strlen($orderby) > 0) ? "ORDER BY $orderby":'';
            $Limit = ($limit > 0) ? " LIMIT $limit ":'';
            $results = $this->db->query("SELECT * FROM $table $Where $Orderby $Limit");
            $data = array();
            while($row = $results->fetch_assoc()) {
                $data[] = (object) $row;
            }
            return $data;
        }

        function row($table, $where='', $orderby='') {
            $results = $this->result($table, $where, $orderby);
            return $results[0];
        }

        function delete($table, $where) {
            $result = $this->db->query("DELETE FROM $table WHERE $where");
            return $result;
        }

        function insert($table, $array_data) {
            $data = array();
            foreach($array_data as $key => $value):
                $data[] = $key . '=' . $value;
            endforeach;
            $setValue = join(", ", $data);
            $result = $this->db->query("INSERT INTO $table SET $setValue");
            $this->insert_id = $this->db->insert_id;
            return $result;
        }

        function update($table, $array_data, $where) {
            $data = array();
            foreach($array_data as $key => $value):
                $data[] = $key . '=' . $value;
            endforeach;
            $setValue = join(", ", $data);
            $result = $this->db->query("UPDATE $table SET $setValue WHERE $where");
            $this->affected_rows = $this->db->affected_rows;
            return $result;
        }

        function query($query) {
            $results = $this->db->query($query);
            $data = array();
            while($row = $results->fetch_assoc()) {
                $data[] = (object) $row;
            }
            return $data;
        }

        function is_exist($table, $where) {
            $results = $this->result($table, $where);
            return sizeof($results) > 0;
        }

        function addqoute($value) {
            return "'" . addslashes($value) . "'";
        }

    }


    $db = new DBConnectHelper();


