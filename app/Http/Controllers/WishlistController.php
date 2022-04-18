<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //this is the controller for wishlist

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user = Auth::user();
        $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        return view('wishlist.index', compact('user', 'wishlists'));
    }

    public function store(Request $request)
    {
    //Validating title and body field
        $this->validate($request, array(
            'user_id'=>'required',
            'book_id' =>'required',
        ));

        $status=Wishlist::where('user_id',Auth::user()->id)
            ->where('book_id',$request->book_id)
            ->first();

        if(isset($status->user_id) and isset($request->book_id))
        {
            return redirect()->back()->with('flash_messaged', 'This item is already in your
       wishlist!');
        }
        else
        {
            $wishlist = new Wishlist;

            $wishlist->user_id = $request->user_id;
            $wishlist->book_id = $request->book_id;
            $wishlist->save();

            return redirect()->back()->with('flash_message',
                'Item, '. $wishlist->book->title.' Added to your wishlist.');
        }
    }

    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        return redirect()->route('wishlist.index')
            ->with('flash_message',
                'Item successfully deleted');
    }
}
