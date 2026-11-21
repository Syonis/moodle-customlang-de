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
 * @subpackage oauth2
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Es existiert bereits ein Benutzer mit diesem Nutzernamen. Falls es sich dabei um Ihren Nutzeraccount handelt, melden Sie sich bitte mit Ihrem Benutzernamen und Kennwort an und fügen Sie ihn über Ihre Favoritenseite als verbundenen Login hinzu.';
$string['confirmaccountemail'] = 'Guten Tag {$a->fullname}, auf \'{$a->sitename}\' wurde ein neues Nutzerkonto mit Ihrer E-Mailadresse angelegt. Bitte folgen Sie diesem Link, um das neue Profil zu bestätigen: {$a->link} In den meisten E-Mail-Programmen sollte dieser Link in blau angezeigt werden, so dass Sie ihn anklicken können. Sollte dies nicht der Fall sein, kopieren Sie bitte den Link und fügen ihn in der Adresszeile Ihres Browserfensters ein. Falls Sie Hilfe benötigen, kontaktieren Sie bitte die Administratoren der Website, {$a->admin} Ihr Moodle-Team';
$string['confirmlinkedloginemail'] = 'Guten Tag {$a->fullname}, unter Angabe Ihrer E-Mail-Adresse wurde eine Anfrage gestellt, das {$a->issuername}-Login \'{$a->linkedemail}\' mit Ihrem Nutzerkonto auf \'{$a->sitename}\' zu verbinden. Bestätigen Sie über diesen Link die Anfrage zum Verbinden mit Ihrem Nutzerkonto: {$a->link} In den meisten E-Mail-Programmen sollte dieser Link in blau angezeigt werden und anklickbar sein. Sollte dies nicht der Fall sein, kopieren Sie bitte den Link und fügen Ihn in der Adresszeile Ihres Browserfensters ein. Falls Sie Hilfe benötigen, kontaktieren Sie bitte Administratoren der Website, {$a->admin} Ihr E-Learning-Team';
$string['createaccountswarning'] = 'Dieses Authentifizierungsplugin ermöglicht es Nutzern, ein Nutzerkonto auf Ihrer Seite anzulegen. Wenn Sie dieses Plugin verwenden, sollten Sie die Einstellung \'authpreventaccountcreation\' aktivieren.';
$string['emailconfirmlinksent'] = '<p>Zu dieser E-Mail-Adresse wurde ein bereits existierendes Nutzerkonto gefunden, das jedoch bisher noch nicht verknüpft ist.</p> <p>Die Nutzerkonten müssen verknüpft sein, bevor Sie sich anmelden können.</p> <p>Eine E-Mail sollte an Ihre E-Mail-Adresse bei <b>{$a}</b> gesendet worden sein.</p> <p>Diese E-Mail enthält eine einfache Anleitung, wie Sie Ihre Nutzerkonten miteinander verbinden.</p> <p>Falls Probleme auftreten, wenden Sie sich an die Administratoren der Website.</p>';
$string['loggedin'] = 'Nutzer erfolgreich beim Provider authentifiziert.';
$string['plugindescription'] = 'Dieses Authentifizierungsplugin zeigt auf der Anmeldeseite eine Liste der konfigurierten Identity Provider. Mit der Auswahl des Identity Provider können Nutzer sich mit ihren Anmeldedaten eines OAuth2-Providers anmelden.';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID des Benutzers, mit dem dieser OAuth2-Login verknüpft ist.';
