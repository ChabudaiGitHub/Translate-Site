<?php 

class language
{
	public function translate($lang='en'){

		if ($lang!='es'||
			$lang!='ca'||
			$lang!='en'||
			$lang!='fr'||
			$lang!='it'||
			$lang!='ja') 
		{
			require ''.$_SERVER['DOCUMENT_ROOT'].'/translate/lang-en.php';

		}else{

			require ''.$_SERVER['DOCUMENT_ROOT'].'/translate/lang-'.$lang.'.php';	
		}
	}
}

?>