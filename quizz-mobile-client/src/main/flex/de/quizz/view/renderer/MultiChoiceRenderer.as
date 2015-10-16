package de.quizz.view.renderer
{
	import mx.events.FlexEvent;
	
	import spark.components.CheckBox;
	import spark.components.LabelItemRenderer;
	
	public class MultiChoiceRenderer extends LabelItemRenderer
	{
		//----------------------
		// Properties
		//----------------------
		
		protected var checkBox:CheckBox;
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function MultiChoiceRenderer()
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
			
			checkBox = new CheckBox();
			addChild(checkBox);
		}
		
		override protected function layoutContents(unscaledWidth:Number, unscaledHeight:Number):void
		{
			setElementPosition(checkBox, 0, 0);
			setElementSize(checkBox, unscaledWidth, unscaledHeight);
		}
		
		override protected function drawBackground(unscaledWidth:Number, unscaledHeight:Number):void
		{
			// leave background blank
		}
		
		override public function set data(value:Object):void
		{
			super.data = value;
			
			checkBox.label = data.label;
			checkBox.selected = data.selected;
		}
	}
}
