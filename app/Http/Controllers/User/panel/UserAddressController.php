<?php

namespace App\Http\Controllers\User\panel;

use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = UserAddress::where('user_id',auth()->user()->id)->get();
        return view('user.addresses.index',compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'family' => 'required|string',
            'mobile' => 'required',
            'province_id' => 'required|integer',
            'city_id' => 'required|integer',
            'address' => 'required|string',
            'postal_code' => 'required|integer|min:10',
        ]);

        $address = auth()->user()->addresses()->create($data);
        if(isset($request->is_default))
            auth()->user()->update([
                'default_address' => $address->id
            ]);

        toast('آدرس جدید اضافه شد','success');
        return redirect()->route('user.addresses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserAddress $address)
    {
        return view('user.addresses.edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserAddress $address)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'family' => 'required|string',
            'mobile' => 'required',
            'province_id' => 'required|integer',
            'city_id' => 'required|integer',
            'address' => 'required|string',
            'postal_code' => 'required|integer|min:10',
        ]);

        $address->update($data);
        if(isset($request->is_default)) {
            auth()->user()->update([
                'default_address' => $address->id
            ]);
        }
        toast('آدرس  بروز رسانی شد','success');
        return redirect()->route('user.addresses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAddress $address)
    {
        $address->delete();
        alert('','آدرس حذف شد','success');
        return back();
    }
    public function setDefaultAddress(Request $request)
    {
        $data = $request->validate([
            'default_address' => 'required|integer'
        ]);
        auth()->user()->update([
            'default_address' => $data['default_address']
        ]);
        toast('آدرس پیش فرض تغییر یافت','success');
        return back();
    }
}
