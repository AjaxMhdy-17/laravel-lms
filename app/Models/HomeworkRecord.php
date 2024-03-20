<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeworkRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_whatsapp',
        'user_id',
        'user_status',
        'selected_course' ,
        'home_work_link',
        'appoved'
    ];
}
