<?php
    class Compiler {

        public function find_array($sql) {
            $query = mysqli_query($this->conn, $sql);
			$data = array();

			while ($row = mysqli_fetch_array($query)) {
				$data[] = $row;
			}
			return $data;
        }

        public function find_one($sql) {
            $result = mysqli_query($this->conn, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                return $row;
            }
        }

        public function count_num($sql) {
            $result = mysqli_query($this->conn, $sql);

			if ($result) {
				$row_count = mysqli_num_rows($result);
				return $row_count;
			}

            return 0;
        }

        public function save($sql) {
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}

        public function str_injector($param) {
			return mysqli_real_escape_string($this->conn, $param);
		}
    }
?>