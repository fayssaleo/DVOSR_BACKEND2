<?php

namespace App\Modules\ActionDetail\Models;

use App\Modules\Utilisateur\Models\Action;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionDetail extends Model
{
    use HasFactory;
    public function action()
    {
        return $this->belongsTo(Action::class);
    }
    protected $casts = [

        'created_at' => 'datetime:d/m/Y H:i',

    ];
    
}
