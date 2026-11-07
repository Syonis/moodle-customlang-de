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
 * @subpackage capability
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['settings:adminpasses'] = 'Administratoren der Website können diesen Faktor bestehen.';
$string['settings:adminpasses_help'] = 'Standardmäßig haben Administratoren alle Rechte, einschließlich dem Recht "factor/capability:cannotpassfactor", was bedeutet, dass sie diesen Faktor nicht bestehen. Wenn diese Option aktiviert ist, erfüllen alle Administratoren diesen Faktor, wenn sie diese Fähigkeit nicht von einer anderen Rolle aus haben. Wenn dies nicht der Fall ist, werden Administratoren diesen Faktor nie erfüllen.';
$string['settings:description'] = '<p>Verwenden Sie das Nutzerrecht "factor/capability:cannotpassfactor", um Nutzer mit einer mehrstufigen Authentifizierung festzulegen.</p> <p>Weisen Sie dieses Nutzerrecht für ausgewählte Rollen auf der Seite <a href="roles/manage.php">Rollen verwalten</a> zu.</p>';
$string['settings:shortdescription'] = 'Legen Sie fest, welche Nutzer andere Faktoren zur Authentifizierung verwenden müssen. Dies muss mit weiteren Faktoren kombiniert werden.';
$string['summarycondition'] = 'verfügt in keiner Rolle über das Nutzerrecht "factor/capability:cannotpassfactor", auch nicht als Administrator.';
