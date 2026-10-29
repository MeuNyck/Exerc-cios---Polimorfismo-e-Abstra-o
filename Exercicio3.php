<?php

class Notificacao{
    public function enviar($mensagem){
        return "Notificação enviada: " . $mensagem;
    }
}

class NotificacaoEmail extends Notificacao{
    public function enviar($mensagem){
        return "Notificação do Email chegou! Mensagem: " . $mensagem;
    }
}

class NotificacaoSMS extends Notificacao{
    public function enviar($mensagem){
        return "Notificação do SMS chegou! Mensagem: " . $mensagem;
    }
}

class NotificacaoPush extends Notificacao{
    public function enviar($mensagem){
        return "Notificação do Push chegou! Mensagem: " . $mensagem;
    }
}

function enviarNotificacao(Notificacao $notificacao, $mensagem){
    echo "<b>" . $notificacao->enviar($mensagem) . "</b><br><br>";
}

$email = new NotificacaoEmail();
$sms = new NotificacaoSMS();
$push = new NotificacaoPush();

$mensagem = "Sua inscrição foi realizada com sucesso!";

echo "Vou ver meu celular.<br><br>";
enviarNotificacao($email, $mensagem);
echo "Opa!<br><hr>";

echo "Vou ver meu celular de novo.<br><br>";
enviarNotificacao($sms, $mensagem);
echo "Opa!!<br><hr>";

echo "Vou ver meu celular mais uma vez.<br><br>";
enviarNotificacao($push, $mensagem);
echo "Opa!!!";

?>