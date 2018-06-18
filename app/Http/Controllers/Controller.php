<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function show($id)
    {
      $item = Item::find($id);
      $want_users = $item->want_users;
      $have_users = $item->have_users;

      return view('items.show', [
          'item' => $item,
          'want_users' => $want_users,
          'have_users' => $have_users,
      ]);
    }
}
