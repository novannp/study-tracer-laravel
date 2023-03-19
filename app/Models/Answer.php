<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'question_type_id', 'answer'];

    protected $with = ['questions'];

    public function questions()
    {
        return $this->belongsTo(Question::class, 'id');
    }
}
