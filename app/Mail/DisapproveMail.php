<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DisapproveMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@filo.com', '${APP_NAME}')
        ->subject('Your Request')
        ->markdown('emails.disapprove')
        ->with([
            'name' => 'New Mailtrap User',
            'link' => 'https://mailtrap.io/inboxes'
        ]);
    }
}
