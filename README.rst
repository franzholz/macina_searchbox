TYPO3 Extension “macina_searchbox”
==================================

This extension offers the possibility to add a searchbox to your TYPO3
powered website which submits the searchvalue to the Indexed Search
Engine plugin. The extension has a Fluid template which is easy to
modify and supports multiple languages. Use the plugin of Indexed
Search. This extension is useful to have a Fluid template which will not
show the search results.

Version 3.1.0
-------------

.. raw:: html

   <table>

.. raw:: html

   <tr>

.. raw:: html

   <td>

Version

.. raw:: html

   </td>

.. raw:: html

   <td>

3.1.0 stable

.. raw:: html

   </td>

.. raw:: html

   </tr>

.. raw:: html

   <tr>

.. raw:: html

   <td>

Release date

.. raw:: html

   </td>

.. raw:: html

   <td>

21st March 2022

.. raw:: html

   </td>

.. raw:: html

   </tr>

.. raw:: html

   <tr>

.. raw:: html

   <td>

Author

.. raw:: html

   </td>

.. raw:: html

   <td>

Franz Holzinger, Wolfgang Becker

.. raw:: html

   </td>

.. raw:: html

   </tr>

.. raw:: html

   </table>

CSS
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
-----

Insert the setup of macina_searchbox from “include static (from
extensions)” and insert an Indexed Search plugin. Do not use the plugin
of macina_searchbox! This has been changed from the older versions.

Contributions
-------------

This git version is puglished under `TYPO3 Extension
Repository <https://extensions.typo3.org/>`__. You are invited to give
comments and to make bug reports on this Github repository.
