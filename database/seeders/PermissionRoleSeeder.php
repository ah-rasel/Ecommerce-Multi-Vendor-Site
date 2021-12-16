<?php

namespace Database\Seeders;

use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
}
