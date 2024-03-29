<?php

namespace App\Models;

use Illuminate\Support\Str;
use Coderflex\LaravelTicket\Models\Category as TicketCategory;

class Category extends TicketCategory
{
    public static function boot()
    {
        parent::boot();

        static::saving(function (Category $category) {
            $category->slug = Str::slug($category->name);
        });
    }
}
