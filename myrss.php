<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
	$url = "http://www.eluniversal.com.mx/rss/edomex.xml";
	//$url = "http://sports.espn.go.com/espn/rss/news";
	//$url = "http://excelsior.feedsportal.com/c/33879/f/656214/index.rss";
	$rss = simplexml_load_file($url);
	if($rss){
		echo '<h1>'.$rss->channel->title.'</h1>';
		echo '<li>'.$rss->channel->pubDate.'</li>';
		$items = $rss->channel->item;
		$image = $rss->channel->image->url;
		echo '<img src='.$image.'>';
		foreach($items as $item){
			$title = $item->title;
			$link = $item->link;
			$published_on = $item->pubDate;
			$description = $item->description;
			$image = $item->image;
			echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
			echo '<span>('.$published_on.')</span>';
			echo '<p>'.$description.'</p>';
		}
	}
?>