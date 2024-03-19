<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // public function loanTyped()
    // {
    //     return $this->belongsTo(LoanType::class, 'loan_type_id', 'hash_id');
    // }
    public function loanTypeee()
    {
        return $this->belongsTo(LoanType::class, 'loan_type_id', 'hash_id');
    }

   public function customerInfo()
   {
       return $this->belongsTo(customer::class,'customer_hash_id', 'customer_id');
   }

   

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $fillable = [
        'hash_id',
        'customer_hash_id',
        'amount',
        'bank',
        'account_number',
        'loan_type_id',
        'installment_count',
        'installment_amount',
        'amount_payable',
        'date_applied',
        'status',
        'visibility',
     ];
 /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'hash_id';

}
