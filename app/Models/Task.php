<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'status', 'user_id'];

    //Relação um a muitos
    public function user(){
        return $this->belongsTo(User::class);
    }
}