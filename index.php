<?php


$aviso = "";
$email = "";
$nome = "";
$mensagem = "";
if (isset($_POST['enviar'])) {

    $nome = "lucasgoncalvess256@gmail.com";
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
}




$assunto = "Nova mensagem";

// Configura as informações do servidor SMTP
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpUser = 'lucasgoncalvess256@gmail.com';
$smtpPass = 'pdiiwwlznltexodi';


// Cria uma instância do objeto PHPMailer
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer;

// Configura as informações do servidor SMTP
$mail->isSMTP();
$mail->Host = $smtpHost;
$mail->Port = $smtpPort;
$mail->SMTPAuth = true;
$mail->Username = $smtpUser;
$mail->Password = $smtpPass;
$mail->SMTPSecure = 'tls';

// Configura as informações do e-mail
$mail->setFrom($email);
$mail->addAddress($nome);
$mail->Subject = $assunto;
$mail->Body = $mensagem;

// Tenta enviar o e-mail
if (!$mail->send()) {
    $aut = "nao";

} else {
   echo "<script>
   alert('Email enviado com sucesso!');
   </script>";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lucas - Portfólio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <style>
        .img-fluid-rounded-circle {
            width: 300px;
            height: 300px;
            border: 1px solid red;
            border-radius: 100%;
        }

        .card-img-top {
            width: 150px;
            height: 150px;
        }

        .list-unstyled {
            display: flex;
            gap: 1%;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Lucas Custódio Gonçalves da Silva</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#abbout">Sobre Mim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sobre Mim -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-4">Sobre Mim</h2>
                    <p>Olá, meu nome é Lucas Custódio Gonçalves da Silva, tenho 21 anos de idade e sou Técnico em
                        Informática pelo IFBA Campus Eunápolis. Ao longo dos meus estudos no Instituto, ganhei diversos
                        conhecimentos que eu, neste momento, sinto vontade de aplicá-los no mercado de trabalho. Tive
                        contato com pacote Office da Microsoft, experiencia sólida com programação de sistemas, já
                        desenvolvi projetos de pequeno, médio e grande porte e sinto o desejo de adquirir mais
                        conhecimentos e experiencias diversificadas dentro do ambiente de trabalho. Eu desejo ser
                        contratado por uma empresa responsável e comprometida com o trabalho, onde eu tenha liberdade de
                        expressar o que eu posso fazer para ajudar a alavancar o crescimento empresarial. Sei que a
                        Internet é a porta para uma infinidade de ganhos e com o conhecimeto adequado que eu garanti,
                        sei que posso ser um instrumento mestre para a instituição que eu tiver a honra em servir.
                        Aguardo seu contato😉</p>
                </div>
                <div class="col-lg-6">
                    <!-- Adicione uma imagem sua aqui -->
                    <img src="img/img.jpg" alt="Foto de Perfil" class="img-fluid-rounded-circle">
                </div>
            </div>
        </div>
    </section>

    <!-- Habilidades -->
    <section id="skills" class="bg-light py-5">
        <div class="container">
            <h2 class="display-4 text-center">Habilidades</h2>
            <div class="row">
                <!-- Adicione suas habilidades aqui -->
                <div class="col-lg-4">
                    <h4>Front-end</h4>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>Bootstrap</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Back-end</h4>
                    <ul>
                        <li>PHP</li>
                        <li>Python</li>
                        <li>MySQL</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4>Ferramentas</h4>
                    <ul>
                        <li>Git</li>
                        <li>VS Code</li>
                        <li>GitHub</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projetos -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="display-4 text-center">Projetos</h2>
            <!-- Adicione seus projetos aqui -->
            <div class="card-deck">
                <div class="card">
                    <img src="img/livro.webp" class="card-img-top" alt="Projeto 1">
                    <div class="card-body">
                        <h5 class="card-title">SIENGE - Sistema de Ensino e Gestão Escolar</h5>
                        <p class="card-text">O SIENGE - Sistema de Ensino e Gestão Escolar, é uma plataforma
                            desenvolvida para funcionar como um sistema de getenciamento de dados acadêmicos, como
                            boletins, ocorrências, elaboração e compartilhamento de atividades escolares, agendamento de
                            aulas e gestão de matriculas, por estas caracteristicas o sistema tem um escopo
                            consideravelmente grande. Tal sistema foi pensado para a Escola Municipal José de Araujo
                            Santana, no bairro Rosa Neto, na cidade de Eunápolis, Bahia. O sistema foi codificado a
                            partir das linguagens HTML, CSS, JavaScript, PHP e SQL.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Pata Dog.png" class="card-img-top" alt="Projeto 2">
                    <div class="card-body">
                        <h5 class="card-title">ClubPet</h5>
                        <p class="card-text">O sistema "ClubPet" é uma aplicação web desenvolvida como um portal de
                            informações entre a população de Eunápolis e o Centro de Controle de Zoonoses da cidade.
                            Hospedado no InfinityFree, utiliza o MySQL da Oracle para gerenciar bancos de dados. A
                            interface do usuário, frontend, é construída com HTML para estrutura, CSS para estilo e
                            JavaScript para interatividade. O backend, parte invisível, é programado em PHP para
                            processamento em tempo real, manipulando dados e interagindo com o banco de dados relacional
                            através de SQL. A IDE utilizada é o Visual Studio Code, com testes feitos localmente no
                            XAMPP. O site é executado no servidor da InfinityFree.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/icon.png" class="card-img-top" alt="Projeto 3">
                    <div class="card-body">
                        <h5 class="card-title">DivWork</h5>
                        <p class="card-text">DivWork é uma plataforma online de vagas de emprego que conecta candidatos
                            a oportunidades de carreira e auxilia empregadores no processo de recrutamento. Com recursos
                            avançados de pesquisa, alertas de emprego, e ferramentas eficientes de gerenciamento, o
                            DivWork oferece uma experiência simplificada e personalizada para ambos os lados. Candidatos
                            podem encontrar vagas alinhadas às suas habilidades, enquanto empregadores podem publicar
                            oportunidades, gerenciar candidatos e simplificar o processo de seleção.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/programacao.png" class="card-img-top" alt="Projeto 3">
                    <div class="card-body">
                        <h5 class="card-title">Code Nation</h5>
                        <p class="card-text">O Code Nation é um blog vibrante e envolvente dedicado a explorar o vasto
                            mundo da programação e desenvolvimento de software. Com uma comunidade ativa e colaborativa,
                            oferece conteúdo diversificado, desde tutoriais práticos até análises de tendências
                            tecnológicas. O blog incentiva projetos práticos e desafios, promovendo uma abordagem
                            prática para o aprendizado. Mantendo os leitores atualizados com as últimas novidades, o
                            Code Nation é mais do que um blog; é um convite para explorar, aprender e criar no
                            emocionante campo da programação. Code Nation - Onde o Código Encontra a Inspiração.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="display-4 text-center">Contato</h2>
            <p class="text-center">Fique à vontade para entrar em contato comigo!</p>
            <!-- Adicione um formulário de contato aqui -->
            <form method="post" action="index.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Seu Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">E-mail</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="seu@email.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMensagem">Mensagem</label>
                    <textarea class="form-control" id="inputMensagem" rows="4"
                        placeholder="Digite sua mensagem" name="mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Enviar Mensagem</button>
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5>Informações de Contato</h5>
                    <p>Endereço: Caminho Um, Bairro Alegria</p>
                    <p>Email: lucasgoncalvess256@gmail.com</p>
                    <p>Telefone: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Tecnologias mais usadas</h5>
                    <ul class="list-unstyled">
                        <li><img src="img/html-5.png" alt="html-5" width="50"></li>
                        <li><img src="img/css-3.png" alt="html-5" width="50"></li>
                        <li><img src="img/script-java.png" alt="html-5" width="50"></li>
                        <li><img src="img/php.png" alt="html-5" width="50"></li>
                        <li><img src="img/bootstrap-logo-shadow.png" alt="html-5" width="50"></li>
                        <li><img src="img/github.png" alt="html-5" width="40"></li>
                        <li><img src="img/mysql.png" alt="html-5" width="40"></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociais</h5>
                    <ul class="list-unstyled" style="display: block;">
                        <li><a href="https://www.facebook.com/lucas.custodio.1042" target="_blank">Facebook</a></li>
                        <li><a href="https://www.linkedin.com/in/lucas-gon%C3%A7alves-67139a29b/"
                                target="_blank">LinkedIn</a></li>
                        <li><a href="https://instagram.com/lucas_cgoncalvess?igshid=OGY3MTU3OGY1Mw=="
                                target="_blank">Instagram</a></li>
                        <li><a href="https://wa.me/73998413091" target="_blank">WhatsApp</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center py-3">
            <p>&copy; <span style="color:red;">2023 Lucas Custódio Gonçalves da Silva.</span> Todos os direitos
                reservados.</p>
        </div>
    </footer>

</body>

</html>