<?php
// process.php
include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();


$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['targettemperature']))
        $errors['name'] = 'Name is required.';



// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

      $query = "INSERT INTO
                  " . $this->table_name . "
              SET

                  targettemperature=:targettemperature";


        $stmt = $this->conn->prepare($query);

        $stmt->execute();
  //print_r($stmt);
        return $stmt;
        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Success!';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
