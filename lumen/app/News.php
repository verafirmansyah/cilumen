<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Model News
*/
class News extends Model
{

	/**
	 * Table database
	 */
	protected $table = 'news_detail';
	
	protected $fillable = ['nc_id','nd_title','nd_description','nd_image_path','nd_content'];
}