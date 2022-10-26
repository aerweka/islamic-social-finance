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
        // $data = User::all();
        $data = User::select('users.*', 'prov.name as prov_name', 'ct.name as ct_name', 'dis.name as dis_name', 'vil.name as vil_name')
            ->join('id_provinces AS prov', 'prov.code', 'alamat_prov')
            ->join('id_cities AS ct', 'ct.code', 'alamat_kabkot')
            ->join('id_districts AS dis', 'dis.code', 'alamat_kec')->join('id_villages AS vil', 'vil.code', 'alamat_desa')
            ->get();
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
        $data = User::
            // select('users.*', '.ct.name as ct_name', 'dis.name as dis_name', 'vil.name as vil_name')
            //     ->join('id_cities AS ct', 'ct.code', 'alamat_kabkot')
            //     ->join('id_districts AS dis', 'dis.code', 'alamat_kec')->join('id_villages AS vil', 'vil.code', 'alamat_desa')
            where('users.id', $user)
            ->get();
        $provinces = Province::all(['code', 'name']);
        $cities = City::where('province_code', $data[0]->alamat_prov)->get();
        $districts = District::where('city_code', $data[0]->alamat_kabkot)->get();
        $villages = Village::where('district_code', $data[0]->alamat_kec)->get();
        return view('admin.user.edit', compact(
            'data',
            'provinces',
            'cities',
            'districts',
            'villages',
        ));
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
        try {
            $updateUser->update(User::findOrFail($user), $request->all());
            Alert::toast("Kamu telah berhasil memperbarui data", 'success');
            return back();
        } catch (\Throwable $th) {
            Alert::toast("Kamu gagal memperbarui data", 'error');
            return back();
        }
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
