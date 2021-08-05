
<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $creador = trim($_POST['creador']);
        $apariencia = $_POST['apariencia'];
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg, apariencia, creador) VALUES ('$name','$email','$fechareg','$apariencia','$creador')";
	    $resultado = mysqli_query($conex,$consulta);
        unset($_POST['name']);
        unset($_POST['email']);
        unset($_POST['apariencia']);
        unset($_POST['creador']);
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">Nivel subido correctamente</h3> 
           <?php header("Location: https://jicode1.github.io/smmwe-niveles-mundiales/"); ?>
           <?php 
           } else {
	    	?> 
	    	<h3 class="bad">Ups ha ocurrido un error</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Por favor completa los campos</h3>
           <?php
    }
}

?>

<style>
    .ok{
        font-family: themillion;
    }

    .bad{
        font-family: themillion;
    }
</style>