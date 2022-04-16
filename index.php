<?php
SESSION_START();
//Song Titles
$song_lyrics1 = "Ginintuang Tanawin";
$song_lyrics2 = "Ikaw Ang Musika";
$song_lyrics3 = "Kahel Na Langit";
$song_lyrics4 = "Ikaw Ang Pahinga Ko";
$song_lyrics5 = "Marupok";
//current url redirection
$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];



//condition to know if the button is clicked
if(isset($_REQUEST['search_button'])=== true){
    //song title url
    if($_REQUEST['song_title'] == $song_lyrics1){
        header("Location: ".$url_add."?ginintuangtanawin");
    }
    else if($_REQUEST['song_title'] == $song_lyrics2){
        header("Location: ".$url_add."?ikawangmusika");
    }
    else if($_REQUEST['song_title'] == $song_lyrics3){
        header("Location: ".$url_add."?kahelnalangit");
    }
    else if($_REQUEST['song_title'] == $song_lyrics4){
        header("Location: ".$url_add."?ikawangpahingako");
    }
    else if($_REQUEST['song_title'] == $song_lyrics5){
        header("Location: ".$url_add."?marupok");
    }
        //session variable
        $_SESSION['ses_lyrics1'] = $song_lyrics1;
        $_SESSION['ses_lyrics2'] = $song_lyrics2;
        $_SESSION['ses_lyrics3'] = $song_lyrics3;
        $_SESSION['ses_lyrics4'] = $song_lyrics4;
        $_SESSION['ses_lyrics5'] = $song_lyrics5;
          
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melomaniac Activity</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"> Areuminct-Lovers Music Lyrics </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="index.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song1.php">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song2.php">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song3.php">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light" href="song4.php">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="#">Song 5</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to Areuminct-Lovers Music Lyrics</h1>
                <p class="lead">“This is inspired with the wattpad stories  written by Areuminct. Music is your own experience, your thoughts, your wisdom. If you don’t live it, it won’t come out of your horn.</p>
                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <form method="POST" class="login-form">
                            <div class="form-group">


                                <?php
                                if(isset($_REQUEST['ginintuangtanawin']) === true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song1.php");
                                }else if(isset($_REQUEST['ikawangmusika'])=== true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song2.php");
                                }else if(isset($_REQUEST['kahelnalangit'])===true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song3.php");
                                }else if(isset($_REQUEST['ikawangpahingako'])=== true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song4.php");
                                }else if(isset($_REQUEST['marupok'])=== true){
                                    echo "Redirecting...";
                                    header ("Refresh: 3; url=song5.php");
                                }
                                    
                                ?>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Type Song Title here" name="song_title" ></div>
                                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="search_button"> Search </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Kyla Patrrice Soberano Sace</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>