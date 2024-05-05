<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'informations';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'language' => 'json'
    ];
}
