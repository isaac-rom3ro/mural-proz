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
            $color = rand(0, 4);
            $pin = rand(0, 9);

            $enterpriseName = $row["enterprise_name"];
            $job = $row["job"];
            $description = $row["description"];
            $address = $row["address"];
            $link = $row["link"];
            $enterprisePhoneNumber= $row["enterprise_phone_number"];

            echo "
            <div class='post paper-$color'>
                <div class='pin'>
                    <img src='../assets/images/pin-$pin.png'>
                    <p>$enterpriseName</p>
                    <p>$job</p>
                    <p>$description</p>
                    <p>$address</p>
                    <p>$link</p>
                    <p>$enterprisePhoneNumber</p>
                </div> 
            </div>
            ";
        }
    }

    function showPosts($db) {
        $stmt = $db->prepare("SELECT * FROM posts");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $color = rand(0, 4);
            $pin = rand(0, 9);

            $subject = $row["subject"];
            $description = $row["description"];

            echo "
            <div class='post paper-$color'>
                <div class='pin'>
                    <img src='../assets/images/pin-$pin.png'>
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
            $color = rand(0, 4);
            $pin = rand(0, 9);

            $title = $row["title"];
            $description = $row["description"];

            echo "
            <div class='post paper-$color'>
                <div class='pin'>
                    <img src='../assets/images/pin-$pin.png'>
                    <p>$title</p>
                    <p>$description</p>
                </div> 
            </div>
            ";
        }
    }
