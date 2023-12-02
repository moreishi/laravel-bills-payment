<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Note;

class Biller extends Model
{
    use HasFactory;

    protected $fillable = [
        'billerName',
        'billerCode',
        'billerDescription'
    ];

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }

}
