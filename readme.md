Portfolio - Piotr Rogalski
==========================
Poland, 2019 JAN 7

About me:
--------
I'm not a student, i'm just a big fan of WWW programing. I don't treat this as a job - it's a hobby. 
"If you like what you do, you will never work a single day" - Said somebody smart.
I like to learn new things but the best is to use what you have just learned.
If you want to contact with me, My meil is piotr5rogalski@gmail.com.

About used technologies:
-------------------
I made this portfolio in a week, 
To create it, I use:

    Laravel framework,
    CSS3,
    HTML5,
    Eloquent,
    PHP,
    JavaScript,
    jQuery,
    Git,
    Bootstrap 4,
    SQL,
    
and a lots of other technologies. 

About project:
-------------
To create all pages very helpful was to use bootstrap 4 classes but to generate
data downloaded from sql database i use eloquent.

Simple methods like:

    @foreach($project->getProjectPhotos() as $photo_id => $photo)
        <div class="carousel-item   {{ ($photo_id == 0)?'active':'' }}">
            <img class="d-block w-100 h-auto" src="{{ $project->getPhotoUrl($photo_id) }}" alt="{{ $photo_id }} slide">
            <h5 class="carousel-caption d-none d-md-block">
                <div class="badge badge-secondary text-shadow-sm">
                    {!! $project->getPhotoDescription($photo_id) !!}
                </div>
            </h5>
        </div>
    @endforeach

Can easily generate, nice looking view without lost on code readability.

The biggest table in my DB was "project" - I store there columns like: title, description, images_url, images_description, github_url and timestamps (created_at and updated_at). To easy work with this table I created global functions like: 

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
    
Or:

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
    
That are examples how my functions looks like. Of course I've got more functions and methods.

Problems with project
---------------------
Yes, there always are problems - I've already made an update to solve some of them. 
The programmer's job is to solve problems constantly. It can be said that this is one of the methods of learning.
Fortunately, I managed to do the whole project in about a week.
