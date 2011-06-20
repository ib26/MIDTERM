
n articlewriter($article) {
    
	try{
			if(!is_array($article)){
				throw new Exception('Mistake', 101);
			}
	foreach($article as $key => $content) {

	switch ($key) {
		case "title":
		$tag = 'h1';
		$attributes = array("class" => "title");

		break;
		case "body":
		$tag = 'p';
		$attributes = array("class" => "content");

		break;
	}
		echo tag($tag, $attributes, $content);
		}
	}
	catch(Exception $e){
			echo $e->getMessage(). $e->getCode();
		}
}	
	function tag($tag, $attributes, $content){
		try{
			if(!is_string($content)){
				throw new Exception('Mistake', 100);
			}
			$output = '<' . $tag;
			foreach ($attributes as $key=>$value) {
				if(isset($value)){
					$output .=  ' ' . $key . '="' . $value . '"';
				}
			}
			$output .= '>' . $content .  '</' . $tag . '>';
			return $output; 
		}
		catch(Exception $e){
			echo $e->getMessage(). $e->getCode();
		}
	}


$article1 = array('title' => 'my article title', 'body' => 'lorem ipsum');
 articlewriter($article1);
?>


