package de.quizz.data.vo
{
	import mx.collections.ArrayCollection;

	[Bindable]
	public class Question
	{
		public var id:Number;
		
		public var question:String;
		
		public var topics:ArrayCollection;
		
		public var possibleAnwers:ArrayCollection;
		
		public var correctAnswer:Answer;
		
		public var difficulty:int;
	}
}