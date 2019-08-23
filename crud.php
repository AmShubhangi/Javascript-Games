<?php
    $data = file_get_contents("books.json");
    $phpData = json_decode($data, true);
 
    $arrIndex = array();
 
    foreach($phpData as $key => $value)
    {
        if($value["id"] == 14)
        {
            $arrIndex[] = $key;
        }
    }
    
    foreach($arrIndex as $i)
    {
        unset($phpData[$i]);
    }
    $phpData = array_values($phpData);
    file_put_contents("books.json", json_encode($phpData));
 
    foreach($phpData as $objects)
    {
       foreach($objects as $key => $value) 
       {
           echo $key . " : " . $value . "<br />";
       }
        echo "<br />";
    }
 
    /* //update
    foreach($phpData as $key => $value)
    {
        if($value["id"] == 12)
        {
            $phpData[$key]["price"] = "$10.95";
        }
    }
    file_put_contents("books.json", json_encode($phpData));
 
    foreach($phpData as $objects)
    {
       foreach($objects as $key => $value) 
       {
           echo $key . " : " . $value . "<br />";
       }
        echo "<br />";
    }*/
 
    /* //reading
    
    foreach($phpData as $objects)
    {
       foreach($objects as $key => $value) 
       {
           echo $key . " : " . $value . "<br />";
       }
        echo "<br />";
    } */
 
    /* // create
        $newData = array("id"=>14, "title"=>"Help Your Kids with Computer Coding","author"=>"DK Publishing","price"=>"$16.83");
    array_push($phpData, $newData);
    file_put_contents("books.json", json_encode($phpData));
 
    foreach($phpData as $objects)
    {
       foreach($objects as $key => $value) 
       {
           echo $key . " : " . $value . "<br />";
       }
        echo "<br />";
    } */
?>