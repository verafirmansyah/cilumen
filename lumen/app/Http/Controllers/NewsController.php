<?php 
namespace App\Http\Controllers;
  
use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class NewsController extends Controller
{
	public function index(){
  
        $News  = News::all();
  
        return response()->json($News);
  
    }
  
    public function getNews($id){
  
        $News  = News::find($id);
  
        return response()->json($News);
    }
  
    public function createNews(Request $request){
  
        $create = News::create($request->all());
  
        if ($create) {
            $res['success'] = true;
            $res['message'] = 'Success create!';

            return response($res);
        }else{
            $res['success'] = false;
            $res['message'] = 'Failed to create!';

            return response($res);
        }
  
    }
  
    public function deleteNews($id){
        header("Access-Control-Allow-Origin: *");
        $News  = News::find($id);
        $delete = $News->delete();
 
        if ($delete) {
            $res['success'] = true;
            $res['message'] = 'Success delete!';

            return response($res);
        }else{
            $res['success'] = false;
            $res['message'] = 'Failed to delete!';

            return response($res);
        }
    }
  
    public function updateNews(Request $request,$id){
        $News         = News::find($id);
        // $News->update($request->all());
  
        // return response()->json($News);
        $update = $News->update($request->all());
  
        if ($update) {
            $res['success'] = true;
            $res['message'] = 'Success update!';

            return response($res);
        }else{
            $res['success'] = false;
            $res['message'] = 'Failed to update!';

            return response($res);
        }
    }
}