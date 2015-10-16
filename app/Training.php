<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //
    protected $fillable = ['training_name','training_type','applying_information','objectives','courses','start_date','end_date','provided_resources','accommodation','testimonial','daily_schedule','fees_structure','responsible_person','training_slug'];
}
