<?php
    //Query from all tables
    function showAll($pdo) {
            showVacancies($pdo);
            showPosts($pdo);
            showWarnings($pdo);
    }

    function showVacancies($pdo) {
        $stmt = $pdo->prepare("SELECT * FROM jobs");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $color = rand(0, 4);
            $pin = rand(0, 9);

            $companyName = $row["company_name"];
            $occupation = $row["occupation"];
            $description = $row["description"];
            $address = $row["address"];
            $link = $row["link"];
            $createdAt = $row["created_at"];

            echo "
            <div class='post paper-$color'>
                <div class='pin'>
                    <img src='../assets/images/pin-$pin.png'>
                    <p>$companyName</p>
                    <p>$occupation</p>
                    <p>$description</p>
                    <p>$address</p>
                    <p>$link</p>
                    <p>$$createdAt</p>
                </div> 
            </div>
            ";
        }
    }

    function showPosts($pdo) {
        $stmt = $pdo->prepare("SELECT * FROM posts");
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

    function showWarnings($pdo) {
        $stmt = $pdo->prepare("SELECT * FROM warnings");
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
