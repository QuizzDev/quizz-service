package de.quizz.action
{
	import de.quizz.data.Model;

	public class AppController
	{
		//----------------------
		// Properties
		//----------------------
		
		[Inject(source="model", bind="true")]
		public var model:de.quizz.data.Model;
		
		
		//----------------------
		// Methods
		//----------------------
		
		// ..
	}
}
