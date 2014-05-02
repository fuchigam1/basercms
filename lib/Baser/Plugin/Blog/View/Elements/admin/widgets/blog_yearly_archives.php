<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ブログ年別アーカイブ一覧ウィジェット設定
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2013, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2013, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Blog.View
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$title = '年別アーカイブ一覧';
$description = 'ブログの年別アーカイブー一覧を表示します。';
?>


<?php echo $this->BcForm->label($key . '.limit', '表示数') ?>&nbsp;
<?php echo $this->BcForm->input($key . '.limit', array('type' => 'text', 'size' => 6, 'default' => null)) ?>&nbsp;件<br />
<?php echo $this->BcForm->label($key . '.view_count', '記事数表示') ?>&nbsp;
<?php echo $this->BcForm->input($key . '.view_count', array('type' => 'radio', 'options' => $this->BcText->booleanDoList(''), 'legend' => false, 'default' => 0)) ?><br />
<?php echo $this->BcForm->label($key . '.blog_content_id', 'ブログ') ?>&nbsp;
<?php echo $this->BcForm->input($key . '.blog_content_id', array('type' => 'select', 'options' => $this->BcForm->getControlSource('Blog.BlogContent.id'))) ?><br />
<small>ブログページを表示している場合は、上記の設定に関係なく、対象ブログの年別アーカイブ一覧を表示します。</small>