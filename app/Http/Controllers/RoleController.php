<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function allRoles(): JsonResponse
    {
        try {
            $roles = Role::all();

            return response()->json([
                'success' => true,
                'data' => $roles,
            ], 200);


        } catch (ModelNotFoundException $e) {
            // Manejo de excepciones para cuando no se encuentran los roles
            return response()->json([
                'success' => false,
                'message' => 'Roles no encontrados.',
            ], 404);


        } catch (\Exception $e) {
            // Manejo de otras excepciones generales
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener roles.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
