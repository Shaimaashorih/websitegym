<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'admin123', 
            'email' => 'admin@yahoo.com',
            'password' => bcrypt('123456'),
            'roles_name' => ["admin"],
            'status' => 'مفعل',
            'type'=> 1 ,
            'phone' => '01068704455',
            ]);
      
            $role = Role::create(['name' => 'admin']);
       
            $permissions = Permission::pluck('id','id')->all();
      
            $role->syncPermissions($permissions);
       
            $user->assignRole([$role->id]);
    
    
    }
}
