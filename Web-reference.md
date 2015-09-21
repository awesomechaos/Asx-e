# Awesome PHP
A curated list of amazingly awesome PHP libraries, resources and shiny things.

## Contributing
Please see [CONTRIBUTING](https://github.com/ziadoz/awesome-php/blob/master/CONTRIBUTING.md) for details.

## Table of Contents
- [Awesome PHP](#awesome-php)
	- [Dependency Management](#dependency-management)
	- [Dependency Management Extras](#dependency-management-extras)
	- [Frameworks](#frameworks)
	- [Framework Extras](#framework-extras)
	- [Components](#components)
	- [Micro Frameworks](#micro-frameworks)
	- [Micro Framework Extras](#micro-framework-extras)
    - [Routers](#routers)
	- [Templating](#templating)
	- [Static Site Generators](#static-site-generators)
	- [HTTP](#http)
	- [Middlewares](#middlewares)
	- [URL](#url)
	- [Email](#email)
	- [Files](#files)
	- [Streams](#streams)
	- [Dependency Injection](#dependency-injection)
	- [Imagery](#imagery)
	- [Testing](#testing)
	- [Continuous Integration](#continuous-integration)
	- [Documentation](#documentation)
	- [Security](#security)
	- [Passwords](#passwords)
	- [Code Analysis](#code-analysis)
	- [Architectural](#architectural)
	- [Debugging and Profiling](#debugging-and-profiling)
	- [Build Tools](#build-tools)
	- [Task Runners](#task-runners)
	- [Navigation](#navigation)
	- [Asset Management](#asset-management)
	- [Geolocation](#geolocation)
	- [Date and Time](#date-and-time)
	- [Event](#event)
	- [Logging](#logging)
	- [E-commerce](#e-commerce)
	- [PDF](#pdf)
	- [Office](#office)
	- [Database](#database)
	- [Migrations](#migrations)
	- [NoSQL](#nosql)
	- [Queue](#queue)
	- [Search](#search)
	- [Command Line](#command-line)
	- [Authentication and Authorization](#authentication-and-authorization)
	- [Markup](#markup)
	- [Strings](#strings)
	- [Numbers](#numbers)
	- [Filtering and Validation](#filtering-and-validation)
	- [API](#api)
	- [Caching](#caching)
	- [Data Structure and Storage](#data-structure-and-storage)
	- [Notifications](#notifications)
	- [Deployment](#deployment)
	- [Internationalisation and Localisation](#internationalisation-and-localisation)
	- [Third Party APIs](#third-party-apis)
	- [Extensions](#extensions)
	- [Miscellaneous](#miscellaneous)
- [Software](#software)
	- [PHP Installation](#php-installation)
	- [Development Environment](#development-environment)
	- [Virtual Machines](#virtual-machines)
	- [Integrated Development Environment](#integrated-development-environment)
	- [Web Applications](#web-applications)
	- [Infrastructure](#infrastructure)
- [Resources](#resources)
	- [PHP Websites](#php-websites)
	- [Other Websites](#other-websites)
	- [PHP Books](#php-books)
	- [PHP Videos](#php-videos)
	- [PHP Reading](#php-reading)
	- [PHP Internals Reading](#php-internals-reading)
- [Contributing](#contributing)

## Dependency Management
*Libraries for dependency and package management.*

* [Composer](http://getcomposer.org/)/[Packagist](http://packagist.org/) - A package and dependency manager.
* [Composer Installers](https://github.com/composer/installers) - A  multi framework Composer library installer.
* [Pickle](https://github.com/FriendsOfPHP/pickle) - A PHP extension installer.
* [Melody](http://melody.sensiolabs.org/) - A tool to build one file Composer scripts.

## Dependency Management Extras
*Extras related to dependency management.*

* [Satis](https://github.com/composer/satis) - A static Composer repository generator.
* [Toran Proxy](https://toranproxy.com) - A static Composer repository and proxy.
* [Composition](https://github.com/bamarni/composition) - A library to check your Composer environment at runtime.
* [Version](https://github.com/herrera-io/php-version) - A parsing and comparison library for semantic versioning.
* [NameSpacer](https://github.com/ralphschindler/Namespacer) - A library to convert from underscores to namespaces.
* [Patch Installer](https://github.com/goatherd/patch-installer) - A library to install patches using Composer.
* [Composer Checker](https://github.com/silpion/composer-checker) - A tool to validate Composer configurations.

## Frameworks
*Web development frameworks.*

* [Symfony 2](http://symfony.com/) - A framework comprised of individual components (SF2).
* [Zend Framework 2](http://framework.zend.com) - Another framework comprised of individual components (ZF2).
* [Laravel 5](http://laravel.com/) - Another PHP framework (L5).
* [Yii2](https://github.com/yiisoft/yii2/) - Another PHP framework.
* [CakePHP](http://cakephp.org/) - A rapid application development framework.

## Framework Extras
*Extras related to web development frameworks.*

* [Symfony CMF](https://github.com/symfony-cmf/symfony-cmf) - A Content Management Framework to create custom CMS.
* [Knp RAD Bundle](http://rad.knplabs.com/) - A Rapid Application Development (RAD) bundle for Symfony 2.

## Components
*Standalone component from web development frameworks and development groups.*

* [Symfony2 Components](http://symfony.com/doc/master/components/index.html) - The components that make Symfony 2.
* [Zend Framework 2 Components](https://packages.zendframework.com/) - The components that make Zend Framework.
* [Aura Components](http://auraphp.github.com/) - A package of PHP 5.4 components.
* [Hoa Project](http://hoa-project.net/En/) - Another package of PHP components.
* [League of Extraordinary Packages](https://thephpleague.com/) - A PHP package development group.

## Micro Frameworks
*Micro frameworks and routers.*

* [Silex](http://silex.sensiolabs.org/) - A micro framework built around Symfony2 components.
* [Slim](http://www.slimframework.com/) - Another simple micro framework.
* [Bullet PHP](http://bulletphp.com/) - A micro framework for building REST APIs.
* [Lumen](http://lumen.laravel.com) - A micro-framework by Laravel.
* [Fast Route](https://github.com/nikic/FastRoute) - A fast routing library.
* [Pux](https://github.com/c9s/Pux) - Another fast routing library.
* [Proton](https://github.com/alexbilbie/Proton) - A StackPHP compatible micro framework

## Micro Framework Extras
*Extras related to micro frameworks and routers.*

* [Silex Skeleton](https://github.com/fabpot/Silex-Skeleton) - A project skeleton for Silex.
* [Silex Web Profiler](https://github.com/silexphp/Silex-WebProfiler) - A web debug toolbar for Silex.
* [Slim Skeleton](https://github.com/codeguy/Slim-Skeleton) - A skeleton for Slim.
* [Slim View](https://github.com/codeguy/Slim-Views) - A collection of custom views for Slim.

## Routers
*Libraries for handling application routing.*
* [Fast Route](https://github.com/nikic/FastRoute) - A fast routing library.
* [Pux](https://github.com/c9s/Pux) - Another fast routing library.

## Static Site Generators
*Tools for pre-processing content to generate web pages.*

* [Sculpin](http://sculpin.io) - A tool that converts Markdown and Twig into static HTML.
* [Phrozn](http://phrozn.info) - Another tool that converts Textile, Markdown and Twig into HTML.

## HTTP
*Libraries for working with HTTP and scraping websites.*

* [Guzzle]( https://github.com/guzzle/guzzle) - A comprehensive HTTP client.
* [Buzz](https://github.com/kriswallsmith/Buzz) - Another HTTP client.
* [Requests](https://github.com/rmccue/Requests) - A simple HTTP library.
* [HTTPFul](https://github.com/nategood/httpful) - A chainable HTTP client.
* [Goutte](https://github.com/fabpot/Goutte) - A simple web scraper.
* [PHP VCR](http://php-vcr.github.io/) - A library for recording and replaying HTTP requests.

## Middlewares
*Libraries for building application using middlewares.*

* [Stack](https://github.com/stackphp) - A library of stackable middleware for Silex/Symfony.
* [Slim Middleware](https://github.com/codeguy/Slim-Middleware) - A collection of custom middleware for Slim.
* [Conduit](https://github.com/phly/conduit) - A port of [Sencha Connect](https://github.com/senchalabs/connect) to PHP.

## URL
*Libraries for parsing URLs.*

* [Purl](https://github.com/jwage/purl) - A URL manipulation library.

## Email
*Libraries for sending and parsing email.*

* [PHPMailer](https://github.com/PHPMailer/PHPMailer) - Another mailer solution.

## Files
*Libraries for file manipulation and MIME type detection.*

* [Gaufrette](https://github.com/KnpLabs/Gaufrette) - A filesystem abstraction layer.
* [Flysystem](https://github.com/thephpleague/flysystem) - Another filesystem abstraction layer.
* [PHP FFmpeg](https://github.com/alchemy-fr/PHP-FFmpeg/) - A wrapper for the [FFmpeg](http://www.ffmpeg.org/) video library.
* [CSV](https://github.com/thephpleague/csv) - A CSV data manipulation library.

## Streams
*Libraries for working with streams.*

* [Streamer](https://github.com/fzaninotto/Streamer) - A simple object-orientated stream wrapper library.

## Dependency Injection
*Libraries that implement the dependency injection design pattern.*

* [Pimple](http://pimple.sensiolabs.org/) - A tiny dependency injection container.
* [Auryn](https://github.com/rdlowrey/Auryn) - Another dependency injection container.
* [Container](https://github.com/thephpleague/container) - Another flexible dependency injection container.
* [PHP-DI](http://php-di.org/) - A dependency injection container that supports autowiring.
* [Acclimate](https://github.com/jeremeamia/acclimate) - A common interface to dependency injection containers and service locators.
* [Symfony DI](https://github.com/symfony/DependencyInjection) - A dependency injection container component (SF2).

## Imagery
*Libraries for manipulating images.*

* [Intervention Image](https://github.com/Intervention/image) - Another image manipulation library.
* [Glide](https://github.com/thephpleague/glide) - An on-demand image manipulation library.

## Testing
*Libraries for testing codebases and generating test data.*

* [PHPUnit](https://github.com/sebastianbergmann/phpunit) - A unit testing framework.
* [DBUnit](https://github.com/sebastianbergmann/dbunit) - A database testing library for PHPUnit.
* [PHPSpec](https://github.com/phpspec/phpspec) - A design by specification unit testing library.
* [Atoum](https://github.com/atoum/atoum) - A simple testing library.
* [Mockery](https://github.com/padraic/mockery) - A mock object library for testing.

## Continuous Integration
*Libraries and applications for continuous integration.*

* [Travis CI](https://travis-ci.org/) - A continuous integration platform.
* [SemaphoreCI](https://semaphoreapp.com/) - A continuous integration platform for open source and private projects.
* [PHPCI](http://www.phptesting.org/) - An open source continuous integration platform for PHP.
* [Sismo](http://sismo.sensiolabs.org/) - A continuous testing server library.
* [Jenkins](http://jenkins-ci.org/) - A continous integration platform with [PHP support](http://jenkins-php.org/index.html).
* [JoliCi](https://github.com/jolicode/JoliCi) - A continuous integration client written in PHP and powered by Docker.

## Documentation
*Libraries for generating project documentation.*

* [PHP Documentor 2](https://github.com/phpDocumentor/phpDocumentor2) - A documentation generator.

## Security
*Libraries for generating secure random numbers, encrypting data and scanning for vulnerabilities.*

* [HTML Purifier](https://github.com/ezyang/htmlpurifier) - A standards compliant HTML filter.
* [IniScan](https://github.com/psecio/iniscan) - A tool that scans PHP INI files for security.
* [Zed](https://www.owasp.org/index.php/OWASP_Zed_Attack_Proxy_Project) - An integrated penetration testing tool for web applications.

## Passwords
*Libraries and tools for working with and storing passwords.*

* [Password Compat](https://github.com/ircmaxell/password_compat) - A compatibility library for the new PHP 5.5 password functions.

## Architectural
*Libraries related to design patterns, programming approaches and ways to organize code.*

* [PHP Option](https://github.com/schmittjoh/php-option) - An option type library.
* [Ruler](https://github.com/bobthecow/Ruler) - A simple stateless production rules engine.
* [Finite](http://yohan.giarel.li/Finite) - A simple PHP finite state machine.
* [Compose](https://github.com/igorw/compose) - A function composition library.
* [Monad PHP](https://github.com/ircmaxell/monad-php) - A simple Monad library.
* [Patchwork](http://antecedent.github.io/patchwork/) - A library for redefining userland functions.
* [Galapagos](https://github.com/endel/galapagos) - Evolutionary language transformation.
* [Design Patterns PHP](https://github.com/domnikl/DesignPatternsPHP) - A repository of software patterns implemented in PHP.
* [Functional PHP](https://github.com/lstrojny/functional-php) - A functional programming library.
* [Lib Accessor](https://github.com/phine/lib-accessor) - A library for simplifying accessors.
* [Iter](https://github.com/nikic/iter) - A library that provides iteration primitives using generators.

## Debugging and Profiling
*Libraries and tools for debugging and profiling code.*

* [xDebug](https://github.com/xdebug/xdebug) - A debug and profile tool for PHP.
* [Blackfire.io](http://blackfire.io) - A low-overhead code profiler.

## Build Tools
*Project build and automation tools.*

* [Go](https://github.com/herrera-io/php-go) - A simple PHP build tool.
* [Bob](https://github.com/CHH/bob) - A simple project automation tool.
* [Phake](https://github.com/jaz303/phake) - A rake PHP clone library.
* [Box](https://github.com/kherge/Box) - A utility to build PHAR files.
* [Phing](http://www.phing.info/) - A PHP project build system inspired by Apache Ant.

## Task Runners
*Libraries for automating and running tasks.*
* [Task](http://taskphp.github.io/) - A pure PHP task runner inspired by Grunt and Gulp.
* [Robo](https://github.com/Codegyre/Robo) - A PHP Task runner with object-orientated configurations.
* [Bldr](http://bldr.io/) - A PHP Task runner built on Symfony components.

## Navigation
*Tools for building navigation structures.*

* [KnpMenu](https://github.com/KnpLabs/KnpMenu) - A menu library.
* [Cartographer](https://github.com/tackk/cartographer) - A sitemap generation library.

## Asset Management
*Tools for managing, compressing and minifying website assets.*

* [Assetic](https://github.com/kriswallsmith/assetic) - An asset manager pipeline library.
* [Pipe](https://github.com/CHH/pipe) - Another asset manager pipeline library.
* [Munee](https://github.com/meenie/munee) - An asset optimiser library.
* [JShrink](https://github.com/tedivm/JShrink) - A JavaScript minifier library.
* [Puli](https://github.com/webmozart/puli) - A library for determining assets absolute paths.

## Geolocation
*Libraries for geocoding addresses and working with latitudes and longitudes.*

* [GeoCoder](http://geocoder-php.org/) - A geocoding library.
* [GeoTools](https://github.com/php-loep/Geotools) - A library of geo-related tools.
* [PHPGeo](https://github.com/mjaschen/phpgeo) - A simple geo library.
* [GeoJSON](https://github.com/jmikola/geojson) - A GeoJSON implementation.

## Date and Time
*Libraries for working with dates and times.*

* [Carbon](https://github.com/briannesbitt/Carbon) - A simple DateTime API extension.
* [ExpressiveDate](https://github.com/jasonlewis/expressive-date) - Another DateTime API extension.
* [CalendR](http://yohan.giarel.li/CalendR) - A calendar management library.

## Event
*Libraries that are event-driven or implement non-blocking event loops.*

* [React](https://github.com/reactphp/react) - An event driven non-blocking I/O library.
* [Rx.PHP](https://github.com/asm89/Rx.PHP) - A reactive extension library.
* [Ratchet](https://github.com/cboden/Ratchet) - A web socket library.
* [Hoa WebSocket](https://github.com/hoaproject/Websocket) - Another web socket library.
* [Elephant.io](https://github.com/Wisembly/Elephant.io) - Yet another web socket library.
* [Hoa EventSource](https://github.com/hoaproject/Eventsource) - An event source library.
* [Evenement](https://github.com/igorw/evenement) - An event dispatcher library.
* [Event](https://github.com/thephpleague/event) - An event library with a focus on domain events.
* [Broadway](https://github.com/qandidate-labs/broadway) - An event source and CQRS library.

## Logging
*Libraries for generating and working with log files.*

* [Monolog](https://github.com/Seldaek/monolog) - A comprehensive logger.
* [KLogger](https://github.com/katzgrau/KLogger) - An easy-to-use PSR-3 compliant logging class.
* [Analog](https://github.com/jbroadway/analog) - A closure-based micro logging package.

## E-commerce
*Libraries and applications for taking payments and building online e-commerce stores.*

* [OmniPay](https://github.com/thephpleague/omnipay) - A framework agnostic multi-gateway payment processing library.
* [Payum](https://github.com/payum/payum) - A payment abstraction library.
* [Sylius](http://www.sylius.org/) - An open source e-commerce solution.
* [Thelia](http://thelia.net/v2/) - Another open source e-commerce solution.
* [Money](https://github.com/mathiasverraes/money) - A PHP implementation of Fowler's money pattern.
* [Sebastian Money](https://github.com/sebastianbergmann/money) - Another library for working with monetary values.
* [Swap](https://github.com/florianv/swap) - An exchange rates library.

## PDF
*Libraries and software for working with PDF files.*

* [Snappy](https://github.com/KnpLabs/snappy) - A PDF and image generation library.
* [WKHTMLToPDF](https://github.com/antialize/wkhtmltopdf) - A tool to convert HTML to PDF.
* [PHPPdf](https://github.com/psliwa/PHPPdf) - A library for generating PDFs and images from XML.

## Office
*Libraries for working with office suite documents.*

* [PHPWord](https://github.com/PHPOffice/PHPWord) - A library for working with Microsoft Word documents.
* [PHPExcel](https://github.com/PHPOffice/PHPExcel) - A library for working with Microsoft Excel documents.
* [PHPPowerPoint](https://github.com/PHPOffice/PHPPowerPoint) - A library for working with Microsoft Word documents.
* [ExcelAnt](https://github.com/Wisembly/ExcelAnt) - A library for manipulating Microsoft Excel documents.

## Database
*Libraries for interacting with databases using object-relational mapping (ORM) or datamapping techniques.*

* [Doctrine](http://www.doctrine-project.org/) - A comprehensive DBAL and ORM.
* [Doctrine Extensions](https://github.com/l3pp4rd/DoctrineExtensions) - A collection of Doctrine behavioural extensions.
* [Propel](http://www.propelorm.org/) - A fast ORM, migration library and query builder.
* [Eloquent](https://github.com/illuminate/database) - A simple ORM (L5).
* [Baum](https://github.com/etrepat/baum) - A nested set implementation for Eloquent.
* [Spot2](https://github.com/vlucas/spot2) - A MySQL datamapper ORM.
* [RedBean](http://redbeanphp.com/) - A lightweight, configuration-less ORM.
* [Pomm](https://github.com/chanmix51/Pomm) - An Object Model Manager for PostgreSQL.
* [ProxyManager](https://github.com/Ocramius/ProxyManager) - A set of utilities to generate proxy objects for data mappers.

## Migrations
Libraries to help manage database schemas and migrations.

* [PHPMig](https://github.com/davedevelopment/phpmig) - Another migration management library.
* [Phinx](https://github.com/robmorgan/phinx) - Another database migration library.
* [Migrations](https://github.com/icomefromthenet/Migrations) - A migration management library.
* [Doctrine Migrations](http://docs.doctrine-project.org/projects/doctrine-migrations/en/latest/toc.html) - A migration library for Doctrine.

## NoSQL
*Libraries for working with "NoSQL" backends.*

* [MongoQB](https://github.com/alexbilbie/MongoQB) - A MongoDB query builder library.
* [Monga](https://github.com/thephpleague/monga) - A MongoDB abstraction library.
* [Predis](https://github.com/nrk/predis) - A feature complete Redis library.

## Queue
*Libraries for working with event and task queues.*

* [Pheanstalk](https://github.com/pda/pheanstalk) - A Beanstalkd client library.
* [PHP AMQP](https://github.com/videlalvaro/php-amqplib) - A pure PHP AMQP library.
* [Thumper](https://github.com/videlalvaro/Thumper) - A RabbitMQ pattern library.
* [Bernard](https://github.com/bernardphp/bernard) - A multibackend abstraction library.

## Search
*Libraries and software for indexing and performing search queries on data.*

* [ElasticSearch PHP](https://github.com/elasticsearch/elasticsearch-php) - The official client library for [ElasticSearch](http://www.elasticsearch.org/).
* [Elastica](https://github.com/ruflin/Elastica) - A client library for ElasticSearch.
* [Solarium](http://www.solarium-project.org/) - A client library for [Solr](http://lucene.apache.org/solr/).
* [SphinxQL query builder](http://foolcode.github.io/SphinxQL-Query-Builder/) - A query library for the [Sphinx](http://sphinxsearch.com/) search engine.

## Command Line
*Libraries related to the command line.*

* [Boris](https://github.com/d11wtq/boris) - A tiny PHP REPL.
* [PsySH](https://github.com/bobthecow/psysh) - Another PHP REPL.
* [Commando](https://github.com/nategood/commando) - Another simple command line opt parser.
* [Cron Expression](https://github.com/mtdowling/cron-expression) - A library to calculate cron run dates.
* [ShellWrap](https://github.com/MrRio/shellwrap) - A simple command line wrapper library.
* [CLImate](https://github.com/thephpleague/climate) - A library for outputting colours and special formatting.

## Authentication and Authorization
*Libraries for implementing user authentication and authorization.*

* [Sentry](https://github.com/cartalyst/sentry) - A framework agnostic authentication & authorisation library.
* [OAuth2 Server](http://oauth2.thephpleague.com/) - An OAuth2 authentication server, resource server and client library.
* [OAuth2 Server](http://bshaffer.github.io/oauth2-server-php-docs/) - Another OAuth2 server implementation.
* [HybridAuth](https://github.com/hybridauth/hybridauth) - An open source social sign on library.

## Markup
*Libraries for working with markup.*

* [PHP Markdown](https://github.com/michelf/php-markdown) - A Markdown parser.
* [Parsedown](https://github.com/erusev/parsedown) - Another Markdown parser.

## Strings
*Libraries for parsing and manipulating strings.*

* [Stringy](https://github.com/danielstjules/Stringy) - A string manipulation library with multibyte support.
* [UUID](https://github.com/ramsey/uuid) - A library for generating UUIDs.
* [Slugify](https://github.com/cocur/slugify) - A library to convert strings to slugs.
* [UA Parser](https://github.com/tobie/ua-parser/tree/master/php) - A library for parsing user agent strings.
* [Mobile-Detect](https://github.com/serbanghita/Mobile-Detect) - A lightweight PHP class for detecting mobile devices (including tablets).

## Numbers
*Libraries for working with numbers.*

* [Numbers PHP](https://github.com/powder96/numbers.php) - A library for working with numbers.

## Filtering and Validation
*Libraries for filtering and validating data.*

* [Respect Validate](https://github.com/Respect/Validation) - A simple validation library.
* [Upload](https://github.com/codeguy/Upload) - A library for handling file uploads and validation.


## API
*Libraries and web tools for developing APIs.*

* [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator) - A tool to generate PHP classes from SOAP WSDL files.

## Caching
*Libraries for caching data.*

* [Alternative PHP Cache (APC)](http://www.php.net/manual/en/book.apc.php) - Open opcode cache for PHP.
* [Doctrine Cache](https://github.com/doctrine/cache) - A caching library.
* [Stash](https://github.com/tedivm/Stash) - Another library for caching.

## Data Structure and Storage
*Libraries that implement data structure or storage techniques.*

* [Serializer](https://github.com/schmittjoh/serializer) - A library for serialising and de-serialising data.
* [Fractal](https://github.com/php-loep/fractal) - A library for converting complex data structures to JSON output.

## Notifications
*Libraries for working with notification software.*

* [Notification Pusher](https://github.com/Ph3nol/NotificationPusher) - A standalone library for device push notifications.

## Deployment
*Libraries for project deployment.*

* [Envoy](https://github.com/laravel/envoy) - A tool to run SSH tasks with PHP.

## Internationalisation and Localisation
*Libraries for Internationalization (I18n) and Localization (L10n).*

* [Aura Intl](https://github.com/auraphp/Aura.Intl)

## Third Party APIs
*Libraries for accessing third party APIs.*

* [Github](https://github.com/dsyph3r/github-api3-php) - A library to interface with the Github API.
* [PHP Github API](https://github.com/KnpLabs/php-github-api) - Another library to interface with the Github API.
* [Dropbox SDK](https://github.com/dropbox/dropbox-sdk-php) - The official PHP Dropbox SDK library.

## Miscellaneous
*Useful libraries or tools that don't fit in the categories above.*

* [Sabre VObject](https://github.com/fruux/sabre-vobject) - A library for parsing VCard and iCalendar objects.
* [Whoops](https://github.com/filp/whoops) - A pretty error handling library.
* [SuperClosure](https://github.com/jeremeamia/super_closure) - A library that allows Closures to be serialized.
* [Underscore](http://anahkiasen.github.io/underscore-php/) - A PHP port of the Underscore JS library.
* [Essence](https://github.com/felixgirault/essence) - A library for extracting web media.获取youtube等视频信息

# Software
*Software for creating a development environment.*

## PHP Installation
*Tools to help install and manage PHP on your computer.*

* [HomeBrew](http://mxcl.github.com/homebrew/) - A package manager for OSX.
* [HomeBrew PHP](https://github.com/josegonzalez/homebrew-php) - A PHP tap for HomeBrew.
* [PHP OSX](http://php-osx.liip.ch/) - A PHP installer for OSX.
* [PHP Brew](https://github.com/c9s/phpbrew) - A PHP version manager and installer.

## Development Environment
*Software and tools for creating a sandboxed development environment.*

* [Vagrant](http://www.vagrantup.com/) - A portable development environment utility.
* [Puppet](http://puppetlabs.com/) - A server automation framework and application.
* [PuPHPet](https://puphpet.com/) - A web tool for building PHP development virtual machines.

# Resources
Various resources, such as books, websites and articles, for improving your PHP development skills and knowledge.

## PHP Websites
*Useful PHP-related websites.*

* [PHP Best Practices](http://phpbestpractices.org/) - A PHP best practice guide.
* [PHP Weekly](http://www.phpweekly.com/archive.html) - A weekly PHP newsletter.
* [Securing PHP](http://securingphp.com/) - A newsletter about PHP security and library recommendations.
* [PHP Security](http://phpsecurity.readthedocs.org/en/latest/index.html) - A guide to PHP security.
* [PHP FIG](http://www.php-fig.org/) - The PHP Framework Interoperability Group.

## Other Websites
*Useful websites related to web development.*

* [The Open Web Application Security Project (OWASP)](https://www.owasp.org/index.php/Main_Page) - An open software security community.
* [Atlassian Git Tutorials](https://www.atlassian.com/git) - A series of Git tutorials.
* [Servers for Hackers](http://serversforhackers.com/) - A newsletter about server management.

## Other Books
*Books related to general computing and web development.*

* [Elasticsearch: The Definitive Guide](http://www.elasticsearch.org/guide/) - A guide to working with Elasticsearch by Clinton Gormley and Zachary Tong.
* [Eloquent JavaScript](http://eloquentjavascript.net/) - A book about JavaScript programming by Marijn Haverbeke.
* [Vagrant Cookbook](https://leanpub.com/vagrantcookbook) - A book about creating Vagrant environments by Erika Heidi.
* [Pro Git](http://git-scm.com/book/en/v2) - A book about Git by Scott Chacon and Ben Straub.

## PHP Reading
*PHP-releated reading materials.*

* [Create Your Own PHP Framework](http://symfony.com/doc/current/create_framework/index.html) - A series of articles on how to make your own PHP framework by Fabien Potencier.
