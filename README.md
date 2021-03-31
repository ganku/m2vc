# m2vc
Micro MVC for PHP.Size on disk is 8 KB.

This is a simple Model View Controller program for those who wants to know what is running on their machines and do not want to install a lot of dependencies.
The core of this is based on invokes and includes.

#TO RUN
Simply download MVC foler to htdocs on your apache. Or start php -S localhost:4000 and browse to http://localhost/MVC/about-us

The .htaccess redirects all requests to index.jsp. The get argument following MVC is used to invoke a php class of the same name which acts as controller. The controller loads a view of the same name in a view directory and executes a methods to fetch data. 

Only about-us is fully functional and requires a mysql DB with a table called apr. 
