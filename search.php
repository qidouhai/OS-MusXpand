<?php
/* ---
 * Project: musxpand
 * File:    search.php
 * Author:  phil
 * Date:    09/09/2011
 * ---
 * License:

    This file is part of musxpand.

    musxpand is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    musxpand is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with musxpand.  If not, see <http://www.gnu.org/licenses/>.

    Copyright � 2010 by Philippe Hilger
 */

require 'includes/mx_search.php';

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
	$query=trim(strtolower(preg_replace('![%]!','',mx_securestring($_REQUEST['q']))));
	if (!$query) return;
	$qtype=mx_secureword($_REQUEST['t']);
	$fld=mx_secureword($_REQUEST['f']);
	if (!$qtype) {
		$qtype='persons';
	}
	echo mx_xmlsearch($query,$qtype,$fld);
}
