Symfony Standard "JWT" Edition
==============================

Welcome to the Symfony Standard JWT Edition - a fully-functional Symfony2
application that you can use as the skeleton for your new app.

For more information, see the 
[Original Standard Edition](https://github.com/symfony/symfony-standard)

1) Download the JWT Edition
---------------------------

### Clone the git Repository

Run the following commands:

    git clone http://github.com/JWT-OSS/symfony-standard-jwt project-name
    cd project-name
    rm -rf .git

2) Installation
---------------

Once you've downloaded the standard edition, installation is easy, and basically
involves making sure your system is ready for Symfony.

### a) Check your System Configuration

Copy the distribution copies of config files

    cp app/config/parameters.ini.dist app/config/parameters.ini
    cp app/config/server/local.yml.dist app/config/server/local.yml  

Before you continue, make sure that your local system is properly configured
for Symfony. To do this, execute the following:

    php app/check.php

If you get any warnings or recommendations, fix these now before moving on.

### b) Install the Vendor Libraries

Run the following:

    php bin/vendors install

Note that you **must** have git installed and be able to execute the `git`
command to execute this script. If you don't have git available, either install
it or download Symfony with the vendor libraries already included.

### c) Access the Application via the Browser

Congratulations! You're now ready to use Symfony. If you've unzipped Symfony
in the web root of your computer, then you should be able to access the
web version of the Symfony requirements check via:

    http://localhost/Symfony/web/config.php

If everything looks good, click the "Bypass configuration and go to the Welcome page"
link to load up your first Symfony page.

You can also use a web-based configurator by clicking on the "Configure your
Symfony Application online" link of the ``config.php`` page.

3) Make your first Bundle
-------------------------

Run the command:

    php app/console generate:bundle
    
And follow the prompts.