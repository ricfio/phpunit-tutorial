# PHPUnit Tutorial

## Tutorial tags:  

### Getting Started with PHPUnit 9
- 1.0: [Getting Started with PHPUnit 9](https://phpunit.de/getting-started/phpunit-9.html)

### 2. Writing Tests for PHPUnit

#### Test Dependencies
- 2.1: [Example 2.1 Testing array operations with PHPUnit](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-examples-stacktest-php)
- 2.2: [Example 2.2 Using the @depends annotation to express dependencies](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-examples-stacktest2-php)
- 2.3: [Example 2.3 Exploiting the dependencies between tests](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-examples-dependencyfailuretest-php)
- 2.4: [Example 2.4 Test with multiple dependencies](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-examples-multipledependencies-php)
- 2.5: [Example 2.5 Using a data provider that returns an array of arrays](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers-examples-datatest-php)
- 2.6: [Example 2.6 Using a data provider with named datasets](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers-examples-datatest1-php)
- 2.7: [Example 2.7 Using a data provider that returns an Iterator object](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers-examples-datatest2-php)
- 2.8: [Example 2.8 The CsvFileIterator class](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers-examples-csvfileiterator-php)
- 2.9: [Example 2.9 Combination of @depends and @dataProvider in same test](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers-examples-dependencyanddataprovidercombo-php)
- 2.10: [Example 2.10 Using multiple data providers for a single test](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers-examples2-datatest-php)

#### Testing Exceptions
- 2.11: [Example 2.11 Using the expectException() method](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-exceptions-examples-exceptiontest-php)

#### Testing PHP Errors, Warnings, and Notices
- 2.12: [Example 2.12 Expecting PHP errors, warnings, and notices](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-exceptions-examples-errortest-php)
- 2.13: [Example 2.13 Testing return values of code that uses PHP Errors](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-exceptions-examples-triggererrorreturnvalue-php)

#### Testing Output
- 2.14: [Example 2.14 Testing the output of a function or method](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-output-examples-outputtest-php)

#### Error output
- 2.15: [Example 2.15 Error output generated when an array comparison fails](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-error-output-examples-arraydifftest-php)
- 2.16: [Example 2.16 Error output when an array comparison of an long array fails](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-error-output-examples-longarraydifftest-php)

#### Edge Cases
- 2.17: [Example 2.17 Edge case in the diff generation when using weak comparison](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-error-output-edge-cases-examples-arrayweakcomparisontest-php)

### 3. The Command-Line Test Runner

#### Command-Line Options
- 3.1: [Example 3.1 Named data sets](https://phpunit.readthedocs.io/en/9.5/textui.html#textui-examples-testcaseclass-php)

### 4. Fixtures
- 4.1: [Example 4.1 Using setUp() to create the stack fixture](https://phpunit.readthedocs.io/en/9.5/fixtures.html#fixtures-examples-stacktest-php)
- 4.2: [Example 4.2 Example showing all template methods available](https://phpunit.readthedocs.io/en/9.5/fixtures.html#fixtures-examples-templatemethodstest-php)
- 4.3: [Example 4.3 Sharing fixture between the tests of a test suite](fixtures-sharing-fixture-examples-databasetest-php)

### 7. Incomplete and Skipped Tests

#### Incomplete Tests
- 7.1: [Example 7.1 Marking a test as incomplete](https://phpunit.readthedocs.io/en/9.5/incomplete-and-skipped-tests.html#incomplete-and-skipped-tests-incomplete-tests-examples-sampletest-php)

#### Skipping Tests
- 7.2: [Example 7.2 Skipping a test](https://phpunit.readthedocs.io/en/9.5/incomplete-and-skipped-tests.html#incomplete-and-skipped-tests-skipping-tests-examples-databasetest-php)

## Prerequisites
- [VS Code](https://code.visualstudio.com/docs/setup/windows)
- [Docker Desktop on Windows](https://docs.docker.com/docker-for-windows/install/)
- [Windows Subsystem for Linux](https://docs.microsoft.com/windows/wsl) (Ubuntu 20.04 LTS)
- [Windows Terminal](https://docs.microsoft.com/en-us/windows/terminal/get-started) (Recommended but not required)

## Setup
Clone from the repository:  
`git clone https://github.com/ricfio/phpunit-tutorial.git`  

 1. Open project folder WSL from VSCode  
_Remote WSL: Open Folder in WSL..._  
 2. Add Development Container  
_Remote-Containers: Add Development Container Configuration Files..._ > _PHP_ > 8_  
 3. Reopen in Container  
_Remote-Containers: Reopen in Container_
 4. Check Installed Extensions (CTRL + SHIFT + X)  
_PHP Debug (1.14.11)_  
_PHP Intelephense (1.6.3)_  
 5. Open bash  
_Terminal_ > _New Terminal_
 6. Create folders: www, www/src, www/tests  
`mkdir -p www/src && mkdir -p www/tests && cd www`  
 7. Add PHPUnit as development-time dependency  
`composer require --dev phpunit/phpunit`  
`./vendor/bin/phpunit --version`  

## Run Tests  
- `composer dump-autoload`  
- `./vendor/bin/phpunit tests --testdox`  
- `./vendor/bin/phpunit tests`  
- `./vendor/bin/phpunit tests/EmailTest.php`  
- `./vendor/bin/phpunit tests/StackTest.php`  
- `./vendor/bin/phpunit tests/DependencyFailureTest.php`  
- `./vendor/bin/phpunit tests/MultipleDependenciesTest.php`  
- `./vendor/bin/phpunit tests/DataTest.php`  
- `./vendor/bin/phpunit tests/DependencyAndDataProviderComboTest.php`  
- `./vendor/bin/phpunit tests/ExceptionTest.php`  
- `./vendor/bin/phpunit tests/ErrorTest.php`  
- `./vendor/bin/phpunit tests/ErrorSuppressionTest.php`  
- `./vendor/bin/phpunit tests/OutputTest.php`  
- `./vendor/bin/phpunit tests/ArrayDiffTest.php`  
- `./vendor/bin/phpunit tests/LongArrayDiffTest.php`  
- `./vendor/bin/phpunit tests/ArrayWeakComparisonTest.php`  
- `./vendor/bin/phpunit tests/TestCaseClass.php`  
- `./vendor/bin/phpunit tests/TemplateMethodsTest.php`  
- `./vendor/bin/phpunit tests/DatabaseTest.php`  
- `./vendor/bin/phpunit tests/SampleTest.php`  

## References
* [PHPUnit](https://phpunit.de/)
* [PHPUnit Manual](https://phpunit.readthedocs.io/en/9.5/)  
