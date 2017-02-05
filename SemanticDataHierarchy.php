<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'SemanticDataHierarchy' );
	wfWarn(
		'Deprecated PHP entry point used for SemanticDataHierarchy extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the SemanticDataHierarchy extension requires MediaWiki 1.25+' );
}

