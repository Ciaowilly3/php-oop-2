<?php
require_once "./classes/product.php";
require_once "./classes/Category.php";

$gatti = new Category("gatti");
$cani = new Category("cani");
$entrambi = new Category("entrambi");

$prodotti= [
    new Prodotto("anti-pulci", 15.99, $entrambi),
    new Cibo("umido", true, "Lattina tuna & crab", 4.99, $gatti),
    new Cibo("secco", false, "croccantini per cagnolini", 2.99, $cani),
    new Cibo("secco", true, "dentastix", 5, $cani),
    new Giochi("plastica", "topo paxxerrello", 4, $gatti),
    new Giochi("peluche", "cane per cani", 12.50,$cani),
    new Cucce("stoffa", "piccola", "cuccetta per animali", 5,$entrambi),
    new Cucce("stoffa", "media", "cuccia per animali", 10,$entrambi),
    new Cucce("pelle di lontra", "grande", "cucciona per animali", 150,$cani),
]

?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PetStore</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    </head>
    <body class="bg-dark">
        <div class="container">
            <h1 class="text-center text-primary mb-5">Pet Store, Pet stories</h1>
            <div class="row gy-5">
            <?php foreach ($prodotti as $prodotto ) {

            ?>
                <div class="col-4">
                    <div class="col-container d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://picsum.photos/200/100" alt="immagine">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $prodotto->getNome() ?> </h5>
                                <h6>
                                    Prodotto per: <?php echo $prodotto->getCategoria()->getName() ?>,
                                </h6>
                                <h6>  
                                    Prezzo: <?php echo $prodotto->getPrezzo() ?> $
                                </h6>
                                <div> <?php echo (method_exists($prodotto, "getTipo") ? "Tipo di alimento: " . $prodotto->getTipo() : '') ?></div>
                                <span> <?php echo (method_exists($prodotto, "getPerSterilizzati") ?
                                (($prodotto->getPerSterilizzati()) ? "Adatto per sterilizzati" : "non adatto per sterilizzati") : "") ?> </span>
                                <span"><?php echo method_exists($prodotto, "getMateriale") ? "Materiale del prodotto: " . $prodotto->getMateriale() : "" ?></span>
                                <span><?php echo method_exists($prodotto, "getDimensioni") ? "Cuccia di dimensioni: ". $prodotto->getDimensioni() : "" ?> </span>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- <script src="js/main.js"></script> -->
    </body>
</html>