<?php 
     require '../../vendor/autoload.php';
    require '../../config.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recebendo os dados do formulário
    $nome = $_POST["nome"] ?? "Preencha o nome";
    $email = $_POST["email"] ?? "Preencha o email";
    $emailDestinatario = "luzolomampassi8@gmail.com";
    $assunto = $_POST["assunto"] ?? "Preencha o assunto";
    $msg = $_POST["mensagem"] ?? "Preencha a mensagem";

    $mensagemEmail = "Nome: $nome\n";
    $mensagemEmail .= "E-mail: $email\n";
    $mensagemEmail .= "Mensagem: $msg";

    // Usando o PHPMailer para o envio

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPassword;
    $mail->setFrom('luzolomampassi8@gmail.com', 'Luzolo');
    $mail->addAddress($emailDestinatario);
    $mail->addReplyTo($email, $nome);
    $mail->Subject = $assunto;
    $mail->Body = $mensagemEmail;
      
    try {
        $mail->send();

    } catch (Exception $e) {
        echo 'Erro ao enviar: ' . $mail->ErrorInfo;
    }
  
}
 
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <script src="https://kit.fontawesome.com/f6a9b3f1e7.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../estilos/header.css">
    <link rel="stylesheet" href="../estilos/contato.css">
    <link rel="stylesheet" href="../estilos/banner.css">
    <link rel="stylesheet" href="../estilos/footer.css">
<style>
.container {
width: min(90%, 650px);
min-height: 650px;
margin: 50px auto;

display: flex;
justify-content: center;
align-items: center;

padding: 12px;

background-color: white;
border-radius: 20px;
}

.content {
    position: relative;

    width: 100%;
    min-height: 625px;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    padding: 40px;

    overflow: hidden;

    border: 1px solid #426070;
    border-radius: 18px;

    background:
        radial-gradient(
            circle at 50% 20%,
            rgba(52, 203, 121, .15),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #123b3c,
            #0E2B32 55%,
            #071a26
        );

    box-shadow:
        0 0 40px rgba(52, 203, 121, .08),
        inset 0 0 40px rgba(52, 203, 121, .03);

    text-align: center;
}


/* CHECK */

.check {
    width: 110px;
    height: 110px;

    display: flex;
    justify-content: center;
    align-items: center;

    margin-bottom: 35px;

    border-radius: 50%;

    background: #28c778;

    box-shadow:
        0 0 0 15px rgba(52, 203, 121, .08),
        0 0 0 28px rgba(52, 203, 121, .04),
        0 0 35px rgba(52, 203, 121, .35);
}

.check i {
    color: white;
    font-size: 55px;
}


/* TÍTULO */

h2 {
    margin: 0;

    max-width: 550px;

    color: white;

    font-size: clamp(1.8rem, 4vw, 2.7rem);
    line-height: 1.2;

    font-weight: 700;
}

h2 span {
    display: block;

    margin-top: 5px;

    color: #34CB79;
}


/* TEXTO */

p {
    margin: 30px 0;

    color: #d5dddd;

    font-size: 1.1rem;
    line-height: 1.7;
}


/* LINHA */

.linha {
    width: 230px;
    height: 1px;

    position: relative;

    margin: 5px 0 35px;

    background: rgba(255, 255, 255, .1);
}

.linha span {
    position: absolute;

    width: 9px;
    height: 9px;

    top: 50%;
    left: 50%;

    transform: translate(-50%, -50%);

    border-radius: 50%;

    background-color: #34CB79;

    box-shadow: 0 0 10px #34CB79;
}


/* BOTÃO */

a {
    width: 85%;

    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;

    padding: 17px 20px;

    color: white;

    background: linear-gradient(
        135deg,
        #34CB79,
        #20AE68
    );

    border-radius: 12px;

    text-decoration: none;

    font-size: 1rem;

    box-shadow:
        0 10px 25px rgba(52, 203, 121, .18);

    transition:
        transform .2s ease,
        box-shadow .2s ease;
}

a i {
    font-size: 1.2rem;
}

a i:last-child {
    transition: transform .2s ease;
}

a:hover {
    transform: translateY(-3px);

    box-shadow:
        0 14px 30px rgba(52, 203, 121, .3);
}

a:hover i:last-child {
    transform: translateX(5px);
}


/* RESPONSIVIDADE */

@media (max-width: 600px) {

    .container {
        width: 90%;
        min-height: 400px;
        margin: 30px auto;
    }

    .content {
        min-height: 500px;
        padding: 30px 20px;
    }

    .check {
        width: 85px;
        height: 85px;

        margin-bottom: 25px;
    }

    .check i {
        font-size: 42px;
    }

    h2 {
        font-size: 1.7rem;
    }

    p {
        font-size: .95rem;
    }

    a {
        width: 100%;
    }
}
</style>
</head>
<body>

    <div class="container">
    <div class="content">

        <div class="check">
            <i class="fa-solid fa-check"></i>
        </div>

        <h2>
            Mensagem enviada com
            <span>sucesso!</span>
        </h2>

        <p>
            Obrigado por entrar em contato.<br>
            Retornaremos em breve.
        </p>

        <div class="linha">
            <span></span>
        </div>

        <a href="contato.html">
            <i class="fa-regular fa-envelope"></i>
            <strong>Voltar para o contato</strong>
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>
</div>
    
</body>
</html>
