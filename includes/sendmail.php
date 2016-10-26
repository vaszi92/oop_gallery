<?php

class MailSender {
    
    public $to;
    public $subject;
    public $message;
    public $headers;
    
    public function sendmail() {
        $result = mail($this->to, $this->subject, $this->message, $this->headers);
        return $result;
    }
    
}

?>

