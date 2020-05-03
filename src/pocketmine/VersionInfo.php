<?php
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * 
 *
 *
*/

declare(strict_types=1);

namespace ToolCraft;

use function defined;

// composer autoload doesn't use require_once and also pthreads can inherit things
// TODO: drop this file and use a final class with constants
if(defined('ToolCraft\_VERSION_INFO_INCLUDED')){
	return;
}
const _VERSION_INFO_INCLUDED = true;

const NAME = "ToolCraft";
const BASE_VERSION = "3.12.1";
const IS_DEVELOPMENT_BUILD = true;
const BUILD_NUMBER = 0;
