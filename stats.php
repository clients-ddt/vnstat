<?php

/*
 * Copyright (C) 2019 Alexander Marston (alexander.marston@gmail.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Require includes
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/includes/vnstat.php';
require __DIR__ . '/includes/utilities.php';
require __DIR__ . '/includes/config.php';

// Initiaite vnStat class
$vnstat = new vnStat($vnstat_bin_dir);
// Set the list of interfaces
$interface_list = $vnstat->getInterfaces();

// Set the current interface
$thisInterface = "eth0";
$data = $vnstat->getInterfaceData('monthly', 'graph', $thisInterface);
$rx = 0;
$tx = 0;
$units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];

if(gettype($data) == "array") {
    foreach ($data as $key => $value) {
        $exponent = array_flip($units)[$value['delimiter']] ?? null;
        if($exponent === null) {
            return null;
        }

        $tx += $value['tx'] * (1024 ** $exponent);
        $rx += $value['rx'] * (1024 ** $exponent);
    }
}

echo json_encode([
    "tx" => round($tx, 2),
    "rx" => round($rx, 2)
]);
?>
