<?php
require_once "./classes/product.php";

$prodotti= [
    new Prodotto("anti-pulci", 15.99, "Entrambi"),
    new Cibo("umido", true, "Lattina tuna & crab", 4.99, "gatti"),
    new Cibo("secco", false, "croccantini per cagnolini", 2.99, "cani"),
    new Giochi("plastica", "topo paxxerrello", 4, "gatti"),
    new Giochi("peluche", "cane per cani", 12.50,"cani"),
    new Cucce("stoffa", "piccola", "cuccetta per animali", 5,"entrambi"),
    new Cucce("stoffa", "media", "cuccia per animali", 10,"entrambi"),
    new Cucce("stoffa", "grande", "cucciona per animali", 15,"cani"),
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
        </div>
        <!-- <script src="js/main.js"></script> -->
    </body>
</html>