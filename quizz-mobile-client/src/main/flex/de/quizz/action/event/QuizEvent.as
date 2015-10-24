package de.quizz.action.event
{
	import flash.events.Event;
	
	public class QuizEvent extends Event
	{
		public static const START_NORMAL_QUIZ:String = 'QuizEvent.START_NORMAL_QUIZ';
		public static const QUIT_NORMAL_QUIZ:String = 'QuizEvent.QUIT_NORMAL_QUIZ';
		public static const RESUME_NORMAL_QUIZ:String = 'QuizEvent.RESUME_NORMAL_QUIZ';
		
		public static const START_PERSONAL_QUIZ:String = 'QuizEvent.START_PERSONAL_QUIZ';
		public static const QUIT_PERSONAL_QUIZ:String = 'QuizEvent.QUIT_PERSONAL_QUIZ';
		public static const RESUME_PERSONAL_QUIZ:String = 'QuizEvent.RESUME_PERSONAL_QUIZ';
		
		public static const NEXT_QUESTION:String = 'QuizEvent.NEXT_QUESTION';
		public static const PREVIOUS_QUESTION:String = 'QuizEvent.PREVIOUS_QUESTION';

		public static const ADD_QUESTION_TO_FAVOURITELIST:String = 'QuizEvent.ADD_QUESTION_TO_FAVOURITELIST';
		public static const REMOVE_QUESTION_FROM_FAVOURITELIST:String = 'QuizEvent.REMOVE_QUESTION_FROM_FAVOURITELIST';
		public static const ADD_ANSWER_TO_FAVOURITELIST:String = 'QuizEvent.ADD_ANSWER_TO_FAVOURITELIST';
		public static const REMOVE_ANSWER_FROM_FAVOURITELIST:String = 'QuizEvent.REMOVE_ANSWER_FROM_FAVOURITELIST';
		
		public function QuizEvent(type:String, bubbles:Boolean=true, cancelable:Boolean=false)
		{
			super(type, bubbles, cancelable);
		}
	}
}