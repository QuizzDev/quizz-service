package de.quizz.view.skin
{
	import assets.ErrorInfo_downSkin;
	import assets.ErrorInfo_upSkin;
	
	import spark.skins.mobile.ButtonSkin;
	
	public class ErrorInfoButtonSkin extends ButtonSkin
	{
		//----------------------
		// Properties
		//----------------------
		
		private var colorized:Boolean = false;
		
		//----------------------
		// Constructor
		//----------------------
		
		public function ErrorInfoButtonSkin()
		{
			super();
			
			upBorderSkin = ErrorInfo_upSkin;
			downBorderSkin = ErrorInfo_downSkin;
			
			measuredDefaultHeight = 32;
			measuredDefaultWidth = 32;
		}
		
		//----------------------
		// Methods
		//----------------------
		
		override protected function drawBackground(unscaledWidth:Number, unscaledHeight:Number):void
		{
/*			// omit call to super.drawBackground() to apply tint instead and don't draw fill
			var chromeColor:uint = getStyle("chromeColor");
			
			if (colorized || (chromeColor != 0xDDDDDD))
			{
				// apply tint instead of fill
				applyColorTransform(border, 0xDDDDDD, chromeColor);
				
				// if we restore to original color, unset colorized
				colorized = (chromeColor != 0xDDDDDD);
			}
*/		}
	}
}
