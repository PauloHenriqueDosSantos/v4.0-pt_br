<?php
/**
 * @file        DeleteCarrier.php
 * @brief       Handles Delete Carrier Requests
 * @copyright   Copyright (c) 2018 GOautodial Inc.
 * @author      Alexander Jim H. Abenoja
 *
 * @par <b>License</b>:
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

	require_once('APIHandler.php');
	$api = \creamy\APIHandler::getInstance();

	$postfields = array(
        'goAction' => 'goDeleteCarrier',
        'carrier_id' => $_POST['carrier_id']
    );

    $output = $api->API_Request("goCarriers", $postfields);

	if ($output->result=="success") {
		$status = 1;
	} else {
		$status = $output->result;
	}

	echo $status;
?>
