<?php

require('../config/database.php');
require('../Models/Model.php');

if (isset($_POST['id_enclos'])) {
$type = $_POST['type'];


insertEnclos($type);
}