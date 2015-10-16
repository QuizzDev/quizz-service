package de.quizz.view.skin.phone
{
	import de.quizz.view.util.MultiChoiceListView;
	
	import mx.core.DPIClassification;
	
	import spark.components.Group;
	import spark.components.List;
	import spark.components.Scroller;
	import spark.layouts.VerticalLayout;
	import spark.skins.mobile.supportClasses.MobileSkin;
	
	public class MultiChoiceListSkin extends MobileSkin
	{
		//----------------------
		// HostComponent
		//----------------------
		
		/** 
		 *  @copy spark.skins.spark.ApplicationSkin#hostComponent
		 */
		public var hostComponent:MultiChoiceListView;
		
		
		//----------------------
		// UIComponents
		//----------------------
		
		/**
		 *  @copy spark.components.SkinnableContainer#contentGroup
		 */
		public var contentGroup:Group;
		
		
		public var scl_content:Scroller;
		public var bx_content:Group;
		
		// we will add some fxg classes here 
		// for advanced styling and skinning

		
		//----------------------
		// Skin Parts
		//----------------------
		
		public var lst_choice:List;
		
		
		//----------------------
		// Constructor
		//----------------------
		
		public function MultiChoiceListSkin()
		{
			super();
			
			switch (applicationDPI)
			{
				case DPIClassification.DPI_320:
				{
					break;
				}
				case DPIClassification.DPI_240:
				{					
					break;
				}
				default:
				{
					break;
				}
			}
		}
		
		override protected function createChildren():void
		{
			super.createChildren();
			
			// Add scroller
			scl_content = new Scroller();
			addChild(scl_content);

			// Add components
			contentGroup = new Group();
			contentGroup.left = contentGroup.right = contentGroup.top = contentGroup.bottom = 0;
			contentGroup.minWidth = contentGroup.minHeight = 0;
			
			bx_content = new Group();
			bx_content.left = bx_content.right = bx_content.top = bx_content.bottom = 10;
			contentGroup.addElement(bx_content);
			
			lst_choice = new List();
			lst_choice.id = "lst_choice";
			bx_content.addElement(lst_choice);
			
			// Add components to DisplayList
			addChild(contentGroup);
		}
		
		override protected function layoutContents(unscaledWidth:Number, unscaledHeight:Number):void
		{
			super.layoutContents(unscaledWidth, unscaledHeight);
			
			setElementPosition(scl_content, 0, 0);
			setElementSize(scl_content, unscaledWidth, unscaledHeight);
			
			scl_content.viewport = contentGroup;
			
			setElementPosition(contentGroup, 0, 0);
			setElementSize(contentGroup, unscaledWidth, unscaledHeight);
			
			bx_content.layout = new VerticalLayout();
			
			lst_choice.percentWidth = 100;
			lst_choice.percentHeight = 100;
		}
		
		override protected function measure():void
		{        
			super.measure();
			
			measuredWidth = contentGroup.getPreferredBoundsWidth();
			measuredHeight = contentGroup.getPreferredBoundsHeight();
		}
	}
}
