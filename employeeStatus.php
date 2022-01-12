<!DOCTYPE html>
<html>
<head>
    <title>Status Confirmed</title>
    <link rel="stylesheet" type="text/css" href="layout.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<?php
    $name = $_POST['name'];
    $bhNum = $_POST['bhNum'];
    $idNum = $_POST['idNum'];
    $cough = $_POST['cough'];
    $fever = $_POST['fever'];
    $hands = $_POST['hands'];
    $mask = $_POST['mask'];
//    $temp = $_POST['temp'];
    $date = date('m/d/Y h:i:s a', time());
    $to = 'shoppingaccount@mail.com';
    $email = 'shoppingaccount@mail.com';
    $subject1 = 'Required Status for ' . $name;
    $subject2 = 'DO NOT ALLOW TO WORK: ' . $name;
    $msg1 = "Employee: $name \n" .
        "Bunkhouse: $bhNum \n" .
        "Employee Number: $idNum \n" .
        "Do they have a cough: $cough \n" .
        "Do they have a fever: $fever \n" .
        "Will they wash their hands: $hands \n" .
        "Will they wear a wear mask: $mask \n" .
//        "Temperatue: $temp \n" .
        "Submitted:  $date \n";
    $msg2 = "Employee: $name \n has answered at least one answer NOT TO STANDARDS \n" .
        "Bunkhouse: $bhNum \n" .
        "Employee Number: $idNum \n" .
        "Do they have a cough: $cough \n" .
        "Do they have a fever: $fever \n" .
        "Will they wash their hands: $hands \n" .
        "Will they wear a wear mask: $fever \n" .
//        "Temperatue: $temp \n" .
        "Submitted:  $date \n";

    
    if ($cough == "no" && $fever == "no" && $hands == "yes" && $mask == "yes" 
//        && $temp < 37.9
       ) {
        echo "<p>PROCEED TO WORK</p><body style=\"background-color: green\">";
        echo $date;
        mail($to, $subject1, $msg1, 'From:' . $email);
    } else {
        echo "<p>DO NOT GO TO WORK! CALL THE OFFICE IMMEDIATELY AND ISOLATE YOURSELF FROM EVERYONE!<br /></><body style=\"background-color: red\">";
        echo $date;
        mail($to, $subject2, $msg2, 'From:' . $email);
    }
    
    echo "<br /><br /><input type=\"button\" onclick=\"location.href='employeeStatus.html'\" value=\"New Form\" />";
    
    ?>
</body>
</html>
