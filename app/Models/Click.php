<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $fillable = ['link_id', 'user_id', 'ip', 'user_agent', 'clicked_at'];
}
