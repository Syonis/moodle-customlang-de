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
 * @package    auth
 * @subpackage shibboleth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo_description'] = 'Stellen Sie ein Logo für die Shibboleth-Authentifizierung bereit, das Ihren Nutzern vertraut vorkommt. Dies könnte das Logo Ihres Shibboleth-Verbunds sein, z.B. <tt> SWITCHaai Login </tt> oder <tt> InCommon Login </tt>.';
$string['auth_shib_auth_method_description'] = 'Geben Sie einen Namen für die Shibboleth-Authentifizierung an, der Ihren Nutzern vertraut ist, z.B. der Name des Shibboleth-Verbunds, z.B. <tt>SWITCHaai Login</tt> oder <tt>InCommon Login</tt>.';
$string['auth_shib_contact_administrator'] = 'Falls Sie nicht dieser Organisation zugeordnet wurden und Kurszugriff benötigen, nehmen Sie bitte mit den <a href="mailto:{$a}">Administratoren</a> Kontakt auf.';
$string['auth_shib_idp_list_description'] = 'Stellen Sie eine Liste der Identity-Provider bereit, aus der die Nutzer auf der Anmeldeseite auswählen können. <br />In jeder Zeile muss ein kommagetrennte Angabe für identityID des IDP (siehe Shibboleth Medatadtendatei) und Name des IDP vorhanden sein, wie es in der Dropdown-Liste gezeigt werden soll.<br /> Als optionalen dritten Parameter können Sie den Ort des Shibboleth Session Initators eintragen, falls Ihr Moodle im Verbund genutzt wird.';
$string['auth_shib_instructions_help'] = 'Tragen Sie hier Informationen für Ihre Nutzer ein, die ihnen den Zugang mit Hilfe von Shibboleth erklären. Diese werden auf der Loginseite angzeigt. Der Text sollte einen Link "<b>{$a}</b>" enthalten, damit ein einfachere Login möglich ist. Wenn Sie das Feld leer lassen, wird der standardmäßige Text angezeigt und keine Hinweise auf den Shibboleth Login.';
$string['auth_shib_integrated_wayf_description'] = 'Mit der Aktivierung verwendet Moodle den eigenen WAYF Service, nicht den für Shibboleth konfigurierten. Moodle zeigt dann eine Dropdown-Liste der verfügbaren alternativen Anmeldeseiten, wo die Nutzer der Identity Provider auswählen.';
$string['auth_shib_logout_return_url_description'] = 'Auf diese Seite werden Shibboleth-Nutzer nach dem Abmelden geleitet.<br />Bleibt das Feld leer wird die Standardseite von Moodle genutzt.';
$string['auth_shibbolethdescription'] = 'Bei dieser Methode werden Nutzer mit Shibboleth erstellt und authentifiziert. Einzelheiten zur Einrichtung finden Sie in <a href="{$a}">Shibboleth-README</a>.';
$string['shib_no_attributes_error'] = 'Sie versuchen vermutlich, die Shibboleth Authentifizierung zu verwenden. Moodle hat jedoch keine Nutzerattribute erhalten. Prüfen Sie bitte, ob der Identity Provider die erforderlichen Attribute ({$a}) dem Moodle-Serviceprovider zur Verfügung stellt oder informieren Sie die Administratoren.';
$string['shib_not_all_attributes_error'] = 'Moodle benötigt einige Shibboleth-Attribute, die derzeit nicht bereitgestellt werden. Es handelt sich um die Attribute: {$a}<br />Benachrichtigen Sie bitte die Administratoren oder Ihren Identity Provider.';
