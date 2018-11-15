<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
include_once '../config/database.php';

// instantiate product object
include_once '../objects/targettemp.php';

$database = new Database();
$db = $database->getConnection();

$product = new Targettemp($db);

// get posted data
//$data = json_decode(file_get_contents("php://input"));
$targettemperature=$_POST['targettemperature'];
//$data=['targettemperature']->$targettemperature;

//print_r("php://input");


$data->targettemperature=$targettemperature;
print_r($data);
//print_r($data->targettemperature);
// make sure data is not empty
if(
    !empty($data->targettemperature)
){

    // set product property values
    $product->targettemperature = $data->targettemperature;


    // create the product
    if($product->create()){

        // set response code - 201 created
        http_response_code(201);

        // tell the user
        echo json_encode(array("message" => "Product was created."));

    }

    // if unable to create the product, tell the user
    else{

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Unable to create product."));
    }
}

// tell the user data is incomplete
else{

    // set response code - 400 bad request
    http_response_code(400);

    // tell the user
    echo json_encode(array("message" => "Unable to create product. Data is incomplete."));
}
?>
