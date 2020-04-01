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

        
            <!--#Front-End entrada de aquivos. 
                #Mirado para controlado.       
            -->
            <form method="POST" action="?classe=usuarioControlador">
            <input type="hidden" name="acao" value="<?php echo $acao; ?>">
            <p>id_usuario: <input type = "text" name = "id" id = "id"  size = "5"  value="<?php echo $usuario['id'];?>" readonly></p>            
            <p>Nome: <input type = "text" name = "id" id = "id"  size = "5" maxlength="255" value="<?php echo $usuario['nome'];?>" required></p>
            <p>Peso: <input type = "number" name = "peso" id = "peso"  size = "5" maxlength="5" value="<?php echo $usuario['peso'];?>" required></p>
            <p>Data de nascimento: <input type = "date" name = "dt_de_nascimento" id = "dt_de_nascimento"  size = "5" value="<?php echo $usuario['dt_de_nascimento'];?>" required></p>
            <p>Senha: <input type = "password" name = "senha" id = "senha"  size = "5" maxlength="125" value="<?php echo $usuario['senha'];?>" required></p>
            <p>CPF: <input type = "text" name = "cpf" id = "cpf"  size = "5" maxlength="12" value="<?php echo $usuario['cpf'];?>" required></p>
            <!--escolher o sexo da pessoa
                #Pode ser que seja mudado depois 
            -->
            <!--
            <p> Sexo:     
                <label><input type="radio" name="sexo" value="M" /> Masculino</label>
                <label><input type="radio" name="sexo" value="F" /> Feminino</label>
            </p>
            -->
                               
            <p>Sexo: </input type="text" name="sexo" id="sexo" size= "5" maxlength="12" value ="<?php echo $usuario['sexo'];?>" required> <p>
            
            <!----------------------------->
            <p>E-mail: <input type = "text" name = "email" id = "email"  size = "5" maxlength="255" value="<?php echo $usuario['email'];?>" required></p>
            <p>Altura: <input type = "number" name = "altura" id = "altura"  size = "5" maxlength="5" value="<?php echo $usuario['altura'];?>" required></p>

            <!---->
            <input type="submit" value="<?php $rotuloBotao ?>">

            </form> 
    
    </div> 
  
 
</body>
</html>
