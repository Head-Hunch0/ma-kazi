<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $guarded=[];
    use HasFactory;

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function build()
    {
        return $this
            ->subject('Thank you for subscribing to our newsletter')
            ->markdown('emails.subscribers');
    }

}
