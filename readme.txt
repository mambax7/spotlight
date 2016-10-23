"Spotlight" http://linux.kuht.it  - http://www.kuht.it spark@kuht.it

Adaptation for XOOPS 2.0x by Herko (me at herkocoomans dot net) and dAWiLbY (willemsen1 at chello dot nl)
and Catzwolf (catzwolf@wfsections.xoops2.com)

--------------------------------------------------------------
Dopo l'installazione del modulo vanno modificate le impostazioni del blocco "Spotlight - News"
la disposizione consigliata � "Blocco centrale centro".
Si ricorda inoltre di verificare e settare i permessi di accesso al modulo.

Per informazioni, help, suggerimenti : spark@kuht.it
--------------------------------------------------------------

The Spotlight module can be used to 'spot' an article of special interest on your mainpage. It still is
a block but as a central block it has the most value [even if Spotlight can be used as any normal block]
The information in Italian is still there, in respect to the original author of Spotlight but for help,
information and suggestions, please visit http://wfsections.xoops2.com

PLEASE NOTE: You MUST chmod the 'thumbs' folder within the 'images' folder for thumbs to work correctly. If for some 
reason Thumbnail images do not work on your server, you can turn 'off' this option in the module configuration.

-------------------------------------------------------
:: This is also the version which shows only newsitems.
-------------------------------------------------------

v1.2 First release for Xoops v2.0.

v1.3 Bugfix release.
 + admin completely in Xoops v2.0 style.
 + added BB Codes
 + Spotlight now shows a topic select box to jump directly to the selected topic articles [ suggestion by romu ]
 - bug not displaying selected newsitem image.
 - bug displaying comments link [even as anonymous user]
 - bug not displaying hits in recent newslinks if selected in block admin.
 - little bug in template not showing the othernews title.
 - changed '...ORDER BY published DESC' in the db/sql so if a newsitem is edited, spotlight displays that newsitem.
 - typo in mysql.sql
 - bug displaying the html source.

v1.3.1 Bugfix release.
 + template refinement: added some space between text and image.
 + image placement: if an image is displayed to the right in newsitem the it does the same in Spotlight.
 - bug fixed always showing the first topic image.

v1.4beta3 release
 + let the users choose between news or WF-Sections as Spotlight news [Or both]
 + admin for WF-Sections [not working]
 + added setting for disabling the More News feature (ie. setting it to 'show no news items', will show no news items)
 + change option 1 and 0 to yes/no for topic select box.
 - bugfix in template not displaying the correct other articles.
 - bugfix not showing the correct newsitems/wf-articles.

:: Thanks to Techgnome for sending his nearly 90% finished Spotlight for WF-Section ::

v1.4 release
 + added hsalasar's code to display 'more newslinks' with a teaser text.
 + added hsalasar's code also for WF-Sections.
 + admin for WF-Sections.
 - bugfix not showing the latest [changed] WF-Section article.

:: Thanks to HSalasar for the "teaser" links.

v1.4.1 release
 + added hsalasar's code to display your spotlight[template] news or article in two columns or stacked.
 + added hsalasar's code to display a ministats line with relevant stats from news/WF-Sections.

:: Thanks to HSalasar for the template options and ministats feature.

v2.0 RC1
 + Added/Changed: Recoded all of the admin area nearly 90%.
 + Added: Image upload area.
 + Added: Thumbnails for images.
 + Changed: Templates, still much work to be done on these, should be completed by full release. 
 + Bugfixes: Many fixed, added many and fixed again.
 + fixed AM_ERRORMESSAGE define. Thanks antah + francis.
 + fixed mysql error when installing. thanks marcan.
NB: May not sound like many changes for the massive version jump, but you will understand why when you use it.	

