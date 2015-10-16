package de.quizz.data
{
	import org.swizframework.storage.ISharedObjectBean;

	[Bindable]
	public class Model
	{
		//----------------------
		// Properties
		//----------------------
		
		[Inject]
		public var elviSOBean:ISharedObjectBean;
		
		public var errorCode:String = "";

	}
}