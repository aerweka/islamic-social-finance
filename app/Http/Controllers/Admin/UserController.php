<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\PasswordValidationRules;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    use PasswordValidationRules;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CreateNewUser $createUser)
    {
        $newUser = $createUser->create($request->all());

        if ($newUser) {
            Alert::toast("Kamu telah berhasil menambahkan data", 'success');
            return redirect()->back(200);
        }
        Alert::toast("Kamu gagal menambahkan data", 'error');
        return redirect()->back(400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $data = User::findOrFail($user);
        $provinces = Province::all();
        $cities = City::all(['code', 'province_code', 'name']);
        $districts = District::all(['code', 'city_code', 'name']);
        $villages = Village::all(['code', 'district_code', 'name']);
        return view('admin.user.edit', compact('data', 'provinces', 'cities', 'districts', 'villages'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        if (User::findOrFail($user)->delete()) {
            Alert::toast("Kamu telah berhasil menghapus data", 'success');
            return redirect()->back(200);
        }
        Alert::toast("Kamu gagal menghapus data", 'error');
        return redirect()->back(400);
    }
}
