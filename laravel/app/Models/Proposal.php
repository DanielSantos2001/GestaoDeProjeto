<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
  public $timestamps = false;
  use HasFactory;
}

class Attachments extends Model
{
  public $timestamps = false;
  use HasFactory;
}
