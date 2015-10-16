package de.quizz.view.skin.phone
{
	import de.quizz.view.container.LoadingView;
	
	import mx.core.DPIClassification;
	
	import spark.components.BusyIndicator;
	import spark.components.Group;
	import spark.layouts.VerticalLayout;
	import spark.skins.mobile.supportClasses.MobileSkin;
	
	public class LoadingSkin extends MobileSkin
	{
		//----------------------
		// HostComponent
		//----------------------
		
		/** 
		 *  @copy spark.skins.spark.ApplicationSkin#hostComponent
		 */
		public var hostComponent:LoadingView;

		
		//----------------------
		// UIComponents
		//----------------------
		
		/**
		 *  @copy spark.components.SkinnableContainer#contentGroup
		 */
		public var contentGroup:Group;
		
		
		//----------------------
		// Skin Parts
		//----------------------
		
		public var busyIndicator:BusyIndicator;

		
		//----------------------
		// Constructor
		//----------------------
		
		public function LoadingSkin()
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

			// Add components
			contentGroup = new Group();
			contentGroup.left = contentGroup.right = contentGroup.top = contentGroup.bottom = 0;
			contentGroup.minWidth = contentGroup.minHeight = 0;
			
			busyIndicator = new BusyIndicator();
			busyIndicator.id = "busyIndicator";
			contentGroup.addElement(busyIndicator);
			
			// Add components to DisplayList
			addChild(contentGroup);
		}
		
		override protected function layoutContents(unscaledWidth:Number, unscaledHeight:Number):void
		{
			super.layoutContents(unscaledWidth, unscaledHeight);
			
			setElementPosition(contentGroup, 0, 0);
			setElementSize(contentGroup, unscaledWidth, unscaledHeight);
			
			var layout:VerticalLayout = new VerticalLayout();
			layout.horizontalAlign = "center";
			layout.verticalAlign = "middle";
			contentGroup.layout = layout;
		}
		
		override protected function measure():void
		{        
			super.measure();
			
			measuredWidth = contentGroup.getPreferredBoundsWidth();
			measuredHeight = contentGroup.getPreferredBoundsHeight();
		}
	}
}