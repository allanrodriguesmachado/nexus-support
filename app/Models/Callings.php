<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

#[Fillable(['client_id', 'title', 'description', 'category', 'status'])]
class Callings extends Model
{
    use HasFactory, softDeletes, Notifiable, HasRoles;

    public function client(): void
    {
        $this->hasMany(User::class, 'client_id');
    }
}
