<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $first_paragraph
 */
class Project extends Model
{
	public function technologies()
	{
		return $this->belongsToMany(Technology::class);
	}

	public function getFirstParagraph()
	{
	    $description = $this->description;
	    $start = strpos($description,'<p>')+3;
	    $length = strpos($description,'</p>')-$start;
	    $firsParagraph = substr($description, $start, $length);

	    return $firsParagraph;
	}

	function getFirstImage() 
	{
	    $url = 'images/noimage.jpg';
	    if (!is_null($this->images_url)){ 
	      $links = explode(',',$this->images_url);
	      $link = 'images/'.$links[0];
	      if (is_file($link)){
	        $url = $link;
	      }
	    }
    return $url;
  	}

  	function getProjectPhotos()
  	{
		$links = [''];
		$images_url = $this->images_url;
		if (!is_null($images_url)){ 
			$images_url = str_replace([' ','\'','"'], '', $images_url);
			$links = explode(',',$images_url);
		}
		return $links;
	}

	function getPhotoUrl($id)
	{
		$photo_url = url('images/noimage.jpg');
		$links  = $this->getProjectPhotos();
		$numb   = count($links);
		if($id<$numb){
			$link = 'images/'.$links[$id];
			if (is_file($link)){
				$photo_url = url('images/'.$links[$id]);
			}
		}
		return $photo_url;
	}

	function getPhotoDescription($id)
	{
		$val = $id + 1;
		$photo_description = 'Zdjęcie:'.$val;
		$image_description  = $this->images_description;
		if (!is_null($image_description)){ 
			$image_description = explode('::',$image_description);
			$num = count($image_description);
			if($id<$num){
				if ($image_description[$id] != '[id]'){
					$photo_description = $image_description[$id];
				}
			} 
		}
		return $photo_description;
	}
}
