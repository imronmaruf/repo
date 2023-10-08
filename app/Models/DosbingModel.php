<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosbingModel extends Model
{
    use HasFactory;

    public $table= 'dosen_pembimbing';
    public $fillable=[
        'nama','nip'
    ];
}
