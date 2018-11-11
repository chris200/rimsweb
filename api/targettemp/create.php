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
$filecontent=file_get_contents("php://input");

$targettemperature=$_POST['targettemperature'];
//echo "target temp " . $targettemperature;

//print_r("filecontent ");
//print_r($filecontent);
//print_r(" ");
//$data = json_decode($filecontent);

$data="{'targettemperature':".$targettemperature."}";
//$data = json_decode(file_get_contents("php://input"));
//print_r("DATA ");
print_r($data);
//print_r(" ");
// make sure data is not empty
if(
    !empty($data->targettemperature)

){
echo "<script>alert('Not Empty');</script>";
    // set product property values
    $product->targettemperature = $data->targettemperature;
    // $product->price = $data->price;
    // $product->description = $data->description;
    // $product->category_id = $data->category_id;
    // $product->created = date('Y-m-d H:i:s');

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
