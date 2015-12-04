/in/ folder

this folder holds the pages for user --LOGGED 
it adds the user section to the index.php landing page and pulls the topic components from topic.php (or; is passed from setting with the original page request)  and gives the user access to the create and edit tools, which users must have an account and be logged in to use.

@params ABSPATH = www.lynxous.com or mirror etc...
@params $_topic
@params $_logged = true;

INDEX.PHP
[ABSPATH . '/in/index.php'] is the base template that calls the sections for the page once it has been passed from [ABSPATH . 'settings.php']
all the components will be called to populate the template using .js, jquery, php, and mySQL, until we add Lucene 5.3.1

@params user_settings = $user_object;
@params topic = $topic_object;

CHAT
www.github.com/izengosoft/js.converse
logged user will also have access to js.converse chat tool which will load once the page is populated.