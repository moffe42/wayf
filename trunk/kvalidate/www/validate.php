<?php
/**
 * Kalmar2 metadata validator
 *
 * PHP version 5
 *
 * The Kalmar2 metadata validator is free software: you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public License
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * The Kalmar2 metadata validator is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser
 * General Public License for more details.
 *
 * You should haveKalmar2 metadata validator. If not, see
 * <http://www.gnu.org/licenses/>.
 *
 * @package    SimpleSAMLphp
 * @subpackege Module
 * @author     Jacob Christiansen <jach@wayf.dk>
 * @copyright  2010 Jacob Christiansen 
 * @license    http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @version    SVN: $Id$
 * @link       http://code.google.com/p/wayf/
 */

$globalConfig = SimpleSAML_Configuration::getInstance();

$t = new SimpleSAML_XHTML_Template($globalConfig, 'kvalidate:validate.tpl.php');

if(isset($_REQUEST['md_url'])) {
	$config = array();
	
	$t->data['show_success'] = isset($_REQUEST['show_success']) ? true : false;	
	$t->data['show_warning'] = isset($_REQUEST['show_warning']) ? true : false;
	$t->data['show_xml'] = isset($_REQUEST['show_xml']) ? true : false;
	$config['REMOVE_ENTITYDESCRIPTOR'] = isset($_REQUEST['remove_ed']) ? true : false;

	$md_url = filter_var($_REQUEST['md_url'], FILTER_VALIDATE_URL);
	$t->data['md_url'] = $md_url;
	$xml = file_get_contents($md_url);
	
	$validator = new sspmod_kvalidate_Validator($config);

	$t->data['xml'] = $validator->validate($xml);
	$t->data['messages'] = $validator->getMessages();
	$t->data['status'] = $validator->getStatus();
}

$t->show();
exit;