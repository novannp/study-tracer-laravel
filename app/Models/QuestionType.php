<?php

namespace App\Models;

use App\Http\Controllers\AnswerController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function question()
    {
        return $this->belongsTo(Question::class, 'type_id');
    }
}
