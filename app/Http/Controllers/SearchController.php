<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function getresults(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = Product::whereTranslationLike('title', '%'.$query.'%' )
                // ->withTranslation()
                ->paginate();
            }
            $total_row = count($data);
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '<li class="list-group-item"><a href="' . route("product",$row->slug) . '">' . $row->title . '</a></li>';
                }
            } else {
                $output = '
       <li class="list-group-item" align="center" colspan="5">No Data Found</li>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}
