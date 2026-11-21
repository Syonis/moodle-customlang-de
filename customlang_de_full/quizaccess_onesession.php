<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from https://github.com/Syonis/moodle-customlang-de
 *
 * @package    quizaccess
 * @subpackage onesession
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Sie versuchen, von einem anderen Computer, Gerät oder Browser als dem, mit dem Sie den Test begonnen haben, auf den Testversuch zuzugreifen. Wenn Sie Ihren Browser versehentlich geschlossen haben, wenden Sie sich bitte an die Trainer.';
$string['onesession_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer einen Testversuch nur in einer einzigen Browsersitzung durchführen. Alle Versuche, denselben Testversuch mit einem anderen Computer, Gerät oder Browser zu öffnen, werden blockiert. Dies kann nützlich sein, um sicherzugehen, dass niemand hilft, indem sie/er denselben Testversuch auf einem anderen Computer öffnet.';
$string['whitelist_desc'] = 'Diese Option ist dazu gedacht, False Positives zu verringern, wenn Nutzer die Tests über mobile Netzwerke durchführen, bei denen sich die IP-Adressen während des Tests geändern könnten. In den meisten Situationen ist das nicht notwendig. Sie können eine kommagetrennte Liste von Subnetzen angeben (z. B. 88.0.0.0/8, 77.77.0.0/16). Befindet sich die IP-Adresse in solchen Netzen, wird sie nicht geprüft. Um die IP-Adress-Prüfung vollständig zu deaktivieren, können Sie den Wert 0.0.0.0/0 angeben.';
