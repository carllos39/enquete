

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mova- se [Página principal]</title>
    <meta name="description" content="O mova-se é um site educacional, 
    com a proposta de fazer reservas e pacotes de viagens 
    com esportes radicais.">

        <!-- CSS Estilo -->
        <link rel="stylesheet" href="css/estilo.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />


</head>

<body>
    <header id="topo">
        <div>
            <h1>
                <a href="index.html"><img src="imagem/logo.png" alt="Logotipo"></a>
            </h1>
            <span id="iconMenu" class="material-symbols-outlined" onclick="clickMenu()">
                menu
            </span>
            <nav id="itens">
                <a href="index.html" tabindex="1">Home</a>
                <!--tabindex é utilizado para a acessibilidade-->
                <a href="pacotes.html" tabindex="2">Pacotes</a>
                <a href="acessorios.html" tabindex="3">Acessórios</a>
                <a href="contato.php" tabindex="4">Contato</a>
            </nav>
        </div>
    </header>


    <main class="conteudo">
        <div class="conteudo-info" id="conteudo-contato">
            <article class="cont-contato">
                <div class="formulario">
                    <h2 class="titulo">Contato</h2>
                    <p>Preencha os campos abaixo para entrar em
                        contato com nossa equipe de atendimento.</p>

                    <?php 
                    //Verificando os campos

                    if( isset($_POST['enviar'])){
                        if( !empty($_POST['nome'])&& !empty($_POST['email'])&& !empty($_POST['celular'])&& !empty($_POST['assunto']) && !empty($_POST['mensagem'])&& !empty($_POST['data'])){
                    //Pegar os valores preenchidos no campo
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $celular = $_POST['celular'];
                    $assunto = $_POST['assunto'];
                    $mensagem = $_POST['mensagem'];

                    $data = date('Y-m-d H :i :s');
                   //Conectando com o banco
                   include "conecta.php";

                   //Montando a consulta sql
                   $sql= "INSERT INTO contato (nome,email,celular,assunto,mensagem,data)";
                   $sql.="VALUES('{$nome}','{$email}','{$celular}','{$assunto}','{$mensagem}','{$data}')";

                   mysqli_query($conexao ,$sql) or die(mysqli_error($conexao));
            
                        
                    
                    ?> 
                    <p>Seus dados foram enviados com sucesso!</p>
                    <?php 
                   } else{
                        
                    ?>
                 <p>Você deve preencher tpodos os campos obrigatórios</p>
                 <p><a href="contato.php">Voltar ao formulário</a></p>
                   <?php 
                   }

                    }else{
                    
                    ?>
                    <form action="" id="form-contato" method="post" name="contato">
                        <p>
                            <label for="nome">Nome:</label>
                            <input tabindex="5" required type="text" id="nome" name="nome">
                        </p>
                        <p>
                            <label for="email">E-mail:</label>
                            <input tabindex="6" required type="email" id="email" name="email">
                        </p>
                        <p>
                            <label for="telefone">Celular:</label>
                            <input tabindex="7" required type="tel" id="telefone" name="celular">
                        </p>
                        <p>
                            <label for="assunto">Assunto:</label>
                            <input tabindex="8" required type="text" id="assunto" name="assunto">
                        </p>
                        <p>
                            <label for="mensagem">Mensagem:</label>
                            <textarea tabindex="9" name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
                        </p>
                        <p>
                            <button tabindex="10" id="limpar" type="reset" name="limpar">Limpar Campos</button>
                            <button tabindex="11" id="enviar" name="enviar">Enviar Dados</button>
                        </p>
                    </form>
                    <?php 
                    }
                    ?>
                    
                </div>
            </article>
            <article class="cont-contato" id="localizacao-end"> <!--acrescentar o id-->
                <div class="localizacao">
                    <h2 class="titulo">Localização</h2>
                    <p>Rua tito, 54 - Vila Romana<br>CEP: 05051-000 - São Paulo
                    <br>telefone: (11) 2888-5500
                    <br>e-mail: lapatito@sp.senac.br
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.1261441208867!2d-46.697468125784106!3d-23.527964978822755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8768338062b%3A0xc990914f925240f4!2sR.%20Tito%2C%2054%20-%20Vila%20Romana%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005051-000!5e0!3m2!1spt-BR!2sbr!4v1689619483974!5m2!1spt-BR!2sbr" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </article>
        </div>
    </main>

    <footer class="rodape">
        <div class="rodape-conteudo">
            <div id="logo-rodape">
                <a href="index.html"><img src="imagem/logo.png" alt="Logotipo"></a>
            </div>
            <div class="menu-rodape">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Terrestre</a></li>
                    <li><a href="#">Montanha</a></li>
                    <li><a href="#">Aquático</a></li>
                    <li><a href="#">Aéreo</a></li>
                </ul>
            </div>
            <div class="menu-rodape">
                <ul>
                    <li><a href="pacotes.html">Pacotes</a></li>
                    <li><a href="acessorios.html">Acessorios</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </div>
            <div class="redes">
                <aside>
                    <img src="imagem/facebook.png" alt="Logo do Facebook">
                    <img src="imagem/insta.png" alt="Logo do Instagram">
                    <img src="imagem/youtube.png" alt="Logo do Youtube">
                </aside>
            </div>
        </div>
        <div class="assinatura">
            <p>Desenvolvido por <b>SEU NOME</b> Site acadêmico |
                Todos os direitos reservados |
                SENAC TITO &copy; 2024</p>

        </div>

    </footer>
   
    <script src="js/interacao.js"></script>
</body>

</html>