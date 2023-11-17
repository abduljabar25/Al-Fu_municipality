<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $table = 'forms';

    protected $fillable = [


      'Name',
      'BirthDate',
      'gender',
    'maritalStatus',
      'MotherName',
      'wifeName',
      'Birthplace',
      'ResidAddress',
      'NationalCard',
      'numcard',
      'Residcard',
      'Dateissue',
      'slides',
      'phonenum',
      'filepath'
    ];
}
