<?php

namespace App\Models;

use App\Models\Post;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\SendVerifyWithQueueNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
  use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

  const ROLE_ADMIN = 0;
  const ROLE_MODERATOR = 1;
  const ROLE_CONTENT_MANAGER = 2;
  const ROLE_USER = 3;
  const ROLE_ROOT = 1337;

  public static function getRoles()
  {
    return [
      self::ROLE_ROOT => 'Системный администратор',
      self::ROLE_ADMIN => 'Администратор',
      self::ROLE_MODERATOR => 'Модератор',
      self::ROLE_CONTENT_MANAGER => 'Контент менеджер',
      self::ROLE_USER => 'Пользователь'
    ];
  }

  public static function getRoleColor()
  {
    return [
      self::ROLE_ROOT => 'dark',
      self::ROLE_ADMIN => 'danger',
      self::ROLE_MODERATOR => 'warning',
      self::ROLE_CONTENT_MANAGER => 'info',
      self::ROLE_USER => 'light'
    ];
  }

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
    'profile_image',
    'cover_image',
    'role'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function sendEmailVerificationNotification()
  {
    $this->notify(new SendVerifyWithQueueNotification());
  }

  public function likedPosts()
  {
    return $this->belongsToMany(Post::class, 'post_user_likes', 'user_id', 'post_id');
  }
}
