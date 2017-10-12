Teknoo Software - Sellsy client
==========================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e053f347-f92a-47d9-b8b3-9f415d407889/mini.png)](https://insight.sensiolabs.com/projects/e053f347-f92a-47d9-b8b3-9f415d407889) [![Build Status](https://travis-ci.org/TeknooSoftware/sellsy-client.svg?branch=master)](https://travis-ci.org/TeknooSoftware/sellsy-client)

PHP library to connect your applications to your [Sellsy account](http://sellsy.com/) account using the 
[Sellsy API](http://api.sellsy.com/) and build your websites and your platforms on the Sellsy technology.

Simple Example
--------------

      //Create the HTTP client
      $guzzleClient = new GuzzleHttp\Client();

      //Create the transport bridge
      $transportBridge = new Teknoo\Sellsy\Transport\Guzzle($guzzleClient);

      //Create the front object
      $sellsy = new Teknoo\Sellsy\Sellsy(
        $transportBridge,
        'User Token',
        'User Secret',
        'Consumer Token',
        'Consumer Secret'
     );
        
     //Example of request, follow the API documentation of Sellsy API.
     print_r($sellsy->Infos()->getInfos());
     print_r($sellsy->AccountPrefs()->getCorpInfos());

How-to
------
Quick How-to to learn how use this library : [Startup](docs/quick-startup.md).

Installation & Requirements
---------------------------
To install this library with composer, run this command :

    composer require teknoo/sellsy-client
    
To use the embedded Guzzle transport    

    composer require guzzlehttp/guzzle

This library requires :

    * PHP 7+
    * A PSR-7 implementation

API Documentation
-----------------
Generated documentation from the library with PhpDocumentor : [Open](https://cdn.rawgit.com/TeknooSoftware/sellsy-client/master/docs/api/index.html).

Credits
-------
Richard Déloge - <richarddeloge@gmail.com> - Lead developer.
Teknoo Software - <http://teknoo.software>

About Teknoo Software
---------------------
**Teknoo Software** is a PHP software editor, founded by Richard Déloge. 
Teknoo Software's DNA is simple : Provide to our partners and to the community a set of high quality services or software,
 sharing knowledge and skills.
 
License
-------
States is licensed under the MIT Licenses - see the licenses folder for details

Contribute :)
-------------

You are welcome to contribute to this project. [Fork it on Github](CONTRIBUTING.md)
