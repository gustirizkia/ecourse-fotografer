<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'diskusi';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function jawaban()
    {
        return $this->hasMany('App\Models\Jawaban');
    }
}
