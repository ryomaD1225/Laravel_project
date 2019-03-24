<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $contact;
    
    
    public function __construct($requesterQRcode)
    {
    // 引数で受け取ったデータを変数にセット
      $this->contact = $requesterQRcode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@example.com')->subject('テスト送信完了')->view('email.test')->with(['contact' => $this->contact]);
    }
}
