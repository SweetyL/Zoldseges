<?php
    Class Termek{
        private $id;
        private $nev;

        public function set_termek($id, $conn) {
            $sql = "SELECT termekID, nev FROM termekek";
            $sql .= " WHERE termekID = ".$id."";
            $result = $conn->query($sql);
            if ($conn->query($sql)) {
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $this->id = $row['termekID'];
                    $this->nev = $row['nev'];
                } 
            }
        }

        public function get_id(){
            return $this->id;
        }
    
        public function get_nev(){
            return $this->nev;
        }

        public function get_mass($id,$conn){
            $sql = "SELECT mennyiseg FROM `termekek` INNER JOIN keszlet ON termekek.termekID=keszlet.termekID WHERE termekek.termekID = ".$id;
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($result->num_rows == 0){
                return "0 kg";
            }else{
                return $row['mennyiseg'];
            }
        }

        public function termekList($conn) {
            $list = array();
            $sql = "SELECT termekID FROM termekek";
            if($result = $conn->query($sql)) {
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $list[] = $row['termekID'];
                    }
                }
            }
            return $list;
        }
    }
?> 