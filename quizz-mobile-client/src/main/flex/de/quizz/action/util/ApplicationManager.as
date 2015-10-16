package de.quizz.action.util
{
	import air.net.URLMonitor;
	
	import flash.desktop.NativeApplication;
	import flash.display.DisplayObject;
	import flash.events.Event;
	import flash.events.KeyboardEvent;
	import flash.events.StatusEvent;
	import flash.net.URLRequest;
	import flash.system.Capabilities;
	import flash.ui.Keyboard;
	
	import mx.events.ResizeEvent;

	public class ApplicationManager
	{
		//----------------------
		// Constants
		//----------------------
		
		public static const OS_IOS:String = 'IOS';
		public static const OS_ANDROID:String = 'ANDROID';
		
		[Inject(source="urlNetworkManager")]
		public var TEST_URL:String;
		
		
		//----------------------
		// Properties
		//----------------------
		
		private var _os:String;
		
		private var _request:URLRequest;
		private var _urlMonitor:URLMonitor;
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function ApplicationManager()
		{
			_request = new URLRequest(TEST_URL);
			_urlMonitor = new URLMonitor(_request);
		}
		
		
		//----------------------
		// Methods
		//----------------------
		
		public function monitorApplication(stage:DisplayObject):void
		{
			checkApplicationPlattform();
			checkApplicationDPI();
			
			startApplicationControl();
			startNetworkControl();
			
			handleHardwareKeys(stage);
		}
		
		protected function checkApplicationPlattform():void
		{
			trace(Capabilities.os);
		}
		
		protected function checkApplicationDPI():void
		{
			trace(Capabilities.screenDPI);
		}
		
		protected function startApplicationControl():void
		{
			if (isAndroid())
			{
				NativeApplication.nativeApplication.addEventListener(
					Event.DEACTIVATE, application_deactivateHandler);
			}
			
			NativeApplication.nativeApplication.addEventListener(
				ResizeEvent.RESIZE, application_resizeHandler);
		}
		
		protected function startNetworkControl():void
		{             
			_urlMonitor.addEventListener(
				StatusEvent.STATUS, urlMonitor_statusHandler);
			
			NativeApplication.nativeApplication.addEventListener(
				Event.NETWORK_CHANGE, application_networkChangeHandler);
		}
		
		private function application_deactivateHandler(event:Event):void
		{
			trace('application_deactivateHandler()');
			
			NativeApplication.nativeApplication.exit();
		}
		
		private function application_resizeHandler(event:ResizeEvent):void
		{
			trace('application_resizeHandler()');
		}
		
		private function application_networkChangeHandler(event:Event):void
		{
			trace('application_networkChangeHandler()');
			
			if(!_urlMonitor.running)
			{
				_urlMonitor.start();
			}
		}
		
		private function urlMonitor_statusHandler(event:StatusEvent):void
		{
			trace('urlMonitor_statusHandler()');
			
			trace("Network Status Event: " 
				+ event.code 
				+ ", " 
				+ _urlMonitor.available);
			
			_urlMonitor.stop();
			
			//event.code == "Service.unavailable" ? 
			//	doSomething = false : doSomething = true;
		}
		
		protected function handleHardwareKeys(stage:DisplayObject):void
		{
			if (isAndroid())
			{
				stage.addEventListener(KeyboardEvent.KEY_DOWN, onKeyDown);
			}
		}
		
		private function onKeyDown(event:KeyboardEvent):void
		{
			if (event.keyCode == Keyboard.HOME)
			{
				event.preventDefault();
				trace("home pressed");              
			}
			else if (event.keyCode == Keyboard.MENU)
			{
				event.preventDefault();
				trace("menu pressed");
			} 
			else if (event.keyCode == Keyboard.BACK)
			{
				event.preventDefault();
				trace("back pressed\n");
			} 
			else if (event.keyCode == Keyboard.SEARCH)
			{
				event.preventDefault();
				trace("search pressed");
			}
			
		}
		
		
		private function isIOS():Boolean
		{
			return Capabilities.os.toLowerCase().indexOf("ip")>-1;
		}
		private function isAndroid():Boolean
		{
			return Capabilities.os.toLowerCase().indexOf("linux")>-1;
		}
	}
}
