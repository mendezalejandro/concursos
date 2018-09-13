<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $demo;
    public function __construct($demo)
    {
        $this->demo = $demo;
        //$this->middleware('auth');
    }
    public function build()
    {
        return $this->from('concursosdocentesunaj@gmail.com')
                    ->view('mails.demo')
                    ->text('mails.demo_plain')
                    ->with(
                      [
                            'testVarOne' => '1',
                            'testVarTwo' => '2',
                      ])
                      ->attach(public_path('/imagenes').'/fondo_pizarra.jpg', [
                              'as' => 'demo.jpg',
                              'mime' => 'image/jpeg',
                      ]);
    }
}
