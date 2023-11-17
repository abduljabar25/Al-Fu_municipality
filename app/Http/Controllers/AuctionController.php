<?php

namespace App\Http\Controllers;

use App\Models\auction;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Carbon\Carbon;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
    if($request->has('search')){
        $auctions = auction::where('date','LIKE','%'.$request->search.'%')->Paginate(10);

    }else{
        $auctions = auction::Paginate(5);

    }
    return view('auction.index')->with('auctions', $auctions);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auction.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeauction(Request $request)
    {
        $request->validate([
            'typeauction'=>'required',
            'date'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
           $destinationPath = 'images/';
           $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           $input['image'] = "$profileImage";
        }

        auction::create($input);
        return redirect()->route('auction.index')
        ->with('success','  تم اضافة اعلان جديد');
    }

    /**
     * Display the specified resource.
     */
    public function show(auction $auction)
    {
        return view('auction.show',compact('auction'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(auction $auction)
    {
        return view('auction.edit',compact('auction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, auction $auction)
    { $request->validate([
        'typeauction'=>'required',
        'date'=>'required',

    ]);

    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    }else{
        unset($input['image']);
    }

    $auction->update($input);

        return redirect()->route('auction.index')
        ->with('success','تم تحديث الاعلان');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(auction $auction)
    {

        $auction->delete();
        return redirect()->route('auction.index')
        ->with('success','تم حذف الاعلان');
    }
    public function records(Request $request)
    {


    }
}
