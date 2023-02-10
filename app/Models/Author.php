<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class Author extends Model implements AuditableContract
{
    use HasFactory; 
    use Auditable;
//    

    protected $fillable = [
        'name',
    ];

     public function books()
    {
        return $this->hasMany(Book::class);
    }
}