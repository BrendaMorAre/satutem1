<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Declaration extends Model
{
    protected $fillable = ['periodicity', 'period', 'date', 'operation','declaration_type', 'capture'];
}
