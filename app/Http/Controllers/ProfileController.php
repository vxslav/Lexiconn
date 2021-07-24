<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
            $profile_data = DB::table('profiles')->where('user_id', '=', Auth::user()->id)->first();
            return view('profile', compact('profile_data'), ['header' => 'My Profile', 'slot' => '']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        $profile = new Profile;
        $profile->user_id = $user;

        return view('create-profile', compact('profile', 'user'), ['header' => 'Create Profile', 'slot' => '']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Profile|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $this->validate($request, [
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
            return view('update-profile', ['header' => 'Update Profile', 'slot' => ''], compact('profile'));

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

        $this->validate($request, [
            'age'           => 'required|date|before:-16 years',
            'address'       => 'required|string',
            'education'     => 'required|string',
            'job'           => 'required|string',
            'description'   => 'required|string',
            'hobbies'       => 'required|string',
            'movies'        => 'required|string',
            'music'         => 'required|string',
            'likes'         => 'required|string',
            'dislikes'      => 'required|string',
            'goals'         => 'required|string',
            'dreams'        => 'required|string',
            'faq'           => 'required|string'

        ]);
//        $profile = Profile::find($id);
    $profile = Profile::where('id', '=', $id)->first();


//        $profile_data->user_id     = Auth::user()->id;
        $profile->age         = $request->input('age');
        $profile->address     = $request->input('address');
        $profile->education   = $request->input('education');
        $profile->job         = $request->input('job');
        $profile->description = $request->input('description');
        $profile->hobbies     = $request->input('hobbies');
        $profile->movies      = $request->input('movies');
        $profile->music       = $request->input('music');
        $profile->likes       = $request->input('likes');
        $profile->dislikes    = $request->input('dislikes');
        $profile->goals       = $request->input('goals');
        $profile->dreams      = $request->input('dreams');
        $profile->faq         = $request->input('faq');

    $profile->save();

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
