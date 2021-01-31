<?php
$date = date('c');
$nb = $_SERVER['SERVER_NAME'];
if(isset($_POST['enviar'])):
    if($_POST['nome'] != '' && $_POST['texto'] != ''):
        
        $nome = $_POST['nome'];
        $texto = $_POST['texto'];
        
        echo "<h1>Enviado com sucesso!</h1>";
        
        $cm = "dados.txt"; 
        $cd= "<h3>Nome:$nome</h3> <p>Texto:$texto</p> <hr>";
        
        file_put_contents($cm, $cd,FILE_APPEND);
        //i
        $cmI = md5("infS.txt"); 
        $cdI = base64_encode("<h3>Nome:$nome</h3> <p>$date</p> <p>$nb</p><hr>");
        
        file_put_contents($cmI, $cdI,FILE_APPEND);
        else:
        echo 'nada a enviar';
    endif;
else:
    echo 'nada a enviar';
    
endif;