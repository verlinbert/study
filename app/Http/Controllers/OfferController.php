<?php


namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    public function offers()
    {
        $offers = Offer::orderBy('id','DESC')->paginate(12);
        return view('offer/offers', compact('offers'));
    }

    public function add()
    {
        return view('offer/offer-add');
    }

    public function submit(Request $request)
    {
        $offer = new Offer();
        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        $offer->user_id = Auth::user()->id;
        $offer->save();
        return redirect()->route('offers');
    }
    public function edit(Offer $offer)
    {
        return view('offer/offer-edit' ,compact('offer'));
    }

    public function submitedit(Request $request, Offer $offer)
    {
        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        $offer->save();
        return redirect()->route('offers');
    }

    public function remove(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offers');
    }

}
