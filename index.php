<?php
//criando o recurso cURL
$cr = curl_init();
//definindo a url de busca 
curl_setopt($cr, CURLOPT_URL, "http://localhost:9000/poke-api/poke-api/pokemons.json");
//definindo a url de busca 
curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
//definindo uma variável para receber o conteúdo da página...
$retorno = curl_exec($cr);
//fechando-o para liberação do sistema.
curl_close($cr); //fechamos o recurso e liberamos o sistema..
//mostrando o conteúdo..
$retorno = json_decode($retorno);
echo "<div class='owl-carousel owl-theme'>";
foreach ($retorno->pokemon as $pkm) {
    echo "<div class='item'>";
    echo "<img src='".$pkm->img."' width='100'/><br>";
    echo $pkm->num." ".$pkm->name."<br>";
    echo "</div>";
}
echo "</div>";
?>
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:10
        }
    }
})
</script>
