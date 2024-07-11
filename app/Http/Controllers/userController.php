<?php
    namespace App\Http\Controllers;

    class userController extends Controller {
        public function __construct() {
            echo "Construct เริ่มทำงาน<br>";
        }

        public function show($id) {
            echo 'ID ของคุณคือ: '.$id;
        }
    }

?>