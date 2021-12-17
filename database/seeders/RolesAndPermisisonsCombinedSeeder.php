<?php

namespace Database\Seeders;

use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesAndPermisisonsCombinedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->RoleSeeding();
        $this->PermissionSeeding();
        $this->UserRole();
        $this->PermissionRoleSeeding();
    }
    public function PermissionRoleSeeding()
    {
        $admin_permissions = Permission::all();
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'user_'
                && substr($permission->title, 0, 5) != 'role_'
                && substr($permission->title, 0, 11) != 'permission_'
                && substr($permission->title, 0, 10) != 'dashboard_'
                && substr($permission->title, 0, 7) != 'vendor_';
        });
        $vendor_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 7) === 'vendor_'
                && substr($permission->title, 0, 10) != 'dashboard_';
        });

        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        Role::findOrFail(2)->permissions()->sync($vendor_permissions);
        Role::findOrFail(3)->permissions()->sync($user_permissions);
    }
    
    public function PermissionSeeding()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 18,
                'title' => 'vendor_access',
            ],
            [
                'id'    => 19,
                'title' => 'dashboard_access',
            ],
        ];

        Permission::insert($permissions);
    }
    public function RoleSeeding()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin',
            ],
            [
                'id'    => 2,
                'title' => 'Vendor',
            ],
            [
                'id'    => 3,
                'title' => 'Customer',
            ],
        ];

        Role::insert($roles);
    }
    public function UserRole()
    {
        $user_roles = [
            [
                'user_id' => 1,
                'role_id' => 1,
            ],
            [
                'user_id' => 2,
                'role_id' => 2,
            ],
            [
                'user_id' => 3,
                'role_id' => 3,
            ],
        ];
        DB::table('role_user')->insert($user_roles);
    }
}
