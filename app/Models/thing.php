<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thing extends Model
{
    use HasFactory;
    protected $fillable = ["name","description","wrnt"];

    public function userId(){
        return $this->hasOne(User::class); 
    }
}
