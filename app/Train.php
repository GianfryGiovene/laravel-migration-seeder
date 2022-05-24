<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trains';
    public function getDateUser(){
        return date("d/m/Y", strtottime($this->data_ordine));       
    }
}
