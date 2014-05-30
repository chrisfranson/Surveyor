<?php

header("Content-type: text/css");

$page_type = $_GET['page_type'];
$module = $_GET['module'];

$system_path = 'system/codeigniter';

define('BASEPATH', str_replace("\\", "/", $system_path));

define('PYRO_DEVELOPMENT', 'development');
define('PYRO_STAGING', 'staging');
define('PYRO_PRODUCTION', 'production');
define('ENVIRONMENT', (isset($_SERVER['PYRO_ENV']) ? $_SERVER['PYRO_ENV'] : PYRO_DEVELOPMENT));

require '../../../../../system/cms/config/database.php';

$db = $db[ENVIRONMENT];

$mysqli = new mysqli($db['hostname'], $db['username'], $db['password'], $db['database']);
$result = $mysqli->query("SELECT `slug`, `value` FROM `default_theme_options` WHERE `slug` IN ('bootstrap_theme', 'sitewide_css')");

if ($result) while($row = mysqli_fetch_array($result)) $theme_options[$row['slug']] = $row['value'];


echo file_get_contents('reset.css');
echo file_get_contents('themes/' . $theme_options['bootstrap_theme'] . '.css');
echo file_get_contents('global.css');
echo file_get_contents('footer.css');
echo file_get_contents('pages/page.css');

if (!empty($page_type)):
	$layout_css_file = './pages/' . $page_type . '.css';
	if (file_exists($layout_css_file)):
		file_get_contents($layout_css_file);
	endif;
endif;

echo $theme_options['sitewide_css'];

if ($module == 'blog')
{
	echo <<<css

body.cke_editable {
	padding: 20px;
}

css;
}

$mysqli->close();