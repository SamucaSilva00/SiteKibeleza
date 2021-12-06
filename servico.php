<!DOCTYPE html><!--Inicio informando que será html-->


<html lang="pt-br"><!--informação da lingaugem nativa do site -->



<head><!--inicio partizinha de cima-->
    
    <meta charset="utf-8"><!--permissao de caracteres especiais-->
    
    <title>SITE KIBELEZA</title><!--titulo partizinha de cima-->
    
    <meta name="viewport" content="width=device-width, initial scale=1">

    <link rel="stylesheet" type="text/css" href="css/reset.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    
    <link rel="stylesheet" type="text/css" href="css/lity.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!--adciona a linguagem css no codigo como um todo -->
</head>

<body><!--Corpo site-->   
    
    <!--Cabeçalho-->
    <?php require_once("conteudo/topo.php") ?>
    <!--fim cabeçalho-->

    <!--banner-->
    <?php require_once("conteudo/banner.php") ?>
    <!--banner-->

    <!--servico-->    
    <?php require_once("conteudo/servicoConteudo.php") ?>    
    <!--servico-->

    <!--equipe-->
    <section class="equipe">
        <?php require_once("conteudo/equipeConteudo.php") ?>    
    </section>
    <!--equipe-->

    <!--rodape-->
    <?php require_once("conteudo/rodape.php") ?>
    <!--rodape-->

    <!--Aba jS-->
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script type="text/javascript" src="js/lity.js"></script>
        
    <script src = "js/wow.min.js"> </script>
    <script type="text/javascript" src="js/animacoes.js"></script>
    <!--Aba jS-->                   

</body><!--fim corpo site-->


</html>