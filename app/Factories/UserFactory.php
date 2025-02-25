<?
namespace App\Factories;

use App\Models\Admin;
use App\Models\Guest;

class UserFactory
{
    public static function createUser($role, $name)
    {
        switch ($role) {
            case 'admin':
                return new Admin($name);
            case 'guest':
                return new Guest($name);
            default:
                throw new \Expection("Invalid role type");
        }
    }
}