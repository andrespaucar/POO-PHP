<?php
// INYECCION DE DEPENDENCIAS (DI)

// class MailChimp {
//     public function send($subject,$to,$from){
//         return "<b>$subject</b> is sending an email using <b>MailChimp</b> services from <b>$from</b> to <b>$to</b>";
//     }
// }
// class Sengrid {
//     public function send($subject,$to,$from){
//         return "<b>$subject</b> is sending an email using <b>MailChimp</b> services from <b>$from</b> to <b>$to</b>";
//     }
// }
// class MailGun {
//     public function send($subject,$to,$from){
//         return "<b>$subject</b> is sending an email using <b>MailChimp</b> services from <b>$from</b> to <b>$to</b>";
//     }
// }

// class Mailing {
//     public function sendToUsers(){
//         $eProvider = new MailChimp();
//         $mails = ['erodriguezp105@gmail.com', 'user1@gmail.com', 'user2@gmail.com'];
//         foreach($mails as $mail) {
//             echo $eProvider->send('News from my website', $mail, 'admin@mywebsite.com') . '<br />';
//         }
//     }
// }

// $m = new Mailing();
// $m->sendToUsers();

//-----------------------------------------------------------
interface IEmailProvider {
    public function send($subject, $to, $from);
}
class MailChimp implements IEmailProvider{
    public function send($subject, $to, $from) {
        return "<b>$subject</b> is sending an email using <b>MailChimp</b> services from <b>$from</b> to <b>$to</b>";
    }
}

class Sengrid implements IEmailProvider{
    public function send($subject, $to, $from) {
        return "<b>$subject</b> is sending an email using <b>Sengrid</b> services from <b>$from</b> to <b>$to</b>";
    }
}

class MailGun implements IEmailProvider{
    public function send($subject, $to, $from) {
        return "<b>$subject</b> is sending an email using <b>MailGun</b> services from <b>$from</b> to <b>$to</b>";
    }
}

class Mailing {
    private $eProvider;

    public function __CONSTRUCT(IEmailProvider $_eProvider) {
        $this->eProvider = $_eProvider;
    }

    public function sendToUsers() {
        $mails = ['erodriguezp105@gmail.com', 'user1@gmail.com', 'user2@gmail.com'];

        foreach($mails as $mail) {
            echo $this->eProvider->send('News from my website', $mail, 'admin@mywebsite.com') . '<br />';
        }
    }
}
$m = new Mailing(new Sengrid );// Podemos cambiar de proveedor
$m->sendToUsers();
