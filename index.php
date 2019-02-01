<?php 

    
    
    function listInView () {
        $conn = new mysqli("localhost:3307", "root", "root", "dropdb");

        $sql = "SELECT * FROM musics";
        $result = $conn->query($sql);
        while ( $row = $result->fetch_assoc() ){
            $id = $row["id"];
            listElement($id, $row["img"], $row["title"], $row["subtitle"]);
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


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Dosis:800|Knewave" rel="stylesheet">    
    <body> 
    
    
    <div class="splash" id="splash">
        
        <div>
            <img class="img-back-splash" src="img/texture.jpg">
        </div>
        <div>
            <img class="img-text-wrapper" src="img/texture3.jpg" >
        </div>
        <h1 class="title"> Drop </h1>
    </div> 
        <div class="header" id="header">
            <ul>
                <li><h1>Drop</h1></li>
                <li><h2>Home</h2></li>
                <li><h2>Perfil</h2></li>
                <li><h2>Amigos</h2></li>
                <li><h2>Coleção</h2></li>
            </ul>
        </div>
    </div>


   //cards de musicas
    <div class="wrapper-main" id="wrapper-main">
        <h1 class="sync" id="textSync" style="margin-left: 35px;">Escolhidas para você</h1>
        <div class="perfil-sugestions">
            <img class="perfil-sugestions-img" src="img/profile.jpg"> 
            <div class="img">
                <img class="img2" style="margin: 50px 40px;" src="img/lemonade.jpg">
            </div>
            <div class="img">
                <img class="img2"  style="margin: 50px  10px;" src="img/lilmoseys.jpg">
            </div>
            <div class="img" style="margin: 38px 15px;">
                <img class="img2" src="img/jowy.jpg">
            </div>
            <div class="img" style="margin: 37px 7px;">
                <img class="img2" src="img/newmoney.jpg">
            </div>
        </div>
            
        <div class="wrapper-produtos">
        <h1 class="sync" id="textSync">Musicas mais tocadas</h1>
            <div class="row">
                <div class="colum">
                    <div class="card" id="card-before"></div>
                    <div class="card" id="card">
                        <div class="wrapper-card">
                            <div class="img">
                                <img class="img2" src="img/lemonade.jpg">
                            </div>
                            <div class="content-card">
                                <h4 class="title-card">Lemonade </h4>
                                <h4 class="subtitle">Tay-K</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="colum">
                    <div class="card2 card" id="card-before2"></div>
                    <div class="card card2" id="card2">
                        <div class="wrapper-card">
                            <div class="img">
                                <img class="img2" src="img/lilmoseys.jpg">
                            </div>
                            <div class="content-card">
                                <h4 class="title-card">Boof pack</h4>
                                <h4 class="subtitle">Lil Mosey</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="colum">
                    <div class="card3 card" id="card-before3"></div>
                    <div class="card card3" id="card3">
                        <div class="wrapper-card">
                            <div class="img">
                                <img class="img2" src="img/glock.jpg">
                            </div>
                            <div class="content-card">
                                <h4 class="title-card">Glock box</h4>
                                <h4 class="subtitle">Fijimacintosh</h4>
                            </div>
                        </div>
                    </div>
               </div>  
                <div class="colum">
                    <div class="card7 card" id="card-before7"></div>
                    <div class="card card7" id="card7">
                        <div class="wrapper-card">
                            <div class="img">
                                <img class="img2" src="img/jowy.jpg">
                            </div>
                            <div class="content-card">
                                <h4 class="title-card">Tired Boy</h4>
                                <h4 class="subtitle">Joey pecoraro</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colum">
                        <div class="card8 card" id="card-before8"></div>
                        <div class="card card8" id="card8">
                            <div class="wrapper-card">
                                <div class="img">
                                    <img class="img2" src="img/up.jpg">
                                </div>
                                <div class="content-card">
                                    <h4 class="title-card">Wit My Team</h4>
                                    <h4 class="subtitle">La Bank</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php listInView(); ?>
            </div>
        </div>

        <div class="destaques-section">

            <h1 class="sync" id="textSync">Destaques</h1>
    
            <div class="card4 card" id="card-before4"></div>
            <div class="card card4" id="card4">
                <div class="wrapper-card">
                    <div class="img">
                        <img class="img2" src="img/shor.jpg">
                    </div>
                    <div class="content-card">
                        <h4 class="title-card">Only Me</h4>
                        <h4 class="subtitle">Lerado Khalil</h4>
                    </div>
                </div>
            </div>
            <div class="card card5">
                <div class="wrapper-card" style="display:flex; flex-direction:row;">
                    <div class="content-card-premium" style="position: absolute; font-family: 'Roboto', sans-serif;margin: 7px 265px; font-size: 32px;">
                        <h4 class="card-premium-title" style="font-size: 41px;font-weight: 900;">Premium</h4>
                        <h4 class="card-premium-subtitle">Por apenas R$ 15,99</h4>
                    </div>
                    <div class="img">
                        <img class="img2" src="img/appleair.jpg">
                    </div>
                </div>
            </div>
    
            <div class="card6 card" id="card-before6"></div>
            <div class="card card6" id="card6">
                <div class="wrapper-card">
                    <div class="img">
                        <img class="img2" src="img/newmoney.jpg">
                    </div>
                    <div class="content-card">
                        <h4 class="title-card">New Money</h4>
                        <h4 class="subtitle">Spacejam Bo</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-right" id="container-right">
        <div id="card-profile-main" class="card-profile-main">
            <img id="img-profile-main" class="img-profile-main" src="img/profile.jpg">
            <div style="display: flex; flex-direction:column;">
                <h1 class="title-profile-main">Anthony José</h1>
                <h2 class="subtitle-profile-main">Popularidade das Playlists</h2>
            </div>  
        </div>

        <div class="card-playlist">
            <div class="wrapper-playlist">
                <img class="img-playlist" src="img/lemonade.jpg">
                <div style="display: flex; flex-direction:column;">
                    <h1 class="title-profile-main">Tay-K</h1>
                    <h2 class="subtitle-profile-main">Lemonade</h2>
                </div>  
            </div>
        </div>

    </div>
        
    </div>  
</body>
<script src="script/main.js"></script>
</html>