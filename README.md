# urlshortner
Convert regular URL to its condensed format

• /application/models/urls_model.php: This file provides access to the database and allows us to create the url_code, save the record to the database, and also retrieve the original URL from the database.

• /application/views/create/create.php: This file provides us with our interface, the user facing form, and any messages needed to inform the user of their actions or the system's actions.

• /application/views/nav/top_nav.php: This file provides a navigation bar at the top of the page.

• /application/controllers/create.php: This file performs validation checks on the URL inputted by the user, calls any helpers, and so on.

• /application/controllers/go.php: This file provides support for shortened URLs. It gets the unique code parameter from the URI (first segment), sends it to the Urls_model, and redirects the user to the associated url_address if it exists.

• /application/language/english/en_admin_ lang.php: This file provides language support for the application.

The file structure 
   application/
   ├── controllers/
   │   ├── create.php
   │   ├── go.php
   ├── models/
   │   ├── urls_model.php
   ├── views/create/
   │   ├── create.php
   ├── views/nav/
   │   ├── top_nav.php
   ├── language/english/
       ├── en_admin_lang.php
