<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionTypes extends Model
{
    use HasFactory;

    protected $guarded = []; 

      /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $table = 'transaction_type';
}
