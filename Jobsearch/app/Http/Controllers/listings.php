<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\listings as ModelsListings;
use GuzzleHttp\Psr7\Message;
use Illuminate\Auth\Middleware\RequirePassword;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\UserController;
// use Alert;


class listings extends Controller
{
    //
    public function index()
    {
        return view('listings.index');
    }

    public function All()
    {
        return view('listings.listings', [
            'listings' => ModelsListings::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //
    public function GetListing($id){
        $data['listing'] = ModelsListings::find($id);
            return view('listings.listing',$data);
    }

    public function CreateForm(){
        return view('listings.listing_form');
    }

    public function StoreJob(Request $request){

        // validate values from table

        // store values  to db
        $newJob = new ModelsListings();
        $newJob->title = $request->title;
        $newJob->tags = $request->tags;
        $newJob->company = $request->company;
        $newJob->location = $request->location;
        $newJob->email = $request->email;
        $newJob->website = $request->website;
        $newJob->description = $request->description;
        $newJob->salary = $request->salary;
        if($request->hasFile('logo')){
            
            $newJob->logo = $request->file('logo')->store('logos','public');
        }

        $newJob->user_id = auth()->id();

        $newJob->save();

        Alert::success('Job Listing Posted Successfully!','Happy Recruiting.');

        return redirect('/');
    }

    public function EditJob($id){
        
        $data['listing'] = ModelsListings::find($id);
        return view('listings.edit', $data);
    }

    public function UpdateJob(Request $request ,$id){

        // only listing owner can update to the listing 
        // if ($listings->user_id != auth()->id()) {
        //     abort(403);
        // }
     $updateJob = ModelsListings::find($id);
     $updateJob->delete();

        $updateJob->title = $request->title;
        $updateJob->tags = $request->tags;
        $updateJob->company = $request->company;
        $updateJob->location = $request->location;
        $updateJob->email = $request->email;
        $updateJob->website = $request->website;
        $updateJob->description = $request->description;
        $updateJob->salary = $request->salary;

        if ($request->hasFile('logo')) {

            $updateJob->logo = $request->file('logo')->store('logos', 'public');
        }

        $updateJob->save();

        Alert::success('Job Listing Updated Successfully!', 'Happy Recruiting.');

        return redirect('/');

        
    }

    public function DeleteJob($id){

        $deleteJob = ModelsListings::find($id);
        $deleteJob->delete();

        Alert::danger('Job Listing Deleted Successfully!');

        return redirect('/');
    }

    public function Apply($id){
        $data['listing'] = ModelsListings::find($id);
        return view('listings.apply',$data);
    }


    // public function ManageListings(){
    //     $listings = auth()->user()->listings()->get();
    //     if($listings){

    //         return view('listings.manage',$listings);
    //     }
    //     else{
    //        abort(404);
    //     }
    //     // dd($listings);
    // }

    public function ManageListings(){
        return view('listings.manage', ['listings' => auth()->user()]);
        dd('listings');
    }
}



