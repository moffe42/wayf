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
 
$this->data['header'] = $this->t('{kvalidate:kvalidate:title}');

$this->data['head'] = '
<style type="text/css">
	table {
		border-collapse: collapse;
		margin: 0px 0px 20px;
		padding: 0px;
		border-spacing: 2px 2px;
		border-color: gray;
		display: table;
	}
	td {
		border: 1px solid #5F911B;
		padding: 3px;
		margin: 0px;
		display: table-cell;
		vertical-align: inherit;
	}
	th {
		border: 1px solid #5F911B;
		background: #7FA748;
		color: white;
		padding: 3px;
		margin: 0px;
		font-weight: bold;
		display: table-cell;
		vertical-align: inherit;
	}
</style>
';

$this->includeAtTemplateBase('includes/header.php');

echo '<h1>' . $this->t('{kvalidate:kvalidate:groupvalidation_header}') . ' - ' . $this->data['group'] . '</h1>';

if(isset($this->data['error'])) {
    echo '<br /><p style="color: #FF0000; font-weight: bold;">' . $this->data['error'] . '</p>';
} else {
    echo '<p>' . $this->t('{kvalidate:kvalidate:see_group_status}') . '</p>';
    echo '
        <table style="width: 300px;">
        <tr>
        <th>' . $this->t('{kvalidate:kvalidate:status}') . '</th>
        <th>' . $this->t('{kvalidate:kvalidate:entity}') . '</th>
        <th></th>
        </tr>';

    foreach($this->data['entities'] AS $k => $v) {
        echo '<tr>';
        if($v['status'] == KV_STATUS_SUCCESS || $v['status'] == KV_STATUS_WARNING) {
            echo '<td>';
            echo '<img src="/' . $this->data['baseurlpath'] . 'resources/icons/silk/accept.png" alt="' . $this->t('{kvalidate:kvalidate:status_ok}') . '" />';
            echo '</td>';
        } else if($v['status'] == KV_STATUS_ERROR) {
            echo '<td>';
            echo '<img src="/' . $this->data['baseurlpath'] . 'resources/icons/silk/exclamation.png" alt="' . $this->t('{kvalidate:kvalidate:status_error}') . '" />';
            echo '</td>';
        }
        echo '<td>' . $v['name'] . '</td>';
        echo '<td><a href="validate.php?md_url=' . rawurlencode($v['url']) . '&show_warning&show_xml&show_md_url"><b>' . $this->t('{kvalidate:kvalidate:details}') . '</b></a></td>';
        echo '</tr>';	
    }	

    echo '</table>';
}

$this->includeAtTemplateBase('includes/footer.php');
