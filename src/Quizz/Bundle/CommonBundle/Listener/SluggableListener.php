<?php
    namespace Quizz\Bundle\CommonBundle\Listener;

    use Gedmo\Sluggable\SluggableListener as BaseListener;

    class SluggableListener extends BaseListener
    {
        public function __construct(){
            $this->setTransliterator(array('\Quizz\Bundle\CommonBundle\Listener\SluggableListener', 'transliterate'));
        }

        /**
         * since transliterate will convert "ä" to an "a", i added this hack to call urlize first so it is converted to "ae" first
         *
         * @param string $text
         * @param string $separator
         * @return string $text
         */
        public static function transliterate($text, $separator = '-')
        {
            $text = \Gedmo\Sluggable\Util\Urlizer::urlize($text, $separator);

            return \Gedmo\Sluggable\Util\Urlizer::transliterate($text, $separator);
        }
    }