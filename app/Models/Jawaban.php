<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'jawaban';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function diskusi()
    {
        return $this->belongsTo('App\Models\Diskusi');
    }
}
