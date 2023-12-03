<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Nhận dữ liệu từ thanh tìm kiếm
        $search = $request->input('search');

        // Thực hiện tìm kiếm
        $results = Song::where('title', 'like', '%'.$search.'%')
            ->orWhere('artist', 'like', '%'.$search.'%')
            ->get();

        // Trả về view với kết quả tìm kiếm
        return view('search.index', ['results' => $results, 'search' => $search]);
    }
}
