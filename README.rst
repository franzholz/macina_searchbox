

|LatestStableVersion|_ |TotalDownloads|_ |MonthlyDownloads|_


.. |LatestStableVersion| image:: https://poser.pugx.org/jambagecom/macina-searchbox/v/stable.svg
   :alt: Latest Stable Version
.. _LatestStableVersion: https://packagist.org/packages/jambagecom/macina-searchbox

.. |TotalDownloads| image:: https://poser.pugx.org/jambagecom/macina-searchbox/d/total.svg
   :alt: Total Downloads
.. _TotalDownloads: https://packagist.org/packages/jambagecom/macina-searchbox

.. |MonthlyDownloads| image:: https://poser.pugx.org/jambagecom/macina-searchbox/d/monthly
   :alt: Monthly Downloads
.. _MonthlyDownloads: https://packagist.org/packages/jambagecom/macina-searchbox



====================================
TYPO3 Extension ``macina_searchbox``
====================================


This extension offers the possibility to add a searchbox to your TYPO3
powered website which submits the searchvalue to the Indexed Search
Engine plugin.
The extension macina_searchbox brings a an easier way to insert a searchbox for Indexed Search on every page.
It has a Fluid template which is easy to
modify and supports multiple languages. Use the plugin of Indexed
Search. This extension is useful to have a Fluid template which will not
show the search results.


::

lib.macina_searchbox = USER
lib.macina_searchbox {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = IndexedSearch
    vendorName = TYPO3\CMS
    pluginName = Pi2
    features =< plugin.tx_indexedsearch.features
    view =< plugin.tx_indexedsearch.view
    view.partialRootPaths.10 = EXT:macina_searchbox/Resources/Private/Partials/
    view.templateRootPaths.10 = EXT:macina_searchbox/Resources/Private/Templates/

    settings =< plugin.tx_indexedsearch.settings
    settings {
        targetPid = {$lib.macina_searchbox.pidSearchpage}
        displayAdvancedSearchLink = 1
        blind.numberOfResults = 0
    }
}


---

You can use these CSS settings in order to get the same output as in old
versions of macina_searchbox.

::

   .tx-indexedsearch-searchbox fieldset {
     border:none;
     padding:0 0 10px 0;
     margin:0;
   }

   .tx-indexedsearch-form {
     float: left;
   }

   .tx-indexedsearch-search-submit {
       float: right;
   }


Usage
=====

Insert the setup of Indexed Search (indexed_search) and then of Macina Searchbox (macina_searchbox) from “include static (from
extensions)” and insert an Indexed Search plugin. The Indexed Search setup must be before Macina Searchbox.
Do not use the plugin
of macina_searchbox! This has been changed from the older versions and the outdated documentation!

By this method the setup will be available in your TypoScript. Then you can modify the setup to your own template files which you change to your needs.

Then in your template add this:

::

  <f:cObject typoscriptObjectPath="lib.macina_searchbox" />


or

::

   page.10.marks.LEFT < lib.macina_searchbox

Contributions
=============

This git version is puglished under `TYPO3 Extension
Repository <https://extensions.typo3.org/>`__. You are invited to give
comments and to make bug reports on this Github repository.



.. csv-table::
   :header: "", "URL"

   **Repository:**,        https://github.com/franzholz/macina_searchbox/
   **Read online:**,       https://github.com/franzholz/macina_searchbox/
   **TER:**,               https://extensions.typo3.org/extension/macina_searchbox/
   **How to display search box on all pages:**            https://stackoverflow.com/questions/49363731/how-to-display-search-box-in-all-the-frontend-page-sidebar-typo3


