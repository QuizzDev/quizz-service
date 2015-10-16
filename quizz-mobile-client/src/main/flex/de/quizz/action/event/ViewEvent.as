package de.quizz.action.event
{
	import flash.events.Event;
	
	public class ViewEvent extends Event
	{
		//----------------------
		// Constants
		//----------------------
		
		public static const RESET_VIEW:String = 'ViewEvent.RESET_VIEW';
		public static const DISPLAY_LOADING_VIEW:String = 'ViewEvent.DISPLAY_LOADING_VIEW';
		public static const DISPLAY_PREVIOUS_VIEW:String = 'ViewEvent.DISPLAY_PREVIOUS_VIEW';

		public static const DISPLAY_START_VIEW:String = 'ViewEvent.DISPLAY_START_VIEW';
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function ViewEvent(type:String, bubbles:Boolean=true, cancelable:Boolean=false)
		{
			super(type, bubbles, cancelable);
		}
		
		
		//----------------------
		// Methods
		//----------------------
		
		public override function clone():Event
		{
			return super.clone();
		}		
	}
}
