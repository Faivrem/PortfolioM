<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
	function css_url($nom)
	{
		return base_url() . 'assets/css/' . $nom . '.css';
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($nom)
	{
		return base_url() . 'assets/js/' . $nom . '.js';
	}
}
if ( ! function_exists('doc_url'))
{
	function doc_url($nom)
	{
		return base_url() . 'assets/doc/' . $nom;
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($nom)
	{
		return base_url() . 'assets/img/' . $nom;
	}
}

if ( ! function_exists('img'))
{
	function img($nom, $alt = '')
	{
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
	}
}

if ( ! function_exists('img_blog'))
{
	function img_blog($nom, $alt = '')
	{
		return '<img src="' . base_url() . 'assets/img/Qblog/' . $nom. '" alt="' . $alt . '" />';
	}
}

if ( ! function_exists('lien_blog'))
{
	function lien_blog($nom)
	{
		return '<a href="' . base_url() . 'monexperiencequebec/blog/' . $nom. '" />';
	}
}
if ( ! function_exists('lien_article'))
{
	function lien_article($nom)
	{
		return '<a href="' . base_url() . 'blog/article/' . $nom. '" />';
	}
}

?>