package de.quizz.action
{
	import de.quizz.action.event.QuizEvent;
	import de.quizz.data.Model;
	import de.quizz.data.Quiz;
	import de.quizz.data.QuizCreator;

	public class AppController
	{
		//----------------------
		// Properties
		//----------------------
		
		[Inject(source="model", bind="true")]
		public var model:Model;
		
		[Inject(source="quizCreator", bind="true")]
		public var quizCreator:QuizCreator;
		
		//----------------------
		// Methods
		//----------------------
		
		[EventHandler(event="QuizEvent.START_NORMAL_QUIZ")]
		public function startNormalQuiz(event:QuizEvent):void
		{
			// create new Quiz
			model.normalQuiz = quizCreator.createQuiz(model.allQuestions, Quiz.QUESTION_COUNT_TWENTY);
			
			// and dispatch DisplayQuizViewEvent
		}
		
		[EventHandler(event="QuizEvent.PREVIOUS_QUESTION")]
		public function previousQuestion(event:QuizEvent):void
		{
			
		}
		
		[EventHandler(event="QuizEvent.NEXT_QUESTION")]
		public function nextQuestion(event:QuizEvent):void
		{
			
		}
		
		[EventHandler(event="QuizEvent.QUIT_NORMAL_QUIZ")]
		public function quitNormalQuiz(event:QuizEvent):void
		{
			
		}
		
		[EventHandler(event="QuizEvent.RESUME_NORMAL_QUIZ")]
		public function resumeNormalQuiz(event:QuizEvent):void
		{
			
		}
		
		[EventHandler(event="QuizEvent.START_PERSONAL_QUIZ")]
		public function startPersonalQuiz(event:QuizEvent):void
		{
			// create new Quiz
			model.personalQuiz = quizCreator.createQuiz(model.allQuestions, Quiz.QUESTION_COUNT_TWENTY);
			
			// and dispatch DisplayQuizViewEvent
		}
		
		[EventHandler(event="QuizEvent.QUIT_PERSONAL_QUIZ")]
		public function quitPersonalQuiz(event:QuizEvent):void
		{
			
		}
		
		[EventHandler(event="QuizEvent.RESUME_PERSONAL_QUIZ")]
		public function resumePersonalQuiz(event:QuizEvent):void
		{
			
		}
	}
}
