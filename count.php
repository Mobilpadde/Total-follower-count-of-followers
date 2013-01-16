<?
	$me = simplexml_load_file("https://api.twitter.com/1/followers/ids.xml?screen_name=Mobilpadde");
	echo "<pre>";
	print_r($me->ids->id);
	foreach($me->ids->id as $id){
		$follower = simplexml_load_file("https://api.twitter.com/1/followers/ids.xml?user_id=".$id);
		$total += count($follower->ids->id);
		echo "$id got ".count($follower->ids->id)." followers<br />";
	}
	echo "That'll be $total in total";
	echo "</pre>";
?>
