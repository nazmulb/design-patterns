<?php
// Third Party API Start

class Post
{
	private $title;
	private $content;
	
	//additional properties
	public function filter()
	{
		//do necessary processing
		$this->content = $filtered_content;
		$this->title = $filtered_title;
	}
	
	public function getContent()
	{
		return $this->content;
	}
	//additional methods
}


class Comment
{
	private $date;
	private $content;
	
	//additional properties
	public function filter()
	{
		//do necessary processing
		$this->content = $filtered_content;
	}
	
	public function getContent()
	{
		return $this->content;
	}
	//additional methods
}

// Third Party API End

class BBCodeParser
{
	private $post;
	
	public function __construct($object)
	{
		$this->post = $object;
	}
	
	public function getContent()
	{
		//parse bbcode
		$post->filter();
		$content = $this->parseBBCode($post->getContent());
		return $content;
	}
	
	private function parseBBCode($content)
	{
		//process BB code in the content and return it
	}
}


class EmoticonParser
{
	private $post;
	
	public function __construct($object)
	{
		$this->post = $object;
	}
	public function getContent()
	{
		//parse bbcode
		$post->filter();
		$content = $this->parseEmoticon($post->getContent());
		return $content;
	}
	private function parseEmoticon($content)
	{
		//process Emoticon code in the content and return it
	}
}

$post = new Post();//set the properties of the post object
$comment = new Comment();//set the properties of the comment object
$post->filter();
$comment->filter();

if ($BBCodeEnabled==false && $EmoticonEnabled==false)
{
	$PostContent = $post->getContent();
	$CommentContent = $comment->getContent();
}
elseif ($BBCodeEnabled==true && $EmoticonEnabled==false)
{
	$bb = new BBCodeParser($post);//passing a post object to
	//BBCodeParser
	$PostContent = $bb->getContent();
	$bb = new BBCodeParser($comment);//passing a comment object to
	//BBCodeParser
	$CommentContent = $bb->getContent();
}
elseif ($BBCodeEnabled==true && $EmoticonEnabled==false)
{
	$em = new EmoticonParser($post);
	$PostContent = $bb->getContent();
	$em = new EmoticonParser($comment);
	$CommentContent = $bb->getContent();
}
?>