<?php
    //Query from all tables
    function showAll($db) {
            showVacancies($db);
            showPosts($db);
            showWarnings($db);
    }

    function showVacancies($db) {
        $stmt = $db->prepare("SELECT * FROM vacancies");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $enterpriseName = $row["enterprise_name"];
            $job = $row["job"];
            $description = $row["description"];
            $address = $row["address"];
            $link = $row["link"];
            $enterprisePhoneNumber= $row["enterprise_phone_number"];
        }
    }

    function showPosts($db) {
        $stmt = $db->prepare("SELECT * FROM posts");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $subject = $row["subject"];
            $description = $row["description"];

            echo " 
             <div class='post p1'>
                 <div class='pin'>
                     <p>$subject</p>
                     <p>$description</p>
                 </div>
             </div>
            ";
        }
    }

    function showWarnings($db) {
        $stmt = $db->prepare("SELECT * FROM mural_warnings");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $title = $row["title"];
            $description = $row["description"];
        }
    }
