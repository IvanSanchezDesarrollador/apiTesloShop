<?php

namespace App\Models;

use App\Traits\EloquentUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory, EloquentUuid;

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user')
            ->as('tipoRol')
            ->using(new class extends Pivot
            {
                use EloquentUuid;
            })
            ->withPivot('deleted_at')
            ->withTimestamps();
    }
}
