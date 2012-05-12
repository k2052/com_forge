<?php            

# $path = dirname(dirname(dirname(dirname(dirname(__FILE__)))));  
$path = '/Users/kenerickson/Sites/forgesandbox';

// We are a valid Joomla entry point.
define('_JEXEC', 1);

// Setup the path related constants.
if(!defined('DS'))
  define('DS', DIRECTORY_SEPARATOR);
  
define('JPATH_BASE',	$path);

define('JPATH_ROOT',			JPATH_BASE);
define('JPATH_SITE',			JPATH_ROOT);
define('JPATH_CONFIGURATION',	JPATH_ROOT);
define('JPATH_ADMINISTRATOR',	JPATH_ROOT . '/administrator');
define('JPATH_LIBRARIES',		JPATH_ROOT . '/libraries');
define('JPATH_PLUGINS',			JPATH_ROOT . '/plugins'  );
define('JPATH_INSTALLATION',	JPATH_ROOT . '/installation');
define('JPATH_THEMES',			JPATH_BASE . '/templates');
define('JPATH_CACHE',			JPATH_BASE . '/cache');
define('JPATH_MANIFESTS',		JPATH_ADMINISTRATOR . '/manifests');

// Load the library importer.
require_once JPATH_BASE.'/includes/framework.php';    

// Import library dependencies.
jimport('joomla.application.application');
jimport('joomla.utilities.utility');
jimport('joomla.language.language');
jimport('joomla.utilities.string');     

if(!defined('FORGE_TMP_PATH'))
  define('FORGE_TMP_PATH', JPATH_ROOT.DS.'tmp'.DS.'forge');