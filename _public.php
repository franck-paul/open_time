<?php
# ***** BEGIN LICENSE BLOCK *****
# This is a (partial) theme for Dotclear2.
# Copyright (c) 2007 Pep. (http://callmepep.org/blog/)
# 
# This is a GNU GPLv2 licensed work.
#
# ***** END LICENSE BLOCK *****

$core->addBehavior('publicPrepend',array('behaviorCafeCremeTheme','publicPrepend'));

class behaviorCafeCremeTheme
{
	public static function publicPrepend($core)
	{
		$core->themes->loadModuleL10N($GLOBALS['__theme'],$GLOBALS['_lang'],'main');
	}
}	

?>