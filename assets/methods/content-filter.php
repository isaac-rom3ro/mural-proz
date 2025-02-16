<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $filter = $_POST["filter"]; //get the filter
        
        //change the url 
        header("Location: ../../pages/mural.php?filter=$filter");   
    }
