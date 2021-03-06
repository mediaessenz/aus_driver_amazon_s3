<?php
/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = array(
    'title' => 'anders und sehr: Amazon AWS S3 FAL driver (CDN)',
    'description' => 'Provides a FAL driver for the Amazon Web Service S3.',
    'category' => 'be',
    'version' => '1.5.4',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Markus Hoelzle',
    'author_email' => 'typo3@markus-hoelzle.de',
    'author_company' => 'anders und sehr GmbH',
    'constraints' =>
        array(
            'depends' =>
                array(
                    'typo3' => '6.2.0-8.99.99',
                ),
            'conflicts' => array(),
            'suggests' => array(),
        ),
);
