package de.quizz.data
{
	import de.quizz.data.vo.Question;
	
	import mx.collections.ArrayCollection;
	import mx.utils.ArrayUtil;

	public class QuizCreator
	{
		public function createQuiz(allQuestions:ArrayCollection, questionCount:int):Quiz
		{
			var quiz:Quiz = new Quiz();
			quiz.questionIndex = 0;
			quiz.questions = allQuestions;
			quiz.currentQuestion = quiz.questions.getItemAt(quiz.questionIndex) as Question;
			quiz.nextQuestion = null;
			quiz.nextQuestion = quiz.questions.getItemAt(quiz.questionIndex + 1) as Question;
			
			return quiz;
		}
	}
}