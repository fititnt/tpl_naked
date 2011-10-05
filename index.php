<?php
/*
 * @package         tlp_naked
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informacao.
 * @license         GNU General Public License version 3. See license.txt
 */
defined('_JEXEC') or die('Restricted access');
?>
<?php if($this->countModules('atomic-topquote')) : ?>
<jdoc:include type="modules" name="before" style="none" />
<?php endif; ?>
<jdoc:include type="message" />
<jdoc:include type="component" />
<?php if($this->countModules('atomic-topquote')) : ?>
<jdoc:include type="modules" name="after" style="none" />
<?php endif; ?>