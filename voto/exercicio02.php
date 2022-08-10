<html>
<head>
    
<meta charset="UTF-8"/>


<title>Formulário</title>

</head>  

<body>
<div>


    <?php

    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    $nome = isset($_GET["nome"])?$_GET["nome"]:nome;
   
    echo "$nome você nasceu em $a e tem $i anos <br/>";

    if ($i < 16){

        $tipoVoto = "Não Vota";

    }

    elseif (($i >= 16 && $i <18) || ($i > 65)) {
     
        $tipoVoto = "Voto Opcional";

    }
 
    else {

        $tipoVoto = "Voto é Obrigatório";

    }


    echo "Para essa idade, $tipoVoto";
       

    ?>
<br/>
<br/>
    <!-- Aqui volta a página -->
    <a href="exercicio02.html">Voltar</a>
</div>

</body>


</html>