<?php 
//internet

require_once 'db_connect.php';

session_start();
//se o botao do formulario foi clicao
include 'basetop.php';


if(isset($_POST['enviar'])):
    $erros = array();
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $login = mysqli_escape_string($connect, $_POST['nome']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        echo "<li> O campo precisa ser preenchido</li>";
else:
    $sql = "SELECT nome FROM usuarios WHERE nome = '$login'";
    $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0 ):
            $sql = "SELECT * FROM usuarios WHERE nome = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
                if (mysqli_num_rows($resultado) == 1 ):
                    $dados = mysqli_fetch_array($resultado);
                    echo 'Bem vindo de volta chefe.';
                     $local='sugestao/dados.txt';
                     //abre a lista
                        $exibir=file_get_contents($local);
                        echo "<p style='font-size:20pt;'>$exibir</p>";
                else:
                    echo 'usuario e senha nao confere';
                    endif;
                
        else:
            echo "usuario enexistente";
        endif;
    endif;
endif;
        
include 'basebottom.php';

?>