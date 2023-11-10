<?php
include "conexao.php";

if(isset($_POST["save"])){
  $name = $_POST["nome"];
  $sql="INSERT INTO usuario (id, nome) VALUES (NULL, '$name')";
  $resultado=banco($servidor, $user, $senha, $nome, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  </meta>
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  </link>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </meta>
  <title>Inicio</title>
  <link rel="stylesheet" href="index.css">
  </link>
</head>

<body>
  <nav>
    <div class="logo_nav">
      <button onclick="window.location.href='inicio.html'" type="submit"></button>
      <span class="users">Usuários: 560.000</span>
    </div>

    <ul>
      <li><a href="#">Sobre nós</a></li>
      <li><a href="#">Vagas de emprego</a></li>
      <li><a href="#">Categorias</a></li>
      <li><a href="#">Empresas parceiras</a></li>
    </ul>

    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>
  </nav>

  <div class="menu">
    <ul class="menu-items">
      <li><a href="#">Sobre nós</a></li>
      <li><a href="#">Vagas de emprego</a></li>
      <li><a href="#">Empresas parceiras</a></li>
      <li><a href="#">Categorias</a></li>
      <li><a id="close-menu"><img src="img/botao-fechar.png" alt=""></a>
      </li>
    </ul>
  </div>

  <div class="container_principal">
    <div class="container1">
      <form action="index.php" method="POST">
        <h1>Area de Cadastro <span
            style="color:blue; font-weight: bold;border:2px solid black; border-right: none; border-radius: 10px;">Div</span><span
            style="border-radius: 10px;color:blue; font-weight:100; border:2px solid black; border-left: none;">Work</span>
        </h1><br>

        <div class="btngoogle">
          <button class="btngg" type="button" onclick="window.location.href='inicio.html'">
            <span><img src="img/google.png" alt=""></span><i>Entrar com o Google</i>
          </button><br>
        </div>

        <h2>--OU SE PREFERIR--</h2><br>

        <div class="formulario">
          <label for="nome">Nome Completo</label>
          <input type="text" name="nome" id="nome" placeholder="Seu nome">

          <label for="numero">Numero de Telefone</label>
          <input type="text" name="numero" id="numero" placeholder="Com seu Whatsapp você recebe todas as novidades">

          <label for="email">Endereço de Email</label>
          <input type="text" name="email" id="email" placeholder="Seu melhor email">

          <label for="senha">Criar uma senha</label>
          <input type="password" name="senha" id="senha" placeholder="Informe uma senha">

          <label for="senha">Confirmar senha</label>
          <input type="password" name="confsenha" id="confsenha" placeholder="Confirmar senha">

          <button class="btn_create" name="save">Criar conta</button>

          <a href="https://google.com" class="ir_para_login">Já possui conta? Faça Login</a>
        </div>
      </form>

      <div class="redes_sociais">
        <ul>
          <li>
            <a href="#">Instagram&nbsp;</a>

            <a href="">|</a>

            <a href="#">&nbsp;LinkedIN</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="container2">
      <img src="img/trabalho.jpg" alt="" class="img_container2">
      <div class="vagas_emprego">
        <p>
          Precisando de emprego? Você está no lugar certo, aqui na DivWork
          diversas empresass anunciam vagas de emprego que estão aguardando
          por você. Basta que você faça seu cadastro e prontooo!
        </p>

      </div>
    </div>
  </div>

  <script>
    const menuBtn = document.querySelector(".menu-btn");
    const menu = document.querySelector(".menu");

    menuBtn.addEventListener("click", () => {
      menu.classList.toggle("active");
    });

    const closeMenuLink = document.getElementById("close-menu");
    closeMenuLink.addEventListener("click", () => {
      menu.classList.remove("active");
    });
  </script>
</body>

<footer>
  <p>&copy; Desenvolvido por Lucas Custódio Gonçalves da Silva. DivWork, 2023. Todos os direitos reservados.</p>
  <div class="footerclick">
    <img src="img/icon.png" alt="">
    <a target="_blank" class="whats" href="https://wa.link/vgcj0k"></a>
    <a target="_blank" type="submit" class="insta" href="https://instagram.com"></a>
  </div>


</footer>

</html>