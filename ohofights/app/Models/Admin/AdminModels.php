<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModels extends Model
{
    use HasFactory;
    protected $table = 'users';
    public $timestamps = false;
}
