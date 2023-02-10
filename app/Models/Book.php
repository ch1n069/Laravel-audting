<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;


class Book extends Model implements AuditableContract
{
    use HasFactory;
    use Auditable;

  
    protected $fillable = [
        'title','author_id'
    ];
    // this define the relationship with the between the book to the author and
    //one to one relationship 
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}