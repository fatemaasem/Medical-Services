<?php 
$databaseName='medical';
$password='';
$serverName='localhost';
$userNmae='root';
$conn=mysqli_connect($serverName,$userNmae,$password,$databaseName);
if(!$conn){
    echo 'Error in connection<br>'.mysqli_connect_error();
    die();
}
function insert($sql){
    global $conn;
    $result=mysqli_query($conn,$sql);
  if( $result)return true;
  return false;
}
function select_with_name_and_password($name,$password){
    
    global $conn;
    $sql="SELECT admin_name,admin_password FROM admins WHERE  admin_name='$name' ";
    $result=mysqli_query($conn,$sql);
    if($result){
    while($arr=mysqli_fetch_row($result)){
       if( password_verify($password,$arr[1])){
       
        return true;
       }
          
        }
        
    }
    else{
        return false;
    }
}
function selectAll($tableName){
    global $conn;
    $sql="SELECT * FROM $tableName ";
    $result=mysqli_query($conn,$sql);
    if($result){
        $cities=  mysqli_fetch_all($result);
    }
    return $cities;
}




function get_row($tableName,$field,$value){
    global $conn;
    $sql="SELECT * FROM $tableName WHERE $field=$value";
    $result=mysqli_query($conn,$sql);
    if($result){
       if(  mysqli_num_rows($result)){
        return mysqli_fetch_assoc($result);
       }
       return false;
    }
    return false;
}
function delete($table,$field,$value){
    global $conn;
    $sql="DELETE FROM $table WHERE $field=$value";
    $result=mysqli_query($conn,$sql);
    if($result)return "Deleted ";
    return false;
}


?>
