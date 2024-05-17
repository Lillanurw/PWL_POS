<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
 * @mixin IdeHelperUser
 */

class UserModel extends Authenticatable implements JWTSubject
{
    use HasFactory;

    public function getJWTIdentifier()
   {
    return $this->getKey();
   }

   public function getJWTCustomClaims()
   {
    return [];
   }

    protected $table = 'm_user';
    protected $primaryKey = "user_id";

    protected $fillable = ['level_id', 'username', 'nama', 'password'];
}
