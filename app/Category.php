<?php

namespace App;
use HasFactory;
use App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Addjob;

class Category extends Model
{
    
    protected $fillable=['name'];
    public function addjob(){
        return $this->hasMany(Addjob::class);
    }
}
