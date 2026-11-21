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
 * @package    enrol
 * @subpackage oss
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ccteacher_desc'] = 'Kategorielehrer dürfen in jedem Kurs einer Kurskategorie alles tun, incl. der Veränderung von Aktivitäten und der Beurteilung von Teilnehmern.';
$string['pluginname_desc'] = '<p>Sie können einen OSS-Server nutzen, um die Anmeldung von Teilnehmern in Kursen zu verwalten.</p><p>Es wird angenommen, dass der OSS-LDAP-Baum Gruppen enthält, die zu Kursen gehören und dass jede/r der Gruppen/Kurse Einträge von Teilnehmern hat. Es wird weiterhin angenommen, dass die Lehrer (Trainer in der Moodle-Sprechweise) in der Gruppe teachers im LDAP-Baum definiert sind und in den Mitgliedsfeldern dieser Gruppe eingetragen sind.(<em>member</em> oder <em>memberUid</em>), die eine eindeutige Identifizierung des/der Nutzer/in ermöglichen.</p><p>Um das OSS-LDAP als Kurs-Anmeldeverfahren zu verwenden, <strong>muss</strong> jeder Nutzer eine gültige ID-Nummer(uid) besitzen. Die LDAP-Gruppen müssen diese ID-Nummer in den Mitgliedsfeldern aufweisen, um den/die Nutzer/in als Teilnehmer/in in den Kurs einzuschreiben. Dies funktioniert normalerweise sehr gut, wenn Sie LDAP auch zur Nutzerauthentifizierung nutzen.</p><p>Für die Kursanmeldungen wird die Kurs-ID verwendet. Da sie eindeutig sein muss, wird "Kurzname:" vorangestellt.</p><p>Kursanmeldungen werden aktualisiert, wenn der Nutzer sich in Moodle einloggt. Sie können auch ein Skript nutzen, um Kursanmeldungen zu synchronisieren. Moodle liefert ein solches Skript: <em>enrol/oss/cli/sync.php</em>. Sie können das OSS-Anmeldeverfahren auch so konfigurieren, dass automatisch neue Kurse angelegt werden, wenn neue Gruppen in LDAP eingerichtet werden.</p>';
$string['student_role'] = 'Die Rolle, mit der Nutzer in einen Kurs eingetragen werden, normalerweise Teilnehmer/in';
$string['teacher_settings_desc'] = 'Diese Einstellungen beeinflussen spezielle Gruppen, in denen Trainer als Mitglieder vorkommen.';
