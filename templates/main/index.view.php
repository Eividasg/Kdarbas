<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://kit-pro.fontawesome.com/releases/v5.12.0/css/pro.min.css" rel="stylesheet" type="text/css">
    <link href="templates/<?=activetemplate;?>/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="templates/<?=activetemplate;?>/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="templates/<?=activetemplate;?>/js/jquery.js"></script>
    <script type="text/javascript" src="templates/<?=activetemplate;?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="templates/<?=activetemplate;?>/js/bootstrap.bundle.js"></script>
    <title><?=$siteName;?></title>
</head>
<body>
<header>
<center><h1>filmu paieskos aplikacija</h1></center>
</header>
<?php if ($navigation["header"] )?>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark border-bottom'>
    <a class="ml-5 navbar-brand text-uppercase " href='?page=all'>Filmux.org</a>
    <div class="collapse navbar-collapse">
        <ul class='navbar-nav'>
            <?php foreach ($navigation["header"] as $href => $item){
                echo"<li class='navbar-item'><a class='nav-link' href='?page=$href'>$item</a></li>";
            }
            ?>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownmenubutton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownmenubutton">
                    <?php foreach ($navigation["menu"] as $href1 => $item1){
                        echo "<a class='dropdown-item' href='?page=$href1'> $item1</a>";
                    }
                    ?>
                </div>
            </div>
        </ul>
    </div>
    <form class="form-inline mr-5">
        <div class="input-group">
            <input type="text" class="input-group-text text-left rounded-0 border-right-0" placeholder="Paieska..."/>
            <div class="input-group-prepend">
                <button class="input-group-text btn btn-light btn-outline-success rounded-0 border-left-0 " type="submit">Ieskoti</button>
            </div>
        </div>
    </form>
</nav>
<section class="sectionas text-center">
    <h2>apie projekta</h2>
    <p>trumpai apie projekta</p>
</section>
<main class="container-fluid">
    <?php require __DIR__."/../../router.php"; ?>
</main>
<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3" style="background-color: lightgray" >
        <p> sukurta: MAN :)</p>
    </div>
</footer>
</body>
</html>
