<?php

namespace Tests\Unit;

use App\Models\Role;
use Iluminate\Database\Eloquent\Collection;
use Tests\TestCase;

class relacionestest extends TestCase
{
   //Se comprueba que un rol tiene muchos usuarios
    public function test_a_role_has_many_users()
    {
        $role = new Role;

     
        $this->assertInstanceOf(Collection::class, $role->users);
    }
}
