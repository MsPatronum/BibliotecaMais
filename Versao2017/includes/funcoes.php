<?php 
function enviaEmail($destinatario,$titulo,$mensagem){

	include ("config.php");
	include (raiz."/PHPMailer-master/PHPMailerAutoload.php");

//Cria uma nova instancia do PHPMailer
$mail = new PHPMailer;

$mail->CharSet='UTF-8';
//Define o e-mail e nome de quem esta enviando a mensagem
$mail->setFrom('infoweb@infoweb.com.br', 'InfoWeb');

//Define o e-mail para opção "responder" (opcional)
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Define o e-mail e nome do destinatário
$mail->addAddress($destinatario, "");

//Assunto da mensagem
$mail->Subject = $titulo;

//conteudo

//Texto da mensagem
$mail->msgHTML(msgHtml($mensagem));

//Substitu o corpo de texto simples por um criado manualmente
$mail->AltBody = 'This is a plain-text message body';

//Arquivos em anexo (opcional)
//$mail->addAttachment('images/phpmailer_mini.png');

//Envia a mensagem e verifica erros
if (!$mail->send()) {
    return 0;
} else {
    return 1;
}


}

function msgAtivaConta($codigo){
$mensagem="<div class='row'>
             <div class='col-sm-12 text-center'>
                     <h3>Olá!</h3>
                     <p class='lead'>Obrigado por se cadastrar em nosso site <i><u>infoweb.com</u></i> <br> para ativar a sua conta clique no link abaixo:</p>
                     <p>
                     <a href='http://infoj.com.br/apostilasinfoweb/ativaConta.php?ativacao=$codigo' class='btn btn-primary'>Ativar conta</a>
                     </p>
              </div>

             </div>";
  return $mensagem;           
}


function msgHtml($mensagem){

$estrutura = '<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>InfoWeb</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    '.$mensagem.'
    </body>
</html>';

return $estrutura;
}

?>

