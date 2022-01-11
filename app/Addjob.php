<?php

namespace App;
use HasFactory;
use App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Addjob extends Model
{
    
    protected $fillable=['Cname'];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
