<?php 
namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'idUsers';

  public function getUser($userName)
  {
      return $this->asArray()->where('login', $userName)->first();
  }

}
