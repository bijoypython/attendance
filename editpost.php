<?php
    require_once 'db/conn.php';
//Get values from post operation
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $speciality = $_POST['speciality'];
        //call crud funcion
        $result = $crud->editAttendee($id,$fname, $lname, $dob, $email, $contact, $speciality);
        //redirect to index.php
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            //echo 'error';
            include 'includes/errormessage.php';
        }
    }
    else{
        //echo 'error';
        include 'includes/errormessage.php';
}





?>