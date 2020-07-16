<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\Housing;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('front.pages.home', [
            'housings' => Housing::take(6)->get()
        ]);
    }

    function housings()
    {
        return view('front.pages.housings', [
            'housings' => Housing::all()
        ]);
    }

    function housingsDetails($id)
    {
        $housing = Housing::findOrFail($id);
        $housing->load('user');

        return view('front.pages.housing_details', [
            'housing' => $housing
        ]);
    }

    function create_housing()
    {
        return view('front.profile.create_offer');
    }

    function save_housing(Request $request)
    {
        $file = $request->file('images');
        $format = $request->images->extension();
        $patch = $request->images->store('images');
        $name = $file->getClientOriginalName();

        //save on table
        Housing::create([
            'title' => $request->title,
            'address' => $request->address,
            'price' => $request->price,
            'capacity' => $request->capacity,
            'superficie' => $request->superficie,
            'images' => $patch,
            // 'images' => $patch . '.' . $format,
            'rating' => $request->rating,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'phone' => $request->phone,
            'user_id' => auth()->id(),
        ]);

        return redirect(route('front.housings'));
    }

    function demands()
    {
        return view('front.pages.demands', [
            'demands' => Demand::all()
        ]);
    }

    function create_demand()
    {
        return view('front.profile.create_demand');
    }

    function save_demand()
    {
        Demand::create(request()->all());

        return redirect(route('front.demands'));
    }
}
