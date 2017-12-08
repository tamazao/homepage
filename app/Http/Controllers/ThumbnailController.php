<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Link;

class ThumbnailController extends Controller
{
    //
    public function retreve(Request $request, $id)
    {
      $link = Link::find($id);
      $name = str_replace(' ', '', $link->name);
      $imagePath = $link->imagePath;
      $url = $link->link;
      $apikey = env('THUMBNAIL_API_KEY', '');
      $width  = env('THUMBNAIL_WIDTH', 640);

      $fetchUrl = "https://api.thumbnail.ws/api/".$apikey ."/thumbnail/get?url=".urlencode($url)."&width=".$width;
      var_dump($fetchUrl);
      $jpeg = file_get_contents($fetchUrl);

      file_put_contents($imagePath, $jpeg);
      $request->session()->flash('flash-success', 'Thumbnail added successfully.');
      return redirect()->back();
    }
}
