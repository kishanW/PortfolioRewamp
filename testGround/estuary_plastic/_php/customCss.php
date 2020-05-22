<?php
	class CustomCss{
		public function GetCssFilesForPage($pageName){
			$cssStart = "<style>";
			$css = "";
			if(strcmp($pageName, "sellPage") == 0)
			{			
				/*$css = ".mainMenuItems{margin-right: 3px;}";	*/		
			}
			$cssEnd = "</style>";
			echo $cssStart. $css. $cssEnd;
		}
	}
?>