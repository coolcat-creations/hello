<?php
use Joomla\CMS\Factory;

defined('_JEXEC') or die;

JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));

$app = Factory::getApplication();
$params = $app->getTemplate(true)->params;
$logo = $params->get('logoBild');
$logotext = $params->get('logoText');

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
</head>
<body>
<div class="container">
	<jdoc:include type="modules" name="menu" style="xhtml"/>

	<?php if($logo || $logotext) : ?>
		<a href="#" class="logo">
			<?php if($logo) : ?>
				<img src="<?php echo $logo; ?>" alt="logo">
			<?php else : ?>
				<?php echo $logotext; ?>
			<?php endif;?>
		</a>
	<?php endif; ?>


	<main>
		<jdoc:include type="component" />
	</main>

	<jdoc:include type="modules" name="aside" style="xhtml"/>
	<jdoc:include type="modules" name="footer" style="xhtml"/>

</div>
</body>
</html>
