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
 * @package    local
 * @subpackage ai_manager
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_usercolumns_invalid_details'] = 'Einige Nutzer haben ungültige Einträge in der ausgewählten Tenant-Spalte. Die zugehörigen Tenants werden nicht erreichbar sein. Stellen Sie deren Gültigkeit sicher oder wählen Sie ein anderes Nutzerfeld als Tenant-Spalte aus. Tenant-Bezeichner dürfen nur alphanumerische lateinische Buchstaben, Bindestriche, Unterstriche oder Leerzeichen enthalten. Eine Liste ungültiger Tenants finden Sie unten.';
$string['choosecontext'] = 'Wählen Sie den Bereich, für den die Nutzer angezeigt werden sollen';
$string['combinedanonymizedusers'] = 'Anonymisierte Nutzer (zusammengefasst)';
$string['error_invalid_tenants_redirect'] = 'Der Tenant, den Sie versuchen aufzurufen, hat einen ungültigen Bezeichner. Sie wurden daher zur Konfigurationsseite des Standard-Tenants umgeleitet. Das kann durch einen ungültigen Bezeichner in der Tenant-Spalte Ihres Nutzerprofils verursacht sein. Bitte beachten Sie, dass Nutzer mit einem ungültigen Tenant-Bezeichner keine KI-Funktionalitäten nutzen können.';
$string['executebulkuseractions'] = 'Aktion für ausgewählte Nutzer ausführen';
$string['privilegedrolesdesc'] = 'Prompts von Nutzern mit diesen Rollen im Systemkontext können von niemandem eingesehen werden einschließlich Tenant-Verwaltern. Zusätzlich werden diese Nutzer nur anonymisiert in den Nutzerstatistiken angezeigt.';
$string['requireconfirmtoudesc'] = 'Aktivieren, damit Nutzer die Nutzungsbedingungen einmalig bestätigen müssen, bevor sie die KI-Funktionalitäten des KI-Managers nutzen können';
