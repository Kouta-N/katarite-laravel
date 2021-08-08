<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContractTalker extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs_talker)
    {
        $this->inputs_talker = $inputs_talker;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.talker_email')->from(config('mail.admin'))->subject('契約が完了しました。')->with(['inputs_talker'=>$this->inputs_talker]);
    }
}