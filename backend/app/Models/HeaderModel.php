<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderModel extends Model
{
    use HasFactory;

    protected $table = "header";
    protected $fillable = ['content'];
}
