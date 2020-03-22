<?php
    include_once '../dependencias.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <div class="conteudo">
        <h1 id="titulo"> Cadastro de Usuario </h1>
            <!--login, peso, dt_nascimento, senha, sexo, nome, cpf, email, altura, id_usuario-->
            <form method="POST" action="?classe=usuarioControlador">
                
            <p>Id: <input type = "text" name = "id" id = "id"  size = "5" value="<?php echo $usuario['id'];?>" readonly></p>
            
            
            
            
            
            
            
            
            
            
             </form>



    
    
    
    
    
    </div>

    
</body>
</html>
