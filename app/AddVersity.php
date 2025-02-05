<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class AddVersity extends Model
{
    
    use Notifiable;
    

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','name','description','faculty', 'course', 'credits','maths','english','qualification', 'startDate','endDate',
    ];


}
