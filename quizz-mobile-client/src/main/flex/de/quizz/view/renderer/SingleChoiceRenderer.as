package de.quizz.view.renderer
{
	import spark.components.LabelItemRenderer;
	import spark.components.RadioButton;
	
	public class SingleChoiceRenderer extends LabelItemRenderer
	{
		//----------------------
		// Properties
		//----------------------
		
		protected var radioButton:RadioButton;
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function SingleChoiceRenderer()
		{
			super();
		}
		
		
		//----------------------
		// Methods
		//----------------------
		
		override protected function createChildren():void
		{
			super.createChildren();
			
			labelDisplay.visible = false;
			
			radioButton = new RadioButton();
			addChild(radioButton);
		}
		
		override protected function layoutContents(unscaledWidth:Number, unscaledHeight:Number):void
		{
			setElementPosition(radioButton, 0, 0);
			setElementSize(radioButton, unscaledWidth, unscaledHeight);			
		}
		
		override protected function drawBackground(unscaledWidth:Number, unscaledHeight:Number):void
		{
			// leave background blank
		}
		
		override public function set data(value:Object):void
		{
			super.data = value;
			
			radioButton.label = data.label;
			radioButton.selected = data.selected;
		}
	}
}
