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

    public function getAuditTable()
    {
        return 'book_audits';
    }
    protected $fillable = [
        'title','author_id'
    ];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}