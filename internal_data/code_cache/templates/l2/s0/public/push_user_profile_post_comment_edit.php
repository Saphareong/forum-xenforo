<?php
// FROM HASH: ec65c53933614535c547814d00431358
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'Your comment on <a href="{link}">' . $__templater->escape($__vars['extra']['postUser']) . '\'s profile post</a> was edited.' . '
';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Lý do' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	$__finalCompiled .= '
<push:url>' . $__templater->fn('base_url', array($__vars['extra']['link'], 'canonical', ), true) . '</push:url>';
	return $__finalCompiled;
});