<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncryptAes extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'filename',
        'encrypted_file',
        'encryption_key',
        'description',
    ];
}
