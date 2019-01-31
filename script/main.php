<?php 

    $conn = new mysqli("localhost:3307", "root", "root", "dropdb");

    $sql = "SELECT * FROM musics";
    $result = $conn->query($sql);

    $todo_list;

    function listInVIew (){
        while ( $row = $result->fetch_assoc() ){
            $id = $row["id"];
            $todo_list = listElement($id, $row["img"], $row["title"], $row["subtitle"]);
        }
    }
    function listElement ( $id, $img, $title, $subtitle ) {
        echo "
        <div class='colum'>
        <div class='card$id card' id='card-before$id'></div>
        <div class='card card$id' id='card$id'>
            <div class='wrapper-card'>
                <div class='img'>
                    <img class='img2' src='$img'>
                </div>
                <div class='content-card'>
                    <h4 class='title-card'>". $title. "</h4>
                    <h4 class='subtitle'>".$subtitle."</h4>
                </div>
            </div>
        </div>
    </div>
    ";
    }
?>