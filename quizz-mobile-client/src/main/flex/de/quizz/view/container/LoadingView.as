package de.quizz.view.container
{
	import de.quizz.view.AbstractView;
	
	import spark.components.BusyIndicator;
	
	public class LoadingView extends AbstractView
	{		
		//----------------------
		// Skin Parts
		//----------------------
		
		[SkinPart(required="true")]
		public var busyIndicator:BusyIndicator;
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function LoadingView()
		{
			super();
			
			this.destructionPolicy = "never";
			this.actionBarVisible = false;
		}
	}
}