<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "microformat".
 *
 * Auto generated 10-02-2017 14:16
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Microformat - describe your data',
    'description' => 'Describe your data in microformat. ViewHelper to build a schema.org structure. Development on https://github.com/cabi/calendarize',
    'category' => 'fe',
    'version' => '0.0.9-alpha',
    'state' => 'alpha',
    'clearcacheonload' => true,
    'author' => 'Carsten Biebricher',
    'author_email' => 'cabi@lernziel.de',
    'constraints' =>
        array (
            'depends' =>
                array (
                    'typo3' => '9.5.0-9.99.99',
                    'php' => '7.1.0-7.4.0'
                ),
            'conflicts' =>
                array (
                ),
            'suggests' =>
                array (
                ),
        ),
    'autoload' =>
        array (
            'psr-4' =>
                array (
                    'HDNET\\Microformat\\' => 'Classes/'
                ),
        ),
    'uploadfolder' => false,
    'createDirs' => null,
    'author_company' => null,
);
