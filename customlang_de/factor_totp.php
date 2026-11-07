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
 * Local language pack from ---
 *
 * @package    factor
 * @subpackage totp
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['settings:description'] = 'Nutzer müssen eine Authenticator-App auf ihrem Smartphone installiert haben, um damit einen Code generieren und bei der Anmeldung eingeben zu können.';
$string['settings:shortdescription'] = 'Nutzer müssen bei der Anmeldung einen Code aus einer Authenticator-App eingeben.';
$string['settings:totplink_help'] = 'Wenn diese Option aktiviert ist, wird Nutzern eine dritte Setup-Option mit einem direkten Link otpauth:// angezeigt';
$string['settings:window_help'] = 'TOTP-Bestätigungsfenster ist eine Zeitabweichung und gibt an, wie lange jeder Code gültig ist. Der Zeitraum, also die Zeit zwischen neu generierten Codes, beträgt 30 Sekunden. Wenn das Fenster 15 (Standard) beträgt und der aktuelle Zeitstempel 147682209 ist, liegen die getesteten OTPs zwischen 147682194 (147682209 - 15), 147682209 und 147682224 (147682209 + 15). Das Fenster muss kleiner als 30 sein. Daher umfasst dieser Test das vorherige OTP, aber nicht das nächste. Sie können diesen Parameter als Workaround auf einen höheren Wert (bis zu 29) einstellen, wenn die Geräteuhren Ihrer Nutzer häufig ungenau laufen.';
