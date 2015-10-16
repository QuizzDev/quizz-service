package de.quizz.action
{
	import de.quizz.action.event.ViewEvent;
	import de.quizz.data.Model;
	import de.quizz.view.container.StartView;
	
	import flash.events.IEventDispatcher;
	
	import spark.components.ViewNavigator;

	public class ViewManager
	{
		//----------------------
		// Properties
		//----------------------
		
		[Dispatcher]
		public var dispatcher:IEventDispatcher;
		
		[ViewNavigator]
		public var viewNavigator:ViewNavigator;
		
		[Inject(source="model", bind="true")]
		public var model:Model;
		
		
		//----------------------
		// Methods
		//----------------------
		
		[EventHandler(event="ViewEvent.RESET_VIEW")]
		public function resetView(event:ViewEvent):void
		{
			trace('resetView()');
			
			viewNavigator.popAll();
		}
		
		[EventHandler(event="ViewEvent.DISPLAY_PREVIOUS_VIEW")]
		public function displayPreviousView(event:ViewEvent):void
		{
			trace('displayPreviousView()');
			
			viewNavigator.popView();
		}
		
		[EventHandler(event="ViewEvent.DISPLAY_START_VIEW")]
		public function displayStartView(event:ViewEvent):void
		{
			trace('displayStartView()');
			
			viewNavigator.pushView(
				StartView
			);
		}
		// ...
	}
}
