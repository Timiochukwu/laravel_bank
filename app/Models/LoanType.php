<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanType extends Model
{
    use HasFactory;

    protected $fillable = [
        'hash_id',
        'input_name',
    ];
     /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'hash_id';


  /**
 * The table for the actual table.
 *
 * @var string
 */
protected $table = 'loan_type';
}
