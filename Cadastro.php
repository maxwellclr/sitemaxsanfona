
<!DOCTYPE html>
<html>
<!--Cabeça-->    
    <head>
        <meta charset="utf-8">
        <title>MC| MaxTiell</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="imagens/Logo MaxTiell Redondo.png" type="image/gif">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Global site tag (gtag.js) - Google Analytics Organic -->
         <script async src="https://www.googletagmanager.com/gtag/js?id=G-QM8KS44QZD"></script>
         <script>
             window.dataLayer = window.dataLayer || [];
             function gtag(){dataLayer.push(arguments);}
             gtag('js', new Date());
             gtag('config', 'G-QM8KS44QZD');
         </script>
     <!-- Global site tag (gtag.js) - Google Analytics Ads-->
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-181373549-1"></script>
         <script>
             window.dataLayer = window.dataLayer || [];
             function gtag(){dataLayer.push(arguments);}
             gtag('js', new Date());
             gtag('config', 'UA-181373549-1');
         </script>
     <!--CSS-->
        <style>
            body {
                color: white;
                font-family: Arial, Helvetica, sans-serif;
                background-color:rgb(53, 53, 53);
            }
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            button:hover {
                opacity: 0.8;
            }
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
                float: right;
            }
            .avatar {
                width:auto;  
                height:350px;
            }
            @media (max-width: 1024px)  {
            .imgartigomaior {
                display: none;
             }
            }
            .imgartigomaior {
                width:20%;
                height:17%;
            }
            @media (min-width: 1025px)  {
            .imgartigomenor {
                display: none;
             }
            }
            .footer {
                border: 2px solid rgb(30, 30, 30);
                border-radius: 8px; 
                background-color:rgb(30, 30, 30);
                text-align: center;
                color: white;
            }
            .container {
                padding: 16px;
                margin-bottom:17px;
                border: 2px solid rgb(30, 30, 30);
                border-radius: 8px; 
                background-color:rgb(30, 30, 30);
            }
            span.psw {
                padding-top: 16px;
                float: left;
            }
            .h2 { 
                text-align:center;
            }
     /* Redes Sociais*/
            .redes {
                text-align:center;
            }
            .fa {
                padding: 10px;
                font-size: 25px;
                width: 28px;
                text-align: center;
                text-decoration: none;
                margin: 8px px;
                border-radius: 100%;
            }
            .fa:hover {
                opacity: 0.7;
            }
            .fa-facebook {
                background: #3B5998;
                color: white;
            }
            .fa-telegram{
                background: #007bb5;
                color: white;
            }
            .fa-youtube {
                background: #bb0000;
                color: white;
            }
            .fa-instagram {
                background: #125688;
                color: white;
            }
            .fa-whatsapp {
                background: #1c8812;
                color: white;
            }
     /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw{
                display: block;
                float: none;
             }
            }
            @media (max-width: 768px )  {
                .header, .section, .redes, .footer{
                width: 100%;
                height: auto;
             }
            }
            .cancelbtn {
                width: 100%;
            }
        </style>
</head>
<body>
 <!--Corpo-->
 <div class="section" >
    <form method="POST" action="insert.php">
        <div class="container">
            <br>
                <img class="imgartigomaior" src="imagens/Logo MC3.png" alt="imgartigomaior" style="float:center">
                <img class="imgartigomenor" src="imagens/Logo MC3.png" alt="imgartigomenor" style="width:100%;height:auto;float:center">
                <h2 class="h2">Faça o Cadastro para continuar.</h2>
                <label for="usuario"><b>Nome</b></label>
                <input  style="border-radius: 7px;" type="text" placeholder="Colocar Nome" name="usuario" required>
                <label for="email"><b>E-mail</b></label>
                <input style="border-radius: 7px;" type="text" placeholder="Colocar E-mail" name="email" required>
                <label for="senha"><b>Senha</b></label>
                <input style="border-radius:7px" type="password" placeholder="Colocar Senha" name="senha" required>
                <button type="submit" style="border-radius: 7px;" name="acao">Fazer Cadastro</button>
            <br>
                <a href="https://maxtiell.com/MusicClass.html"><button type="button" class="cancelbtn" style="border-radius: 7px;">Cancelar</button></a>
            <br>
            <br>
                
        </div>
    </form>
 </div>
 <!--Rodapé--> 
 <div class="footer" >
    <div class="redes">
        <br>
        <a href="https://www.youtube.com/channel/UCbPsCV1WXD2wEsnj69375SQ" target="_blank" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com/maxtiell/" target="_blank" class="fa fa-instagram"></a>
        <a href="https://www.facebook.com/maxtiell" target="_blank" class="fa fa-facebook"></a>
        <a href="https://api.whatsapp.com/send?phone=5561982658962&text=" target="_blank" class="fa fa-whatsapp"></a>
        <a href="https://t.me/maxtiell" target="_blank" class="fa fa-telegram"></a>
    </div>
    <br>
    <div class="footer">&copy; Copyright 2020-2021| All rights reserved to Music Class.
    </div>    
  </div>
</body>
 <!--Fim html-->
</html>
