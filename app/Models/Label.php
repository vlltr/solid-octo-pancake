<?php

namespace App\Models;

use Illuminate\Support\Str;
use Coderflex\LaravelTicket\Models\Label as TicketLabel;

class Label extends TicketLabel
{
    public static function boot()
    {
        parent::boot();

        static::saving(function (Label $label) {
            $label->slug = Str::slug($label->name);
        });
    }
}
