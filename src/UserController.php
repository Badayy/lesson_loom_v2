<?php
    include_once 'config/database.php';

    class UserController extends Database {

        public function user_role() {
            $result = array('success' => false);

            try {
                $sql = "SELECT * FROM user_role";
                $count = $this->count_num($sql);
                $data = $this->find_array($sql);

                if ($count > 0) {
                    $result = array(
                        'success' => true,
                        'data' => $data
                    );
                }

            } catch(\Exception $e) {
                $result['error'] = $e->getMessage();
            }

            return $result;
        }

        public function login($request) {
            $result = array('success' => false);
            try {
                $email = $this->str_injector($request['email']);
                $password = $this->str_injector($request['password']);
                $role = $this->str_injector($request['role']);

                $sql = "SELECT 
                            user.*,
                            (CASE
                                WHEN user.user_role = 1 THEN 'Admin'
                                WHEN user.user_role = 2 THEN 'School'
                                WHEN user.user_role = 3 THEN 'Teacher'
                            END) AS role_name
                        FROM 
                            users user
                        WHERE 
                            user.email = '".$email."'
                            AND user.password = '".$password."'
                            AND user.user_role = '".$role."'
                            AND user.status = 1";

                $count = $this->count_num($sql);
                $find_one = $this->find_one($sql);

                if ($count > 0) {
                    $result = array(
                        'success' => true,
                        'data' => $find_one
                    );
                }

            } catch(\Exception $e) {
                $result['error'] = $e->getMessage();
            }

            return $result;

        }

    }
?>