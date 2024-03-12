<?php
include('datastore.php');
include('function.php');

$c_id=$_POST['Categorie'];
$data=getSubcategoriWithCatagori($c_id);
// echo $data;

if(!empty($data)){
    echo '<option value="">Select Sub Catagory</option>';
    foreach($data as $val){
    echo '<option value="'.$val['c_id'].'">'.$val['Sub_Category'].'</option>';

    }
}
else{
    echo '<option value="">No Sub Catagory Found.</option>';

}

?>