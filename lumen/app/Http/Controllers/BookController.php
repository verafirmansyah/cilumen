<?php 
namespace App\Http\Controllers;
  
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class BookController extends Controller
{
	public function index(){
  
        $Books  = Book::all();
  
        return response()->json($Books);
  
    }
  
    public function getBook($id){
  
        $Book  = Book::find($id);
  
        return response()->json($Book);
    }
  
    public function createBook(Request $request){
  
        $Book = Book::create($request->all());
  
        return response()->json($Book);
  
    }
  
    public function deleteBook($id){
        header("Access-Control-Allow-Origin: *");
        $Book  = Book::find($id);
        $Book->delete();
 
        return response()->json('deleted');
    }
  
    public function updateBook(Request $request,$id){
        $Book         = Book::find($id);
        $update = $Book->update($request->all());
  
  
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