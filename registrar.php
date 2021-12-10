<?php
    include("con_db.php");
    if(isset($_POST['register'])){
        if(strlen($_POST['nombreEmpresaWeb']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['nombreEncargado']) >= 1
        ){
            $nombreEmpresaWeb = $_POST['nombreEmpresaWeb'];
            $email = $_POST['email'];
            $nombreEncargado = $_POST['nombreEncargado']; 
            $consulta = "INSERT INTO contactos(nombreEmpresaWeb, email, nombreEncargado) VALUES ('$nombreEmpresaWeb','$email','$nombreEncargado')";
            $resultado = mysqli_query($conex, $consulta);
            
            if($resultado){
                ?>
                <h2 class="ok">'Hemos guardado tu información!</h2>
                <?php
            }else{
                ?>
                <h2 class="bad">'Ups! ha ocurrido un error..</h2>
                <?php
                }
        }else{
            ?>
            <h2 class="bad">Por favor complete los campos</h2>
            <?php
        }
    }

?>