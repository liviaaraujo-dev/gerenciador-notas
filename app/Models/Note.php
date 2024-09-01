<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;


    protected $table = 'notes';

     // Definir quais campos podem ser preenchidos em massa
    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    // Relacionamento: uma nota pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
