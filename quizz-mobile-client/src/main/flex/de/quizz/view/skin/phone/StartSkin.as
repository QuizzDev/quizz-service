package de.quizz.view.skin.phone
{
	import de.quizz.view.component.ValueButton;
	import de.quizz.view.container.StartView;
	
	import mx.controls.Spacer;
	import mx.core.DPIClassification;
	import mx.graphics.BitmapFillMode;
	import mx.graphics.BitmapSmoothingQuality;
	
	import org.osmf.layout.ScaleMode;
	
	import spark.components.Group;
	import spark.components.Label;
	import spark.components.Scroller;
	import spark.layouts.VerticalLayout;
	import spark.primitives.BitmapImage;
	import spark.skins.mobile.supportClasses.MobileSkin;
	
	public class StartSkin extends MobileSkin
	{
		//----------------------
		// HostComponent
		//----------------------
		
		/** 
		 *  @copy spark.skins.spark.ApplicationSkin#hostComponent
		 */
		public var hostComponent:de.quizz.view.container.StartView;

		
		//----------------------
		// UIComponents
		//----------------------
		
		/**
		 *  @copy spark.components.SkinnableContainer#contentGroup
		 */
		public var contentGroup:Group;
		
		public var scroller:Scroller;
		public var content:Group;
		
		[Embed(source="logo.png")]
		public var img_logo:Class;
		
		// we will add some fxg classes here 
		// for advanced styling and skinning
		
		
		//----------------------
		// Skin Parts
		//----------------------
		
		public var txt_caption:Label;
		public var txt_info:Label;
		public var btn_startStandbyTime:ValueButton;
		public var btn_showStandbyTimeList:ValueButton;
		public var btn_showMyProfile:ValueButton;

		
		//----------------------
		// Constructor
		//----------------------
		
		public function StartSkin()
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
			
			// add scroller
			scroller = new Scroller();
			addChild(scroller);

			// add contentGroup
			contentGroup = new Group();
			contentGroup.left = contentGroup.right = contentGroup.top = contentGroup.bottom = 0;
			contentGroup.minWidth = contentGroup.minHeight = 0;
			
			// add content box to contentGroup
			content = new Group();
			content.id = "content";
			content.left = content.right = content.top = content.bottom = 10;
			contentGroup.addElement(content);
			
			var space1:Spacer = new Spacer();
			space1.height = 10;
			content.addElement(space1);
			
			var img:BitmapImage = new BitmapImage();
			img.source = new img_logo();
			img.width = 100;
			img.smooth = true;
			img.smoothingQuality = BitmapSmoothingQuality.HIGH;
			img.fillMode = BitmapFillMode.SCALE;
			img.scaleMode = ScaleMode.LETTERBOX;
			content.addElement(img);
			
			var space2:Spacer = new Spacer();
			space2.percentHeight = 100;
			content.addElement(space2);
			
			txt_caption = new Label();
			txt_caption.id = "txt_caption";
			content.addElement(txt_caption);
			
			txt_info = new Label();
			txt_info.id = "txt_info";
			content.addElement(txt_info);
			
			btn_startStandbyTime = new ValueButton();
			btn_startStandbyTime.id = "btn_startStandbyTime";
			content.addElement(btn_startStandbyTime);

			btn_showStandbyTimeList = new ValueButton();
			btn_showStandbyTimeList.id = "btn_showStandbyTimeList";
			content.addElement(btn_showStandbyTimeList);

			btn_showMyProfile = new ValueButton();
			btn_showMyProfile.id = "btn_showMyProfile";
			content.addElement(btn_showMyProfile);

			// add components to DisplayList
			addChild(contentGroup);
		}
		
		override protected function layoutContents(unscaledWidth:Number, unscaledHeight:Number):void
		{
			super.layoutContents(unscaledWidth, unscaledHeight);
			
			setElementPosition(scroller, 0, 0);
			setElementSize(scroller, unscaledWidth, unscaledHeight);
			
			scroller.viewport = contentGroup;
			
			setElementPosition(contentGroup, 0, 0);
			setElementSize(contentGroup, unscaledWidth, unscaledHeight);
			
			var verticalLayout:VerticalLayout = new VerticalLayout();
			verticalLayout.horizontalAlign = "center";
			verticalLayout.verticalAlign = "middle";
			verticalLayout.gap = 10;
			
			content.layout = verticalLayout;
			content.percentWidth = 100;
			
			txt_caption.percentWidth = 100;
			txt_info.percentWidth = 100;
			btn_startStandbyTime.percentWidth = 100;
			btn_showStandbyTimeList.percentWidth = 100;
			btn_showMyProfile.percentWidth = 100;
		}
		
		override protected function measure():void
		{        
			super.measure();
			
			measuredWidth = contentGroup.getPreferredBoundsWidth();
			measuredHeight = contentGroup.getPreferredBoundsHeight();
		}
	}
}
