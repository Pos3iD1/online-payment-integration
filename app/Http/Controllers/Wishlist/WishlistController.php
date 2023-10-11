<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function wish(Request $request, int $id): RedirectResponse
    {
        $request->user()->wishes()->attach($id);

        return back();
    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function unwish(Request $request, int $id): RedirectResponse
    {
        $request->user()->wishes()->detach($id);

        return back();
    }
}
