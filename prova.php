

<html>

    <form  method="post" >
        nom: <input type="text" name="nom" value="" placeholder="Indica el teu nom">
        edat: <input type="number" name="edat" value="" placeholder="Indica la teva edat">
    </form>

    <?php

    $nom = $_POST['nom'];
    $edat = $_POST['edat'];

    echo " El teu nom és: $nom";
    $i=1;
    while($i <= $edat){
        echo $i;
        $i++;
    }
    ?>

</html>
