<?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "Miguel";
    $bio = "lindo";
    $imagem = "https://s2-redeglobo.glbimg.com/dJYmr2pxBJQPPciB-VYyMmvv5UE=/0x0:1080x1350/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_b58693ed41d04a39826739159bf600a0/internal_photos/bs/2020/j/w/1GCID6TCe5ZrpCIuOxLg/dunn.mckinley-121092027-122215422759394-3550698255644051203-n.jpg"; // Pegue o link da SUA foto.
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