DynHtaccess
===========


This project is a simple htaccess method to make your website directory independant of its context, with relatives ErrorDocuments, under the MIT license.

You can easily rename or move a website directory without modifying your Apache configuration, your website sources, or even the htaccess file in that folder.


When used in a global context :
-------------------------------

Put simply the /sources/localhost/.htaccess file in your DOCUMENT_ROOT.

Define your own routes, if necessary, and enjoy.


When used in a subdirectory context :
-------------------------------------

Put the /sources/.htaccess file in your DOCUMENT_ROOT.

Put the /sources/localhost/.htaccess file in your DOCUMENT_ROOT/localhost/.

(NB : replace "localhost" by your hostname)


Demos :
-------

For each of the two demos, copy the contents of /demos/DOCUMENT_ROOT_* directly into the DOCUMENT_ROOT folder on your server.

Beware of well delete the previous content, to obvious reasons of compatibility.

Each of these demos is, by default, the home page that is accessible (eg : http://localhost/) and any file in the /resources subdirectory.

For the second demo, you may need to rename the /localhost directory to match with your hostname.


Requirements :
--------------

Apache + mods activated (Rewrite & SetEnvIf) & PHP (for the demos)
