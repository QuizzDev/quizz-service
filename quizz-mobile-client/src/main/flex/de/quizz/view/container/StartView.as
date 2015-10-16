package de.quizz.view.container
{
	import de.quizz.action.event.ViewEvent;
	import de.quizz.view.AbstractView;
	import de.quizz.view.component.ValueButton;
	
	import flash.events.MouseEvent;
	
	import mx.collections.ArrayCollection;
	import mx.resources.ResourceManager;
	
	import spark.components.Group;
	import spark.components.Label;
	import spark.components.Scroller;


	[ResourceBundle("start_view")]
	public class StartView extends AbstractView
	{
		//----------------------
		// Properties
		//----------------------
		
		//private var _currentUser:UserDTO;
		private var _isUserDirty:Boolean;
		
		
		//----------------------
		// Skin Parts
		//----------------------
		
		[SkinPart(required="false")]
		public var scroller:Scroller;
		
		[SkinPart(required="false")]
		public var content:Group;
		
		[SkinPart(required="true")]
		public var txt_caption:Label;
		
		[SkinPart(required="true")]
		public var txt_info:Label;
		
		[SkinPart(required="true")]
		public var btn_startStandbyTime:ValueButton;
		
		[SkinPart(required="true")]
		public var btn_showStandbyTimeList:ValueButton;
		
		[SkinPart(required="true")]
		public var btn_showMyProfile:ValueButton;
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function StartView()
		{
			super();
			
			this.resourceBundleName = "start_view";
			
			this.title = resourceManager.getString(resourceBundleName, "title");
			//this.actionContent = [getLogoutButton()];
		}
		
		
		//----------------------
		// Getter / Setter
		//----------------------
		
		/*
		[Inject(source="model.currentUser", bind="true")]
		public function set currentUser(value:UserDTO):void
		{
			_currentUser = value;
			_isUserDirty = true;
			
			invalidateProperties();
		}
		*/

		
		//----------------------
		// Methods
		//----------------------
		
		override protected function partAdded(partName:String, instance:Object):void
		{
			super.partAdded(partName, instance);
			
			if (instance == btn_startStandbyTime) 
			{
				btn_startStandbyTime.label = resourceManager.getString(resourceBundleName, "btn_quiz.label");
				btn_startStandbyTime.value = '►';
				btn_startStandbyTime.addEventListener(MouseEvent.CLICK, btn_startStandbyTime_clickHandler);
			}
			if (instance == btn_showStandbyTimeList) 
			{
				btn_showStandbyTimeList.label = resourceManager.getString(resourceBundleName, "btn_study.label");
				btn_showStandbyTimeList.value = '►';
				btn_showStandbyTimeList.addEventListener(MouseEvent.CLICK, btn_showStandbyTimeList_clickHandler);
			}
			if (instance == btn_showMyProfile) 
			{
				btn_showMyProfile.label = resourceManager.getString(resourceBundleName, "btn_about.label");
				btn_showMyProfile.value = '►';
				btn_showMyProfile.addEventListener(MouseEvent.CLICK, btn_showMyProfile_clickHandler);
			}
		}
		
		override protected function partRemoved(partName:String, instance:Object):void
		{
			super.partRemoved(partName, instance);
			
			if (instance == btn_startStandbyTime) 
			{
				btn_startStandbyTime.removeEventListener(MouseEvent.CLICK, btn_startStandbyTime_clickHandler);
			}
			if (instance == btn_showStandbyTimeList) 
			{
				btn_showStandbyTimeList.removeEventListener(MouseEvent.CLICK, btn_showStandbyTimeList_clickHandler);
			}
			if (instance == btn_showMyProfile) 
			{
				btn_showMyProfile.removeEventListener(MouseEvent.CLICK, btn_showMyProfile_clickHandler);
			}
		}
		
		override protected function commitProperties():void
		{
			super.commitProperties();
			
			if (_isUserDirty)
			{
				//txt_caption.text = ResourceManager.getInstance().getString(resourceBundleName, "txt_caption.text", [_currentUser.profile.fullName])
				_isUserDirty = false;
			}
		}
		
				
		//----------------------
		// Handlers
		//----------------------
		
		protected function btn_startStandbyTime_clickHandler(event:MouseEvent):void
		{
			dispatchEvent(
				new ViewEvent(ViewEvent.DISPLAY_PREVIOUS_VIEW)
			);
		}
		
		protected function btn_showStandbyTimeList_clickHandler(event:MouseEvent):void
		{
			dispatchEvent(
				new ViewEvent(ViewEvent.DISPLAY_PREVIOUS_VIEW)
			);
		}
		protected function btn_showMyProfile_clickHandler(event:MouseEvent):void
		{
			dispatchEvent(
				new ViewEvent(ViewEvent.DISPLAY_PREVIOUS_VIEW)
			);
		}
		protected function btn_showSettings_clickHandler(event:MouseEvent):void
		{
			dispatchEvent(
				new ViewEvent(ViewEvent.DISPLAY_PREVIOUS_VIEW)
			);
		}
		
		
		//----------------------
		// Helpers
		//----------------------
		
		private function check():Boolean
		{
			return true;
		}
	}
}
