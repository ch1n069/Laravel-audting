<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Author extends Model implements Auditable
{
    use HasFactory; 
    // use Auditable;
    
    use \OwenIt\Auditing\Auditable;
//    

    protected $fillable = [
        'name',
    ];
    ///define the relationship to the book one to many relationships
     public function books()
    {
        return $this->hasMany(Book::class);
    }
}