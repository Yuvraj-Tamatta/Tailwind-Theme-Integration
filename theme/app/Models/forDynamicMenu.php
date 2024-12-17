<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class forDynamicMenu extends Model
{
    protected $table ="forDynamicMenu";

    protected $fillable = [
        'parent', 'active', 'icon', 'title', 'route', 'role',
    ];

    protected $guarded = [];
}
