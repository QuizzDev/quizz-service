package de.quizz.view.container
{
	import de.quizz.action.event.ViewEvent;
	import de.quizz.view.AbstractView;
	
	import spark.components.BusyIndicator;
	import spark.components.View;
	
	public class FirstView extends AbstractView
	{		
		//----------------------
		// Properties
		//----------------------
		
		// ...
		
		
		//----------------------
		// Skin Parts
		//----------------------
		
		[SkinPart(required="true")]
		public var busyIndicator:BusyIndicator;
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function FirstView()
		{
			super();
			
			this.actionBarVisible = false;
		}
		
		
		//----------------------
		// Getter / Setter
		//----------------------
		
		// ...
		
		
		//----------------------
		// Methods
		//----------------------
		
		[PostConstruct]
		public function init():void
		{
			// ..
			
			dispatcher.dispatchEvent(
				new ViewEvent(ViewEvent.DISPLAY_START_VIEW)
			);
		}
	}
}