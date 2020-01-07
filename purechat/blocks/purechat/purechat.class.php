<?php
namespace Block;
/**
 * purechat - Main Class
 * 
 * Pure Chat is the preferred live chat solution for small to mid-sized teams
 * 
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package purechat
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/block_purechat
 */
class purechat extends \SCHLIX\cmsBlock
{
	public function Run()
	{
    global $__purechat_loaded;
		if ($__purechat_loaded !== 'loaded') // prevent the built-in duplicate blocks feature 
		{
      $website_id = $this->config['str_website_id'];
      
			$__purechat_loaded = 'loaded';
			$this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
		}
  }
}
