package de.quizz.view.util
{
	import de.quizz.view.AbstractView;
	import de.quizz.view.renderer.MultiChoiceRenderer;
	
	import flash.events.Event;
	import flash.events.MouseEvent;
	
	import mx.collections.ArrayCollection;
	import mx.core.ClassFactory;
	
	import spark.components.List;
	
	public class MultiChoiceListView extends AbstractView
	{
		//----------------------
		// Properties
		//----------------------
		
		private var _listData:ArrayCollection = new ArrayCollection();
		private var _isListDataDirty:Boolean;
		
		
		//----------------------
		// Skin Parts
		//----------------------
		
		[SkinPart(required="true")]
		public var lst_choice:List;
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function MultiChoiceListView()
		{
			super();
			
			this.destructionPolicy = "never";
			
			this.title = "[MultiChoiceView]"; // TODO override
			this.navigationContent = [getBackButton()];
			this.actionContent = [getSaveButton()];
		}
		
		
		//----------------------
		// Getter / Setter
		//----------------------
		
		public function set listData(value:ArrayCollection):void
		{
			_listData = value;
			_isListDataDirty = true;
			
			invalidateProperties();
		}

		
		//----------------------
		// Methods
		//----------------------
		
		override protected function partAdded(partName:String, instance:Object):void
		{
			super.partAdded(partName, instance);
			
			if (instance == lst_choice) 
			{
				lst_choice.itemRenderer = new ClassFactory(MultiChoiceRenderer);
				lst_choice.addEventListener(MouseEvent.CLICK, item_clickHandler);
			}
		}
		
		override protected function partRemoved(partName:String, instance:Object):void
		{
			super.partRemoved(partName, instance);
			
			if (instance == lst_choice) 
			{
				lst_choice.removeEventListener(MouseEvent.CLICK, item_clickHandler);
			}
		}
		
		override protected function commitProperties():void
		{
			super.commitProperties();
			
			if (_isListDataDirty)
			{
				lst_choice.dataProvider = _listData;
				
				_isListDataDirty = false;
			}
		}
		
				
		//----------------------
		// Handlers
		//----------------------
		
		protected function item_clickHandler(event:Event):void
		{
			lst_choice.selectedItem.selected = !lst_choice.selectedItem.selected;
		}
		
		override protected function btn_save_clickHandler(event:MouseEvent):void
		{
			
		}
	}
}
