<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listings
    public function index(){
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]);
    }

    //show all listings
    public function index1(){
        return view('listings.index1', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]);
    }

    //show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create form
    public function create(){
        return view('listings.create');
    }

    //store listing data
    public function store(Request $request) {
        
        $formFields = $request->validate([
            'course'=>'required',
            'location'=>'required',
            'type'=>'required',
            'day'=>'required',
            'time'=>'required'
        ]);
        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created Successfully!');
    }

    //Show Edit form
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    //update listing data
    public function update(Request $request, Listing $listing) {
        //Make sure logged in nuser is owner
        if($listing->user_id != auth()->id())
        {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'course'=>'required',
            'location'=>'required',
            'day'=>'required',
            'time'=>'required'
        ]);

        $listing->update($formFields);

        return redirect('/')->with('message', 'Listing Updated Successfully!');
    }

    //Delete Listing
    public function destroy(Listing $listing) {
        //Make sure logged in nuser is owner
        if($listing->user_id != auth()->id())
        {
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/')->with('message','Listing Deleted Successfully');
    }


}


