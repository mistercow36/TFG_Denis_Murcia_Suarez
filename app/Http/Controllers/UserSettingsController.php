<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; //Necesario
use Illuminate\Support\Facades\Hash; //Necesario
use Illuminate\Support\Facades\DB; //Necesario

class UserSettingsController extends Controller
{

    public function NewPassword(){
        return view('configure_user_profile');
    }

    
    public function changePassword(Request $request){    
        
        $user           = Auth::user();
        $userId         = $user->id;
        $userEmail      = $user->email;
        $userPassword   = $user->password;

        if($request->password_actual !=""){
            $NuewPass   = $request->password;
            $confirPass = $request->confirm_password;
            $name       = $request->name;

                //Verifico si la clave actual es igual a la clave del usuario en session
                if (Hash::check($request->password_actual, $userPassword)) {

                    //Valido que tanto la 1 como 2 clave sean iguales
                    if($NuewPass == $confirPass){
                        //Valido que la clave no sea Menor a 8 digitos
                        if(strlen($NuewPass) >= 8){
                            $user->password = Hash::make($request->password);
                            $sqlBD = DB::table('users')
                                  ->where('id', $user->id)
                                  ->update(['password' => $user->password], ['name' => $user->name]);
                    
                            return redirect()->back()->with('updateClave','La clave fue cambiada correctamente.');
                        }else{
                            return redirect()->back()->with('clavemenor','Recuerde la clave debe ser mayor a 8 digitos.');
                        }
        
                }else{
                    return redirect()->back()->with('claveIncorrecta','Compruebe que las contraseñas sean la misma');
                }
           
            }else{
                return back()->withErrors(['password_actual'=>'Las contraseñas no coinciden']);
            }


        }else{
            $name       = $request->name;
            $sqlBDUpdateName = DB::table('users')
                            ->where('id', $user->id)
                            ->update(['name' => $name]);
            return redirect()->back()->with('name','El nombre fue cambiado correctamente.');;

        }

        

}
    public function destroy(Request $request){
        $user = Auth::user();

        // Puedes agregar alguna lógica adicional aquí si es necesario
    
        $user->delete();
    
        // Cierra la sesión y redirige a la página de inicio u otra página deseada
        Auth::logout();
        return redirect('/')->with('account-deleted', 'Tu cuenta ha sido eliminada exitosamente.');
    }
}