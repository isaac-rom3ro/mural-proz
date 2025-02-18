<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $option = htmlspecialchars($_POST["select-option"]);
        include_once "../database/db-connection.php";
        session_start();
        $userId = $_SESSION["user-id"];

        echo $userId;

        if($option == "vancacies") {
            $enterpriseName = $_POST["enterprise-name"];
            $job = $_POST["job"];
            $description = $_POST["vacancy-description"];
            $vacancyAddress = $_POST["vacancy-address"];
            $link = $_POST["vacancy-link"];
            $vacancyPhoneNumber = $_POST["vacancy-phone-number"]; 

            $stmt = $db->prepare("INSERT INTO vacancies 
            (id_user, enterprise_name, job, description, address, link, enterprise_phone_number) 
            VALUES
            (:id_user, :enterprise_name, :job, :description, :address, :link, :enterprise_phone_number);
            ");
            $stmt->bindValue(":id_user", $userId);
            $stmt->bindParam(":enterprise_name", $enterpriseName);
            $stmt->bindParam(":job", $job);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":address", $vacancyAddress);
            $stmt->bindParam(":link", $link);
            $stmt->bindParam(":enterprise_phone_number", $vacancyPhoneNumber);

            $stmt->execute();
        } else if($option == "mural_warnings") {
            $warningTitle = $_POST["warn-title"];
            $warningDescription = $_POST["warn-description"];

            $stmt = $db->prepare("INSERT INTO mural_warnings");

        } else if($option == "posts") {
            $postSubject = $_POST["post-subject"];
            $postDescription = $_POST["post-description"];
        }
    }