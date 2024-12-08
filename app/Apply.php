<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Apply extends Model
{
     use Notifiable;
    

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      
	                'name_id',
					'varsity_id',
					'school',
					'course',
					'accounting',
		            'computer',
		            'sesotho',
		            'business_Studies',
		            'english',
		            'mathematics',
		            'physical_Science',
		            'biology',
					
	  
	  ];


}
                    
					