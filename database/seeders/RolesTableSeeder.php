<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => Str::uuid()->toString(),
                'nombre' => 'Administrador',
                'descripcion' => 'Acceso total al sistema',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => Str::uuid()->toString(),
                'nombre' => 'Vendedor',
                'descripcion' => 'Aquel encargado de ver los pedidos',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => Str::uuid()->toString(),
                'nombre' => 'Administrador de contenido',
                'descripcion' => 'Agregar productos',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => Str::uuid()->toString(),
                'nombre' => 'Atencion al cliente',
                'descripcion' => 'Atencion de quejas de lo clientes',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'id' => Str::uuid()->toString(),
                'nombre' => 'Cliente',
                'descripcion' => 'Acceso a producto para hacer pedidos',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ];

        //DB::table('roles')->truncate();
        DB::table('roles')->insert($roles);
    }
}
