<?php 

class Suvilib
{
	
	public function video_youtube($video) {
		// $video = $detail_materi->youtube_url;
		// $video = "http://www.youtube.com/watch?v=W3Inw2NQVr4&feature=g-logo-xit";
		$video = str_replace('watch?v=', '', $video);
		$video = str_replace('youtube.com', '', $video);
		$video = str_replace('www.', '', $video);
		$video = str_replace('https:', '', $video);
		$video = str_replace('http:', '', $video);
		$video = str_replace('youtu.be', '', $video);
		$video = str_replace('/', '', $video);
		$video = substr($video, 0, strpos($video, "&feature") > 0 ? strpos($video, "&feature") : strlen($video));
		$new_url_video = "http://youtube.com/v/" . $video;

		return $new_url_video;
	}

	function img_youtube($video) {
		// $video = $detail_materi->youtube_url;
		// $video = "http://www.youtube.com/watch?v=W3Inw2NQVr4&feature=g-logo-xit";
		$video = str_replace('watch?v=', '', $video);
		$video = str_replace('youtube.com', '', $video);
		$video = str_replace('www.', '', $video);
		$video = str_replace('https:', '', $video);
		$video = str_replace('http:', '', $video);
		$video = str_replace('youtu.be', '', $video);
		$video = str_replace('/', '', $video);
		$video = substr($video, 0, strpos($video, "&feature") > 0 ? strpos($video, "&feature") : strlen($video));
		$new_url_video = "http://i1.ytimg.com/vi/".$video."/default.jpg";

		return $new_url_video;
	}
}
?>