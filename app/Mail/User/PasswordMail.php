<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordMail extends Mailable
{
  use Queueable, SerializesModels;

  public $password;

  public $userName;

  public $userEmail;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($password, $userName, $userEmail)
  {
    //
    $this->password = $password;
    $this->userName = $userName;
    $this->userEmail = $userEmail;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->markdown('mail.user.password');
  }
}
