package de.quizz.action
{
	import de.quizz.business.IStartupDelegate;
	import de.quizz.data.Model;

	public class RemoteController
	{
		//----------------------
		// Properties
		//----------------------
		
		[Inject(source="model", bind="true")]
		public var model:Model;
		
		[Inject(source="startupDelegate", bind="true")]
		public var startupDelegate:IStartupDelegate;
		
		//----------------------
		// Methods
		//----------------------
		
		// ...
	}
}
