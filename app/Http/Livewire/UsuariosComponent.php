<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class UsuariosComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'confirmed',
    ];

    public $name, $email, $password, $role;
    public $user_id, $user_name, $user_email, $user_password, $user_role, $user_estatus, $user_fecha;

    public function render()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.usuarios-component')
            ->with('users', $users);
    }

    public function generarClave()
    {
        $this->password = Str::random(8);
    }

    public function limpiar()
    {
        $this->user_id = null;
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->role = null;
        $this->user_id = null;
        $this->user_name = null;
        $this->user_email = null;
        $this->user_password = null;
        $this->user_role = null;
        $this->user_estatus = null;
        $this->user_fecha = null;
    }

    public function store()
    {
        $rules = [
            'name' => 'required|min:4',
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => 'required|min:8',
            'role' => 'required'
        ];

        $this->validate($rules);
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->password = Hash::make($this->password);
        $user->save();
        $this->alert(
            'success',
            'Usuario Creado'
        );
        $this->limpiar();
    }

    public function edit($id)
    {
        $user = User::find($id);
        $this->user_id = $user->id;
        $this->user_name = $user->name;
        $this->user_email = $user->email;
        //$this->user_password = null;
        $this->user_role = $user->role;
        $this->user_estatus = $user->estatus;
        $this->user_fecha = $user->created_at;
    }

    public function update($id)
    {
        $rules = [
            'user_name' => 'required|min:4',
            'user_email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id)],
            'user_role' => 'required'
        ];
        $this->validate($rules);
        $user = User::find($id);
        $user->name = $this->user_name;
        $user->email = $this->user_email;
        $user->role = $this->user_role;
        $user->save();
        $this->alert(
            'success',
            'Usuario Actualizado'
        );

    }

    public function cambiarEstatus($id)
    {
        $user = User::find($id);

        if ($user->estatus){
            $user->estatus = 0;
            $texto = "Usuario Suspendido";
        }else{
            $user->estatus = 1;
            $texto = "Usuario Activado";
        }

        $user->update();
        $this->user_estatus = $user->estatus;
        $this->alert(
            'success',
            $texto
        );
    }

    public function restablecerClave($id)
    {
        if (!$this->user_password){
            $clave = Str::random(8);
        }else{
            $clave = $this->user_password;
        }
        $user = User::find($id);
        $user->password = Hash::make($clave);
        $user->update();
        $this->user_password = $clave;
        $this->alert(
            'success',
            'Contraseña Restablecida'
        );
    }

    public function destroy($id)
    {
        $this->user_id = $id;
        $this->confirm('¿Estas seguro?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' =>  '¡Sí, bórralo!',
            'text' =>  '¡No podrás revertir esto!',
            'cancelButtonText' => 'No',
            'onConfirmed' => 'confirmed',
        ]);

    }

    public function confirmed()
    {
        // Example code inside confirmed callback
       $user = User::find($this->user_id);
       $user->delete();
       $this->user_id = null;
       $this->alert(
             'success',
             'Usuario Eliminado'
       );

    }
}