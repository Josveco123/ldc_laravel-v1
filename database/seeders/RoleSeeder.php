<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verificar y crear roles
        $roles = [
            'master',
            'admin',
            'client'
        ];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        // Verificar y crear permisos
        $permissions = [
            'home',
            'productoindex',
            'productoedit',
            'productoshow',
            'productocreate',
            'productoeliminar',
            'productoupdate',
            'productostore',
            'distribuidorindex',
            'distribuidoredit',
            'distribuidorshow',
            'distribuidorcreate',
            'distribuidoreliminar',
            'distribuidorupdate',
            'distribuidorstore',
            'blogindex',
            'blogedit',
            'blogshow',
            'blogcreate',
            'blogeliminar',
            'blogupdate',
            'blogstore',
            'userindex',
            'useredit',
            'usershow',
            'usercreate',
            'usereliminar',
            'userupdate',
            'userstore'
        ];

        foreach ($permissions as $permissionName) {
            $permission = Permission::firstOrCreate(['name' => $permissionName]);

            // Sincronizar roles con permisos
            if (in_array($permissionName, [
                'home',
                'productoindex',
                'productoedit',
                'productoshow',
                'productocreate',
                'productoeliminar',
                'productoupdate',
                'productostore',
                'distribuidorindex',
                'distribuidoredit',
                'distribuidorshow',
                'distribuidorcreate',
                'distribuidoreliminar',
                'distribuidorupdate',
                'distribuidorstore',
                'blogindex',
                'blogedit',
                'blogshow',
                'blogcreate',
                'blogeliminar',
                'blogupdate',
                'blogstore'
            ])) {
                $permission->syncRoles(['admin', 'master']);
            }

            if (in_array($permissionName, [
                'userindex',
                'useredit',
                'usershow',
                'usercreate',
                'usereliminar',
                'userupdate',
                'userstore'
            ])) {
                $permission->assignRole('master');
            }
        }
    }
}
