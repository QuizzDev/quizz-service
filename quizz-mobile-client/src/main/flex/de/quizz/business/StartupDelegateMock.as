package de.quizz.business
{
    import mx.rpc.AsyncToken;
    
    import org.swizframework.utils.services.MockDelegateHelper;

    public class StartupDelegateMock
    {
        protected var util:MockDelegateHelper;

        public function StartupDelegateMock()
        {
            util = new MockDelegateHelper(true);
        }

        public function getStartupData():AsyncToken
        {
            return util.createMockResult(true, 300);
        }
    }
}

