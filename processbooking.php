<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
    <!-- add other meta -->
</head>
<body>
    <header>
        <h1>Rohirrim Tour Booking Confirmation </h1>
    </header>

    <?php 
    function sanitise_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST["firstname"])){
        $err_msg = ""; 
        $first_name = $_POST["firstname"];
        $last_name = $_POST["lastname"];
        $age = $_POST["age"];
        $party_size = $_POST["partysize"];


            //For first name
            if (trim($first_name) == "") 
                $err_msg .= "<p>Please enter your first name.</p>";
            else {
                $first_name = sanitise_input($first_Name);
                if (!preg_match("/^[a-zA-Z]{2,40}$/", $first_name)) {
                    $err_msg .= "<p>First name must be 2-40 characters long and contain only letters.</p>";
                }
            }

            //last name 
            if (trim($last_name) == "") 
                $err_msg .= "<p>Please enter your last name.</p>";
            else {
                $last_name = sanitise_input($last_name);
                if (!preg_match("/^[a-zA-Z]{2,40}$/", $last_name)) {
                    $err_msg .= "<p>Last name must be 2-40 characters long and contain only letters.</p>";
                }
            }


            //age
            if(trim($age) == "") 
                $err_msg .= "<p>Please enter your age.</p>";
            else {
                $age = sanitise_input($age);
                if (!preg_match("/^[0-9]{1,3}$/", $age)) {
                    $err_msg .= "<p>Age must be a number between 1 and 3 digits.</p>";
                }
            }

            //Party size
            if (trim($party_size) == "") 
                $err_msg .= "<p>Please enter your party size.</p>";
            else {
                $party_size = sanitise_input($party_size);
                if (!preg_match("/^[0-9]{}$/", $party_size)) {
                    $err_msg .= "<p>Party size must be between 1 and 10.</p>";
                }
            }

        

    }