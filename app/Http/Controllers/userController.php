<?php
    namespace App\Http\Controllers;

    class userController extends Controller {
        public function __construct() {
            echo "Construct เริ่มทำงาน<br>";
        }

        public function show($id) {
            echo 'ID ของคุณคือ: '.$id;
        }

        public function showIdName($id, $name = 'defaultNameValue') {
            echo 'ID ของคุณคือ: ' . $id . "<br>";
            echo 'ชื่อของคุณคือ: ' . $name;
        }
    }

?>