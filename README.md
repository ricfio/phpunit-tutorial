# PHPUnit Tutorial

Tutorial tags:  
- 1.0: [Getting Started with PHPUnit 9](https://phpunit.de/getting-started/phpunit-9.html)
- 2.1: [Example 2.1 Testing array operations with PHPUnit](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-examples-stacktest-php)
- 2.2: [Example 2.2 Using the @depends annotation to express dependencies](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-examples-stacktest2-php)
- 2.3: [Example 2.3 Exploiting the dependencies between tests](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-examples-dependencyfailuretest-php)
- 2.4: [Example 2.4 Test with multiple dependencies](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-examples-multipledependencies-php)
- 2.5: [Example 2.5 Using a data provider that returns an array of arrays](https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers-examples-datatest-php)

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

## Run Tests (testDox)  
- `./vendor/bin/phpunit tests --testdox`  
- `./vendor/bin/phpunit tests/EmailTest.php --testdox`  
- `./vendor/bin/phpunit tests/StackTest.php --testdox`  
- `./vendor/bin/phpunit tests/DependencyFailureTest.php --testdox`  
- `./vendor/bin/phpunit tests/MultipleDependenciesTest.php --testdox`  
- `./vendor/bin/phpunit tests/DataTest.php --testdox`  

## References
* [PHPUnit](https://phpunit.de/)
* [PHPUnit Manual](https://phpunit.readthedocs.io/en/9.5/)  
