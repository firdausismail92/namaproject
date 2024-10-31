<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyInformation extends Model
{
    protected $table = 'study_information';

    protected $fillable = [
        'user_id',
        'university_name',
        'degree',
        'field_of_study',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
