<?php

require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel( 'dev', true );

// this check prevents access to dev front controllers that are deployed by accident to production servers.
if ( $kernel->isProductionServer() )
{
	header('HTTP/1.0 403 Forbidden');
	exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

$kernel->loadClassCache();
$kernel->handle(Request::createFromGlobals())->send();
