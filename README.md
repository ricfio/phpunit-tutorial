# PHPUnit Tutorial

## Tutorial for [PHPUnit](https://phpunit.de/) 9 

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
 1. ...  
`composer dump-autoload`  
 2. Run Tests  
`./vendor/bin/phpunit tests`  
 9. Run Tests as TestDoc  
`./vendor/bin/phpunit tests --testdox`  
