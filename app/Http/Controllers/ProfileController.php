<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
       return view('update-profile', ['header' => 'Update Profile', 'slot' => '']);
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Profile|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $profile_data = new Profile;

//        $profile_data->name        = Auth::user()->name;
//        $profile_data->email       = Auth::user()->email;
        $profile_data->user_id     = Auth::user()->id;
        $profile_data->age         = $request->age;
        $profile_data->address     = $request->address;
        $profile_data->education   = $request->education;
        $profile_data->job         = $request->job;
        $profile_data->description = $request->description;
        $profile_data->hobbies     = $request->hobbies;
        $profile_data->movies      = $request->movies;
        $profile_data->music       = $request->music;
        $profile_data->likes       = $request->likes;
        $profile_data->dislikes    = $request->dislikes;
        $profile_data->goals       = $request->goals;
        $profile_data->dreams      = $request->dreams;
        $profile_data->faq         = $request->faq;


        $profile_data->save();
        return redirect('/dashboard')->with('message', 'You have successfully created your profile!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
