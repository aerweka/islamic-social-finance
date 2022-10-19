<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Actions\Fortify\UpdateUserProfileInformation;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function edit($user)
    {
        return view('admin.user.edit', compact($data = User::findOrFail($user)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user, UpdateUserProfileInformation $updateUser)
    {
        $updateUser = $updateUser->update(User::findOrFail($user), $request->all());

        if ($updateUser) {
            Alert::toast("Kamu telah berhasil memperbarui data", 'success');
            return redirect()->back(200);
        }
        Alert::toast("Kamu gagal memperbarui data", 'error');
        return redirect()->back(400);
    }
}
