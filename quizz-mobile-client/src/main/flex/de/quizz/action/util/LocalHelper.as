package de.quizz.action.util
{
    import mx.resources.ResourceManager;

    public class LocalHelper
    {
        public function initialize(lang:String = "de_DE"):void
        {
            var prefLang:String = (lang as String).toUpperCase();

            // german
            if (prefLang.indexOf("DE") > -1)
            {
                ResourceManager.getInstance().localeChain = [ 'de_DE' ];
                    // english
            }
            else if (prefLang.indexOf("EN") > -1)
            {
                ResourceManager.getInstance().localeChain = [ 'en_US' ];
            }
        }

        public static function getCurrentLocale():String
        {
            return ResourceManager.getInstance().localeChain[0];
        }
    }
}
