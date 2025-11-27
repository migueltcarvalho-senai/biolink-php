<?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "Miguel";
    $bio = "lindo";
    $imagem = "https://pm1.aminoapps.com/6814/7e06ce00d02766c5000cbc63bcfb6b98a4542c0fv2_hq.jpg"; // Pegue o link da SUA foto.
     $links = [
        "Instagram" => "https://instagram.com/@elvis",
        "WhatsApp"  => "https://wa.me/17997243667",
        "Meu Jogo Favorito" => "https://store.steampowered.com/app/2592160/Dispatch/",
        "Música do Momento" => "https://youtu.be/RsMm_HIc4ag?si=JEug77vEXXMQb7W5"
    ];
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

        <h1> <?php echo $nome; ?> </h1>

        <p> <?php echo $bio; ?> </p>

        <div class="lista-links">
        <?php
        // é definida a variavel $url com base nos links do array
    foreach($links as $texto => $url){
        $classe_extra = "";
        
        // adição da classe extra no botao whatsapp
        if($url == "https://wa.me/17997243667"){
            
        $classe_extra = "destaque";}

        // criação de cada botao com base nas urls do array array
        echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                  $texto
                 </a>
                 <br>";
       
    }     
        ?>

        </div>
         <div class="area-contato">
            <a href="contato.php" class="btn-msg">📧 Mandar Mensagem</a>
        </div>
    </div>
</body>
</html>