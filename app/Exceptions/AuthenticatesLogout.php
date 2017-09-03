<?php
/**
 * Created by PhpStorm.
 * User: dn
 * Date: 2017/4/27
 * Time: 15:50
 */

namespace App\Exceptions;
use Illuminate\Http\Request;


trait AuthenticatesLogout
{
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->forget($this->guard()->getName());

        $request->session()->regenerate();

        return redirect($this->redirectTo);
    }
}