<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class ScoreMarks extends Model
{
    
	use Notifiable;
    

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                'A*','A','B','C', 'D', 'E','F','G','U', 
    ];

	
	
}
