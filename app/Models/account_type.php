<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class account_type extends Authenticatable
{
    use HasFactory;

     // Define the relationship method
    //  public function custom()
    //  {
    //      return $this->hasMany(customer::class, 'hash_id');
    //  }

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
