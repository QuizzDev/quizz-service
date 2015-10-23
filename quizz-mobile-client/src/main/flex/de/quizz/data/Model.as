package de.quizz.data
{
	import mx.collections.ArrayCollection;
	
	import org.swizframework.storage.ISharedObjectBean;

	[Bindable]
	public class Model
	{
		//----------------------
		// Properties
		//----------------------
		
		[Inject]
		public var quizzSoBean:ISharedObjectBean;
		
		public var quizzErrorCode:String = "";
		
		public var allQuestions:ArrayCollection;
		public var favouriteQuestions:ArrayCollection;
		public var favouriteAnwsers:ArrayCollection;
		
		public var normalQuiz:Quiz;
		public var personalQuiz:Quiz;
		
	}
}