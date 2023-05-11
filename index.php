<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php');?>
<body>

    <?php include('include/fondo.php'); ?>

    <?php
    
    $logo = 'fotos/logo.jpg';
    $bolsatrabajo = 'fotos/logobolsa2.png';

    ?>

    <header class="headerindex">
        <h1 class="title">Esperanza.ONG</h1>
        <img src="<?php echo $logo; ?>" alt="logo" width="40%" class="logoindex">
    </header>

    <main>

        <button class="botonindex">Busco trabajo</button>
        
        <img class="bolsatrabajo" src="<?php echo $bolsatrabajo; ?>" alt="bolsa logo"  weight="100%">

        <button class="botonindex">Necesito un empleado</button>

    </main>

    <div class="quienessomos">
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ullam. Commodi, perferendis, reiciendis molestiae hic laudantium beatae quod laborum dolore illum tempore ea voluptate est autem voluptas. Vitae, aspernatur pariatur corrupti aperiam voluptates quia sint quod quibusdam optio a consectetur. Perferendis cupiditate soluta qui exercitationem! Eos vero doloribus nulla doloremque, natus sint quis explicabo officia veritatis maxime eius repudiandae minus magnam rerum nesciunt reiciendis inventore consequuntur perferendis repellat suscipit esse.</h3>
    </div>

    <?php include('include/footer.php'); ?>
    
</body>
</html>