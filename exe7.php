<?php
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

trait Mensagens {
    public function enviarMensagem($mensagem){
        echo "Registrando mensagem: $mensagem";
    }
}

class EmailSender {
    use Mensagens;
    private $condicao;
    public function enviarEmail($condicao){
        if($condicao === true) {
            $this->enviarMensagem("Email enviado com sucesso.");
        } else {
            $this->enviarMensagem("Email não foi enviado.");
        }
    }
}

class SmsSender {
    use Mensagens;
    private $condicao;
    public function enviarSms($condicao){
        if ($condicao === true) {
            $this->enviarMensagem("SMS enviado com sucesso.");
        } else {
            $this->enviarMensagem("SMS não foi enviado por problemas.");
        }
    }
}

$email = new EmailSender();
$sms = new SmsSender();

$email->enviarEmail(false);
echo "<br/>";
$sms->enviarSms(true);
?>