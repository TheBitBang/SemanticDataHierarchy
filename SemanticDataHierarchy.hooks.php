<?php

use SMW\PropertyRegistry;

/**
 * Hooks for Semantic Data Hierarchy extension
 *
 * @file
 * @ingroup Extensions
 */

class SemanticDataHierarchyHooks {
	
	public static function registerProperty( $id, $typeid, $label ) {
		if ( class_exists( 'SMWDIProperty' ) ) {
			SMWDIProperty::registerProperty( $id, $typeid, $label, true );
		} else {
			SMWPropertyValue::registerProperty( $id, $typeid, $label, true );
		}
	}
	
	/**
	 * Register all the special properties, in both the wiki's
	 * language and, as a backup, in English.
	 */
	public static function initProperties() {
		self::registerProperty( '___DSMW_HIERARCHY_REF_PAGEID', '_num', 'Dsmw hierarchy ref pageid' );
		self::registerProperty( '___DSMW_HIERARCHY_REF_FULLPAGENAME', '_wpg', 'Dsmw hierarchy ref fullpagename' );
		self::registerProperty( '___DSMW_HIERARCHY_REF_GROUP', '_txt', 'Dsmw hierarchy ref group' );
		self::registerProperty( '___DSMW_HIERARCHY_REF_GROUP_INSTANCE_NUMBER', '_num', 'Dsmw hierarchy ref group instance number' );
		self::registerProperty( '___DSMW_HIERARCHY_REF_PARENT_PAGENAME', '_wpg', 'Dsmw hierarchy ref parent pagename' );		
		self::registerProperty( '___DSMW_HIERARCHY_NAMESPACE', '_wpg', 'Dsmw hierarchy namespace' );
		self::registerProperty( '___DSMW_HIERARCHY_PAGENAME', '_txt', 'Dsmw hierarchy pagename' );
		self::registerProperty( '___DSMW_HIERARCHY_WEIGHT', '_num', 'Dsmw hierarchy weight' );
		self::registerProperty( '___DSMW_HIERARCHY_LANGUAGE', '_txt', 'Dsmw hierarchy language' );		
		self::registerProperty( '___DSMW_HIERARCHY_KEYWORDS', '_txt', 'Dsmw hierarchy keywords' );
		return true;
	}
}
