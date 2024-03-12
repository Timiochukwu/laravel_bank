<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     // Define the relationship method
     public function accountTypeeee()
     {
         return $this->belongsTo(account_type::class, 'account_type_name', 'hash_id');
     }

     public function loanApplication()
     {
         return $this->belongsTo(LoanApplication::class, 'customer_hash_id', 'hash_id');
     }
     

    

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'first_name',
        'last_name',
        'username',
        'email',
        'phone_number',
        'account_type_name',
        'account_number',
        'account_balance',
        'password',
    ];

    /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'customer_id';


    /**
   * The table for the actual table.
   *
   * @var string
   */
  protected $table = 'customer';

  
  /**
  * The attributes that should be hidden for serialization.
  *
  * @var array<int, string>
  */
 protected $hidden = [
     'password',
     'remember_token',
 ];

 /**
  * The attributes that should be cast.
  *
  * @var array<string, string>
  */
 protected $casts = [
     'email_verified_at' => 'datetime',
     'password' => 'hashed',
 ];

//  public function accountType(){
//     return $this->belongsTo(A)
//  }


}
