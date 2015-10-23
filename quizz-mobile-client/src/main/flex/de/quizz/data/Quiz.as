package de.quizz.data
{
	import de.quizz.data.vo.Question;
	
	import mx.collections.ArrayCollection;
	import mx.utils.ArrayUtil;

	public class Quiz
	{
		public static const QUESTION_COUNT_TWENTY:int = 20;
		public static const QUESTION_COUNT_FIFTY:int = 50;
		public static const QUESTION_COUNT_HUNDRED:int = 100;
		
		public var questions:ArrayCollection;
		
		public var questionIndex:int;
		public var currentQuestion:Question;
		public var previousQuestion:Question;
		public var nextQuestion:Question;
		
		public function get isPreviousQuestionPossible():Boolean
		{
			return (questions.getItemAt(questionIndex - 1) != null) ? true : false;
		}

		public function get isNextQuestionPossible():Boolean
		{
			return (questions.getItemAt(questionIndex + 1) != null) ? true : false;
		}
	}
}