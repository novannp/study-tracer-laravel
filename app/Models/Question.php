<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'type_id', 'kuesioner_id', 'answers'];

    protected $with = ['question_types', 'kuesioner'];

    public function question_types()
    {
        return $this->hasOne(QuestionType::class, 'id');
    }

    public function kuesioner()
    {
        return $this->belongsTo(Kuesioner::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
