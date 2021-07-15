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

        $validate_data = $request->validate([
                'age'           => 'required|date|before:-16 years',
                'address'       => 'required|string',
                'education'     => 'required|string',
                'job'           => 'required|string',
                'description'   => 'required|string',
                'hobbies'       => 'string',
                'movies'        => 'string',
                'music'         => 'string',
                'likes'         => 'string',
                'dislikes'      => 'string',
                'goals'         => 'string',
                'dreams'        => 'string',
                'faq'           => 'string'

        ]);

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
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $profile = Profile::find($id);
        return view('update-profile', compact($profile));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, int $id)
    {
        $profile_data = Profile::find($id);

        $profile_data->user_id     = Auth::user()->id;
        $profile_data->age         = $request->input()->age;
        $profile_data->address     = $request->input()->address;
        $profile_data->education   = $request->input()->education;
        $profile_data->job         = $request->input()->job;
        $profile_data->description = $request->input()->description;
        $profile_data->hobbies     = $request->input()->hobbies;
        $profile_data->movies      = $request->input()->movies;
        $profile_data->music       = $request->input()->music;
        $profile_data->likes       = $request->input()->likes;
        $profile_data->dislikes    = $request->input()->dislikes;
        $profile_data->goals       = $request->input()->goals;
        $profile_data->dreams      = $request->input()->dreams;
        $profile_data->faq         = $request->input()->faq;

        $profile_data->save();

        return redirect('/dashboard')->with('message', 'You have successfully updated your profile!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Profile int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Profile::destroy($id);
        return redirect('dashboard')->with('message', 'Profile successfully deleted!');
    }
}
