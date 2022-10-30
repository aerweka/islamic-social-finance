<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;
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

    public function getKabKot(Request $req)
    {
        $html = '';
        $kabKot = City::where('province_code', $req->provinceCode)->get();
        foreach ($kabKot as $kk) {
            $html .= "<option value='{$kk->code}'>{$kk->name}</option>";
        }
        return response()->json($html);
    }

    public function getKec(Request $req)
    {
        $html = '';
        $kec = District::where('city_code', $req->cityCode)->get();
        foreach ($kec as $kk) {
            $html .= "<option value='{$kk->code}'>{$kk->name}</option>";
        }
        return response()->json($html);
    }
    public function getDesa(Request $req)
    {
        $html = '';
        $desa = Village::where('district_code', $req->districtCode)->get();
        foreach ($desa as $kk) {
            $html .= "<option value='{$kk->code}'>{$kk->name}</option>";
        }
        return response()->json($html);
    }
}
