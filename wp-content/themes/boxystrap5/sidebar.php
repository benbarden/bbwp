<?php
/**
 * The Template for the sidebar containing the main widget area
 *
 * @package  WordPress
 * @subpackage  Timber
 */

$context = array();
$recentPostsArgs = ['numberposts' => 10];
$context['RecentPosts'] = new Timber\PostQuery($recentPostsArgs);
Timber::render( array( 'sidebar.twig' ), $context );
