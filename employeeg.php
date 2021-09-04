<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
include_once'./config/database.php';
$table='emp';
$query='select emp.name as name,emp.designation as designation,emp.department as department,emp.salary as salary from'.$table.'join name on emp.name=name.id where join id on emp.id=id.id';
$stmt=$pdo->prepare($query);
$stmt->bindParam(':id',$id);
if($stmt->execute())
{
    $car=$stmt->fetch();
    echo json_encode(['emp'=>$emp]);
}
else
{
    $response['message']='error occured';
    echo json_encode($response);
}
?>
