<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'add',
            'edit',
            'delete',
            'show',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'show-admindashboard',
            'show-userdashboard',
            'show-readmore',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'send-usermessage',
            'course-list',
            'course-create',
            'course-edit',
            'course-delete',
            'workout-list',
            'workout-create',
            'workout-edit',
            'workout-delete',
            'workoutuser-list',
            'workoutuser-create',
            'workoutuser-edit',
            'workoutuser-delete',
            'add-training',
            'contact-us',
            'blog'
        ];
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}