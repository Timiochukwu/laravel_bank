<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account_type extends Model
{
    use HasFactory;

     // Define the relationship method
     public function customers()
     {
         return $this->hasMany(customer::class, 'account_type_name');
     }

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $fillable = [
        'id',
        'hash_id',
        'account_name',
        'minimum_opening_balance',
        'maximum_opening_balance',
        'expected_minimum_balance',
        'expected_maximum_balance',
     ];

     /**
    * The primary key for the model.
    *
    * @var string
    */
   protected $primaryKey = 'hash_id';
 

 
 



}
