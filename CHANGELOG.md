#Teknoo Software - Sellsy client library - Change Log

###[2.0.0-beta1] - 2017-08-01
###Updated
- Update dev libraries used for this project and use now PHPUnit 6.2 for tests.

###[2.0.0-alpha4] - 2017-07-24
###Fix
- Fixing a missing return call on Uri PSR7 instance on the Client #4 (Thanks to @gouaille)

###[2.0.0-alpha3] - 2017-02-15
###Fix
- Code style fix
- License file follow Github specs
- Add tools to checks QA, use `make qa` and `make test`, `make` to initalize the project, (or `composer update`).
- Update Travis to use this tool
- Fix QA Errors

##[2.0.0-alpha2] - 2016-12-30
###Updated
- Add an helper into collection to execute directly method without use "{}" in PHP.

##[2.0.0-alpha1] - 2016-12-30
- First release on new version

###Updated
- New management of Collections and Methods with dedicated class, used as proxy to configure the client.
- Refactoring client to be simpler and the library architecture to facilitating future developments.
- Refactoring of tests.

###Added
- Support of PSR-7 and by default this library is provided with Guzzle.
- Transport behavior, build on PSR-7, to customize Sellsy's requests.
- Result interface to encapsulate Sellsy's return.
- A front class, used to generate automatically client and collections instance to perform naturally requests to Sellsy.

###Removed
- Dependency to Teknoo/curl-request.
- Remove Generator.

##[1.0.6] - 2016-08-04
###Fixed
- Improve optimization on call to native function and optimized

##[1.0.5] - 2016-07-26
###Fixed
- Fix code style with cs-fixer

###Updated
- Improve documentation and add API Doc

##[1.0.4] - 2016-04-09
###Fixed
- Fix code style with cs-fixer

##[1.0.3] - 2016-02-02
###Fixed
- Fix composer minimum requirements

##[1.0.2] - 2016-01-27
###Fixed
- Clean .gitignore

##[1.0.1] - 2015-10-27
###Changed
- Migrate from Uni Alteri Organization to Teknoo Software

##[1.0.0] - 2015-08-23
###Fixed
- Documentation

##[0.8.3-RC] - 2015-05-24
###Added
- Add travis file to support IC outside Uni Alteri's server

##[0.8.2-beta] - 2015-05-06
###Fixed
- Code style fixe
- Wrong parameter for exception - Github issue #1

##[0.8.1-beta] - 2015-03-06
###Changed
- Update composer requirements
- Update documentation

##[0.8.0-beta] - 2015-02-20
###Fixed
- Constructor arguments are not mandatory
- Several bugs in query processing
- Code style

###Changed
- Use default array notation to be compliant with PHp 5.3

###Added
- Documentation
- Tests
- Client generator

##[0.1.1] - 2015-02-06
###Added
- Methods to update client configuration
- Methods collection like on the Sellsy API.

##[0.1.0.0] - 2015-02-06
- Initial version of this library

###Changed
- Fork from official Sellsy library 
- Redesign of this library
- Fix issues and guidelines violations

###Added
- Composer
- Uni Alteri cUrl Request library instead of cUrl extension.
