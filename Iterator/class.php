<?php
$posts = getAllPosts(); //example function return all post ids of this author
for($i = 0; $i<count($posts); $i++)
{
	$title = getPostTitle($posts[$i]);
	echo $title;
	
	$author = getPostAuthor($posts[$i]);
	$content = parseBBCode(getPostContent($posts[$i]));
	echo "Content";
	
	$comments = getAllComments($posts[$i]);
	for ($j=0; $j<count($comments); $j++)
	{
		$commentAuthor = getCommentAuthor($comments[$j]);
		echo $commentAuthor;
		
		$comment = getCommentContent($comments[$j]);
		echo $comment;
	}
}


interface Iterator
{
	function rewind();
	function current();
	function key();
	function next();
	function valid();
}


class Posts implements Iterator
{
	private $posts = array();
	public function __construct($posts)
	{
		if (is_array($posts)) {
			$this->posts = $posts;
		}
	}
	
	public function rewind() {
		reset($this->posts);
	}
	
	public function current() {
		return current($this->posts);
	}
	
	public function key() {
		return key($this->var);
	}
	
	public function next() {
		return next($this->var);
	}
	
	public function valid() {
		return ($this->current() !== false);
	}
}


$posts = getAllPosts();
$posts = new Posts($posts);
foreach ($posts as $post)
{
	echo $post->getTitle();
	echo $post->getAuthor();
	echo $post->getDate();
	echo $post->getContent();
	$comments = new Comments($post->getComments());
	//another Iterator for comments, code is same as Posts
	
	foreach ($comments as $comment)
	{
		echo $comment->getAuthor();
		echo $comment->getContent();
	}
}
?>