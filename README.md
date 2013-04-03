copy this directory (or create a symbolic link) to application/modules/Auth/

Make sure you application.ini have the following:


    autoloaderNamespaces[] = "Auth_"
    resources.frontController.moduleDirectory = APPLICATION_PATH "/modules"
