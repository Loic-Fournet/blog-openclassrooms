<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Loïc Fournet - Blog design et développement</title>

    <link href="../public/css/bootstrap.css" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/gqr7yue.css">

    <!-- Custom styles for this template -->
    <link href="../public/css/loicfournet.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="sideNavigation" class="sidenav">
    <nav>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</div>
<div class="topnav">
    <a href="#" onclick="openNav()">
        <svg width="25" height="25" id="icoOpen">
            <path d="M0,5 30,5" stroke="#000" stroke-width="2"/>
            <path d="M0,14 30,14" stroke="#000" stroke-width="2"/>
            <path d="M0,23 30,23" stroke="#000" stroke-width="2"/>
        </svg>
    </a>
</div>
<div id="main">
    <div class="container-fluid">
        <header>
            <ul class="brand">
                <li><a href="#"><img src="../public/img/logo-site.png" alt="Loïc Fournet"/></a></li>
                <li class="baseline"><strong>Blog de Loïc Fournet</strong><br/>Design & Développement</li>
            </ul>
        </header>
    </div>
    <div class="container middel-container">
        <div class="row">
            <?php
                foreach ($posts as $post)
                {
                    ?>
                    <article class="col blog-post">
                        <img src="../public/img/image-blogue.png" alt="image-blogue"/>
                        <h3><?= htmlspecialchars($post->getTitle());?></h3>
                        <p><?= htmlspecialchars($post->getFirstText());?></p>
                        <a class="next-blog-post" href="../public/index.php?route=post&postId=<?= htmlspecialchars($post->getid());?>">Lire la suite</a>
                    </article>
                    <?php
                }
            ?>
        </div>
    </div>
    <div class="container-fluid footer-container">
        <footer>
            <div class="footer-motif">
                <div class="container social-container">
                    <ul>
                        <li><a class="fa fa-facebook-f" href="https://www.facebook.com/Loïc-Fournet-Direction-Artistique-Développement-146429086041959"></a></li>
                        <li><a class="fa fa-instagram" href="https://www.instagram.com/fournetloic"></a></li>
                        <li><a class="fa fa-linkedin" href="https://www.linkedin.com/in/loic-fournet"></a></li>
                    </ul>
                </div>
            </div>
            <div class="orange-container">
                <p>Le blog de Loïc Fournet design & developement.</p>
            </div>
        </footer>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Navigationg -->
<script>
    function openNav() {
        document.getElementById("sideNavigation").style.width = "350px";
        document.getElementById("main").style.marginLeft = "-350px";
    }
    function closeNav() {
        document.getElementById("sideNavigation").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>

</body>
</html>
