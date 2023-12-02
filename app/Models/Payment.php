<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Note;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function notes()
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
