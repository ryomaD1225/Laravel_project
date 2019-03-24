<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailReceiver extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $contact;
    
    
    public function __construct($receiverQRcode)
    {
    // 引数で受け取ったデータを変数にセット
      $this->contact = $receiverQRcode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@example.com')->subject('テスト送信完了')->view('email.receiver')->with(['contact' => $this->contact]);
    }
}
