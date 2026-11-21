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
 * @package    tool
 * @subpackage selfsignuphardlifecycle
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['emptytable'] = 'Es gibt aktuell keine Nutzer, welche auf der Basis der aktuellen Konfiguration des Dienstprogramms einem harten Lebenszyklus unterliegen würden.';
$string['pluginname'] = 'Harter Lebenszyklus für selbstregistrierte Nutzer';
$string['privacy:metadata'] = 'Das Plugin \'Harter Lebenszyklus für selbstregistrierte Nutzer\' speichert keine personenbezogenen Daten.';
$string['setting_coveredauth_desc'] = 'Mit dieser Einstellung steuern Sie, welche Nutzer von diesem Dienstprogramm behandelt werden. Falls Sie eine bestimmte Authentifizierungsmethode auswählen, werden alle Nutzer, welche diese Authentifizierungsmethode nutzen, Kandidaten für die automatisierte (Deaktivierung und) Löschung. Falls Sie eine bestimmte Authentifizierungsmethode nicht auswählen, werden alle Nutzer, welche diese Authentifizierungsmethode haben, von diesem Dienstprogramm unangetastet bleiben.';
$string['setting_enableuseroverrides_desc'] = 'Mit dieser Einstellung erlauben Sie das Überschreiben des Datums der Nutzerlöschung oder Suspendierung für einzelne Nutzer. .';
$string['setting_enableusersuspension_desc'] = 'Mit dieser Einstellung steuern Sie, ob Nutzer vor der Nutzerlöschung noch deaktiviert werden sollen.';
$string['setting_userdeletionoverridefield_desc'] = 'Mit dieser Einstellung konfigurieren Sie das Nutzerprofilfeld, welches herangezogen wird, um das Datum der Nutzerlöschung zu überschreiben. Nutzer, welche dieses Nutzerprofilfeld aktiviert und befüllt haben, werden an ebendiesem Datum gelöscht werden und nicht basierend auf dem errechneten Löschdatum.';
$string['setting_userlifecyclestatic_desc'] = 'Mit diesem Dienstprogramm können Nutzer basierend auf dem Erstellungsdatum ihres Nutzerkontos gelöscht (und optional deaktiviert) werden. Es ist insbesondere dazu gedacht, Nutzer zu entfernen, welche sich auf Moodle selbstregistriert haben und einem festen Zeitplan unterliegen sollen. Das Dienstprogramm ist dabei simpel aufgebaut und arbeitet wirklich nur auf dem Erstellungsdatum des Nutzerkontos. Es berücksichtigt nicht, ob das Nutzerkonto noch aktiv genutzt wird oder nicht. Darüberhinaus versendet es auch keine Benachrichtigungen an die jeweilige Perdon, bevor das Nutzerkonto deaktiviert oder gelöscht wird.';
$string['setting_useroverridesrelation_desc'] = 'Bitte beachten Sie: Sie können die Einstellung \'Nutzerprofilfeld zur Überschreibung der Nutzerdeaktivierung\' auf dasselbe Profilfeld setzen wie die Einstellung \'Nutzerprofilfeld zur Überschreibung der Nutzerlöschung\', die Einstellung verhindert dies nicht. Eine solche Konfiguration wird jedoch nicht empfohlen da sich das Dienstprogramm dann eher unerwartet verhalten wird: Nutzer werden nach dem im Nutzerprofilfeld gesetzten Datum deaktiviert werden, aber nicht vor dem nächsten Durchlauf des geplanten Tasks endgültig gelöscht werden. Dasselbe gilt, wenn die Administratoren für einen Nutzerkonto das Löschdatum vor das Deaktivierungsdatum setzt: Das Nutzerkonto wird stets immer zuerst deaktiviert und danach dann gelöscht.';
$string['setting_userperiodsrelation_desc'] = 'Bitte beachten Sie: Sie können die Einstellung \'Frist zur Nutzerdeaktivierung" auf den gleichen oder einen höheren Wert als die \'Frist zur Nutzerlöschung\' setzen, die Einstellung verhindert dies nicht. Eine solche Konfiguration wird jedoch nicht empfohlen da sich das Dienstprogramm dann eher unerwartet verhalten wird: Nutzer werden nach der konfigurierten Frist deaktiviert und dann am direkt folgenden nächsten Durchlauf des geplanten Tasks endgültig gelöscht.';
$string['setting_usersuspensionoverridefield_desc'] = 'Mit dieser Einstellung konfigurieren Sie das Nutzerprofilfeld, welches herangezogen wird, um das Datum der Nutzerdeaktivierung zu überschreiben. Nutzer, welche dieses Nutzerprofilfeld aktiviert und befüllt haben, werden an ebendiesem Datum deaktiviert und nicht basierend auf dem errechneten Deaktivierungsdatum.';
$string['taskprocesslifecycle'] = 'Lebenszyklus für selbstregistrierte Nutzer verarbeiten';
