<?php

namespace IssuerDirect\NovaPasswordReset\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use IssuerDirect\NovaPasswordReset\Http\Requests\PasswordResetRequest;

class PasswordResetController extends Controller {

    public function reset(PasswordResetRequest $request) {
        $user = $request->user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return 'Successful.';
    }

    public function getMinPasswordSize() {
      return response(["minpassw" => config('nova-password-reset.min_password_size',5)]);
    }
}
