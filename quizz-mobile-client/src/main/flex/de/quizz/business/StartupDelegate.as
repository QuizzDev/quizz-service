package de.quizz.business
{
    import mx.rpc.AsyncToken;
    import mx.rpc.remoting.RemoteObject;

    public class StartupDelegate implements IStartupDelegate
    {
        [Inject(source = "startup")]
        public var startupService:RemoteObject;

        public function getStartupData():AsyncToken
        {
            return startupService.getStartupData();
        }
    }
}

