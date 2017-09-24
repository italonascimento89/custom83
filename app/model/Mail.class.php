<?php

class Mail {
  private $to;
  private $from = "fabiodeveloperti@gmail.com";
  private $subject = "Redefinir Senha <Custom83>";
  private $message;
  private $link;
  private $html;
  private $newline = "\n";
  private $header;

  public function __construct($email, $_link){
      $this->to = $email;
      $this->link = $_link;
  }

  public function prepareHeader() {
      $this->header = "MIME-Version: 1.0\n";
      $this->header = 'Subject: =?utf-8?b?' . base64_encode($this->subject) . '?=' ."\n";
      $this->header .= 'Content-Type: multipart/related; boundary="email"'."\n";
      $this->header .= "From: ". $this->from ."\n";
      $this->header .= "Bcc: " . $this->from . "\n";
      $this->header .= "To: $this->to\n";
      $this->header .= 'Date: ' . date('D, d M Y H:i:s O') . "\n";
      $this->header .= 'Return-Path: ' . $this->from . "\n";
      $this->header .= 'X-Mailer: PHP/' . phpversion() . "\n";

    $this->html .= "Redefinir senha Não Perturbe:\n $this->link\n\n Pedido Gerado ".date('D, d M Y H:i:s O');

    //$this->message .= 'Content-Transfer-Encoding: 8bit' . $this->newline . $this->newline;

    return self::sendEmail();
  }

  public function sendEmail(){
      return mail($this->to, $this->subject, $this->html,  $this->header)?"Encaminhado para o email requerido, certifique-se a caixa de Spam!":"Impossivel enviar Requerimento!";
  }
}
