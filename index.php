<?php
    session_start();
    require_once 'include/php/connect.php';
    require_once 'AllClass.php';
    $allObj = new All;
    $pageName = "index.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="no-js">
<head>
    <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Harish Kandala">
    <meta name="description" content="UI FORCE is a community in maintaining the National Integrity of our country. The main motto of our organisation is Unity and Patriotism. It strives for the all round development of India and works more like a comapny which provide employment opportunities and services to the general public thereby STRENGTHENING INDIA">
    <meta name="keywords" content="United India FORCE, India, NPO, Unity, Students">
    <title>United India FORCE | Home</title>
    <link rel="icon" href="img/favicon.png">
    <!-----------------------------Stylesheets---------------------------->
    <link rel="stylesheet" type="text/css" href="include/css/styles.css">
    <!-------------------------------------------------------------------->
    <script src="include/js/init.js" type="text/javascript"></script>
</head>
<body>
<div class="loading valign-wrapper">
    <div class='valign'>
        <div class="text">Loading</div>
        <div class="bullets">
            <div class='bullet'></div>
            <div class='bullet'></div>
            <div class='bullet'></div>
            <div class='bullet'></div>
        </div>
    </div>
</div>
<?php
    require_once 'header.php';
?>
<div class="row">
    <div class="bgNavbar">
        <div class="navigation">
            <a href = "index.php">Home</a>
            <a href = "aboutus.php">About Us</a>
            <a href = "events.php">Events</a>
            <a href = "gallery.php">Gallery</a>
            <a href = "clubs.php">Clubs</a>
            <a href = "#contactUs" class="modal-trigger">Contact Us</a>
            <?php
                if(!isset($_SESSION['curUser'])) {
                    echo '<a class="modal-trigger" href="#login">Login</a>';
                } else {
                    echo '<a href="logout.php">Logout</a>';
                }
            ?>
        </div>
    </div>
    <div class="bg">
        <div class="tempHover">
            <h1>UNITED INDIA FORCE</h1>
            <p><a href = "aboutus.php">UI FORCE - (United India FOR Country's Empowerment) is a community in maintaining the National Integrity of our country. The main motto of our organisation is "Unity and Patriotism". It strives for the all round development of India and works more like a comapny which provide employment opportunities and services to the general public thereby "STRENGTHENING INDIA"</a></p>
        </div>
        <a class="<?php if(!isset($_SESSION['curUser'])) { echo "modal-trigger "; } ?>startProject" href="<?php if(!isset($_SESSION['curUser'])) { echo "#login"; } else { echo "desking.php"; }?>">JOIN NOW</a>
    </div>
    <div class="news-wrapper">
        <h2>Latest News</h2>
        <div class="news-container">
            <?php
                $arrayBig = $allObj->getNews();
                foreach($arrayBig as $temp) {
                    echo '
                        <div class="news-item z-depth-1">
                            <div class="news-header">
                                ' . $temp['title'] . '
                            </div>
                            <div class="news-content">
                                ' . $temp['desp'] . '
                            </div>
                            <div class="news-time">
                                At ' . $temp['date'] . ' By ' . $temp['by'] . '
                            </div>
                        </div>
                        ';
                }
            ?>
        </div>
    </div>

<?php
    require_once "footer.php";
?>

<!--------------------------Scripts--------------------------------->
<script src="include/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="include/js/materialize.min.js" type="text/javascript"></script>
<script src="include/js/app.js" type="text/javascript"></script>
<!------------------------------------------------------------------>
</body>
</html>