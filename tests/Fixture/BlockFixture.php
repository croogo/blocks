<?php

namespace Croogo\Blocks\Test\Fixture;
class BlockFixture extends CroogoTestFixture {

	public $name = 'Block';

	public $fields = array(
		'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 20],
		'region_id' => ['type' => 'integer', 'null' => true, 'default' => null, 'length' => 20],
		'title' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 100],
		'alias' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 100],
		'body' => ['type' => 'text', 'null' => false, 'default' => null],
		'show_title' => ['type' => 'boolean', 'null' => false, 'default' => '1'],
		'class' => ['type' => 'string', 'null' => true, 'default' => null],
		'status' => ['type' => 'integer', 'length' => 1, 'null' => false, 'default' => '0'],
		'weight' => ['type' => 'integer', 'null' => true, 'default' => null],
		'element' => ['type' => 'string', 'null' => true, 'default' => null],
		'visibility_roles' => ['type' => 'text', 'null' => true, 'default' => null],
		'visibility_paths' => ['type' => 'text', 'null' => true, 'default' => null],
		'visibility_php' => ['type' => 'text', 'null' => true, 'default' => null],
		'params' => ['type' => 'text', 'null' => true, 'default' => null],
		'publish_start' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'publish_end' => ['type' => 'datetime', 'null' => true, 'default' => null],
		'updated' => ['type' => 'datetime', 'null' => false, 'default' => null],
		'created' => ['type' => 'datetime', 'null' => false, 'default' => null],
		'_constraints' => [
			'primary' => ['type' => 'primary', 'columns' => ['id']],
			'alias' => ['type' => 'unique', 'columns' => 'alias']
		],
		'_options' => ['charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB']
	);

	public $records = array(
		array(
			'id' => 3,
			'region_id' => 4,
			'title' => 'About',
			'alias' => 'about',
			'body' => 'This is the content of your block. Can be modified in admin panel.',
			'show_title' => 1,
			'class' => '',
			'status' => 1,
			'weight' => 2,
			'element' => '',
			'visibility_roles' => '',
			'visibility_paths' => '',
			'visibility_php' => '',
			'params' => '',
			'updated' => '2009-12-20 03:07:39',
			'created' => '2009-07-26 17:13:14'
		),
		array(
			'id' => 8,
			'region_id' => 4,
			'title' => 'Search',
			'alias' => 'search',
			'body' => '',
			'show_title' => 0,
			'class' => '',
			'status' => 1,
			'weight' => 1,
			'element' => 'Nodes.search',
			'visibility_roles' => '',
			'visibility_paths' => '',
			'visibility_php' => '',
			'params' => '',
			'updated' => '2009-12-20 03:07:39',
			'created' => '2009-12-20 03:07:27'
		),
		array(
			'id' => 5,
			'region_id' => 4,
			'title' => 'Meta',
			'alias' => 'meta',
			'body' => '[menu:meta]',
			'show_title' => 1,
			'class' => '',
			'status' => 1,
			'weight' => 6,
			'element' => '',
			'visibility_roles' => '',
			'visibility_paths' => '',
			'visibility_php' => '',
			'params' => '',
			'updated' => '2009-12-22 05:17:39',
			'created' => '2009-09-12 06:36:22'
		),
		array(
			'id' => 6,
			'region_id' => 4,
			'title' => 'Blogroll',
			'alias' => 'blogroll',
			'body' => '[menu:blogroll]',
			'show_title' => 1,
			'class' => '',
			'status' => 1,
			'weight' => 4,
			'element' => '',
			'visibility_roles' => '',
			'visibility_paths' => '',
			'visibility_php' => '',
			'params' => '',
			'updated' => '2009-12-20 03:07:33',
			'created' => '2009-09-12 23:33:27'
		),
		array(
			'id' => 7,
			'region_id' => 4,
			'title' => 'Categories',
			'alias' => 'categories',
			'body' => '[vocabulary:categories type=\"blog\"]',
			'show_title' => 1,
			'class' => '',
			'status' => 1,
			'weight' => 3,
			'element' => '',
			'visibility_roles' => '',
			'visibility_paths' => '',
			'visibility_php' => '',
			'params' => '',
			'updated' => '2009-12-20 03:07:36',
			'created' => '2009-10-03 16:52:50'
		),
		array(
			'id' => 9,
			'region_id' => 4,
			'title' => 'Recent Posts',
			'alias' => 'recent_posts',
			'body' => '[node:recent_posts conditions=\"Nodes.type:blog\" order=\"Nodes.id DESC\" limit=\"5\"]',
			'show_title' => 1,
			'class' => '',
			'status' => 1,
			'weight' => 5,
			'element' => '',
			'visibility_roles' => '',
			'visibility_paths' => '',
			'visibility_php' => '',
			'params' => '',
			'updated' => '2010-04-08 21:09:31',
			'created' => '2009-12-22 05:17:32'
		),
		array(
			'id' => 10,
			'region_id' => 4,
			'title' => 'Block Visible by Public',
			'alias' => 'block-visible-by-public',
			'body' => 'Block Visible by Public',
			'show_title' => 1,
			'class' => '',
			'status' => 1,
			'weight' => 7,
			'element' => '',
			'visibility_roles' => '["3"]',
			'visibility_paths' => '',
			'visibility_php' => '',
			'params' => '',
			'updated' => '2010-04-08 21:09:31',
			'created' => '2009-12-22 05:17:32'
		),
		array(
			'id' => 11,
			'region_id' => 4,
			'title' => 'Block Visible by Admin or Registered',
			'alias' => 'block-visible-by-admin-or-registered',
			'body' => 'Block Visible by Admin or Registered',
			'show_title' => 1,
			'class' => '',
			'status' => 1,
			'weight' => 8,
			'element' => '',
			'visibility_roles' => '["1","2"]',
			'visibility_paths' => '',
			'visibility_php' => '',
			'params' => '',
			'updated' => '2010-04-08 21:09:31',
			'created' => '2009-12-22 05:17:32'
		),
	);
}
