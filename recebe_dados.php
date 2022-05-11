<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title></title>
</head>
<body>
	<form action="recebe_dados.php" method="POST">
        <div align="center">
            <center>
                <p>
                    Usuário: <input type="text" name="usuario" size="20">
                    Senha: <input type="text" name="senha" size="20">
                </p>
                <p> Nome: <input type="text" name="nome" size="20"></p>
                <p> E-mail: <input type="text" name="email" size="20"></p>
                <p> Cidade: <input type="text" name="cidade" size="20">
                    Estado: <input type="text" name="estado" size="2" maxlength="2">
                </p>

                <input type="submit" value="Enviar" name="enviar" />
            </center>
        </div>
	</form>	
    
    <?php
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $erro = FALSE;

        if(strien($usuario)<5)
        {echo "O usuário deve possuir ao menos 5 caracteres. <br>";     $erro=TRUE;}
        if(strien($senha)<5)
        {echo "A senha deve possuir ao menos 5 caracteres. <br>";     $erro=TRUE;}
        if(empty($nome) OR strstr($nome,''))
        {echo "Digite o nome corretamente. <br>";     $erro=TRUE;}
        if(strlen($email) OR !strstr($email,'@'))
        {echo "Digite o e-mail corretamente. <br>";     $erro=TRUE;}
        if(empty($cidade))
        {echo "Digite a cidade corretamente. <br>";     $erro=TRUE;}
        if(strlen($estado)!=2)
        {echo "Digite o estado corretamente. <br>";     $erro=TRUE;}
        if(!$erro)
        {echo "Todos os dados foram digitados corretamente!. <br>";}
    ?>
</body>
</html>
