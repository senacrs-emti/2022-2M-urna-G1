<?php
include_once './includes/_dados.php';
include_once './includes/_login.php';
include_once './includes/head.php';
include_once './includes/_header.php';


?>
<body id="home-body">
 
<div  class="container menu">
<div class="row">
<?php

for ($i=0; $i <4 ; $i++) { 
    # code...

?>
    <a class="text-dark redire" href="<?php echo $Cards[$i]['link']?>">
    <div class="cards">
    <img class="redirectIMG container" src="./contents/<?php echo $Cards[$i]['imagem'] ?>" alt="">
    <h1 class="linkHome"><?php echo $Cards[$i]['titulo'] ?></h1>
   
    </div>
    </a>
        

<?php
}
?>
</div>




<?php
include_once './includes/footer.php';

?>