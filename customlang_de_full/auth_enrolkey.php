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
 * @package    auth
 * @subpackage enrolkey
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortsync_description'] = 'Zielgruppen synchronisieren, wenn sich Nutzer anmelden. Dadurch wird eine Verzögerung bei der Ausführung von Cron und dieser Task beseitigt. Warnung: Dies kann dazu führen, dass der Anmeldevorgang langsamer wird.';
$string['label_redirection_help'] = 'Die hier eingegebene URL leitet die Nutzer nach ihrer Selbstregistrierung weiter.<br/>
In dieses Feld können Sie absolute und relative URLs eintragen.<br/>
Eine relative URL muss am Anfang mit einem Schrägstrich / beginnen.
<ul>
<li>Relativ: /course/view.php?id=5</li>
<li>Absolut: http://vielleicht.ihr.intranet/irgendeine/seite</li>
</ul>';
$string['settings_content'] = '<p>Die "Selbstregistrierung mit Einschreibeschlüssel" ermöglicht es Nutzern, sich über die Anmeldeseite ein eigenes Konto zu erstellen. Es wird eine E-Mail mit einem Bestätigungslink verschickt. Bei zukünftigen Anmeldungen werden Anmeldename und Kennwort mit den gespeicherten Werten in der Moodle-Datenbank abgeglichen.</p><p>Wenn bei der Selbstregistrierung ein Einschreibeschlüssel in das entsprechende Feld eingegeben wird, werden neue Nutzer automatisch für den passenden Kurs eingeschrieben. Der Einschreibeschlüssel wird für einen Kurs über "Kurs-Administration > Nutzer > Einschreibemethoden > Methode hinzufügen > Selbsteinschreibung" aktiviert.</p><p>Hinweis: Zusätzlich zur Aktivierung des Plugins muss die "Selbstregistrierung mit Einschreibeschlüssel" auch aus dem Dropdown-Menü für die Selbstregistrierung unter "Website-Administration > Plugins > Authentifizierung > Übersicht" ausgewählt werden.</p>';
$string['settings_email_description'] = 'Müssen Nutzer ihr Konto per E-Mail bestätigen, bevor sie auf eingeschriebene Kurse zugreifen können?
<ul>
<li>Nein – Keine E-Mail-Bestätigung erforderlich.</li>
<li>Ja – Zugriff wird gewährt, nachdem das Konto per E-Mail bestätigt wurde.</li>
<li>Vorläufig - Erster Zugriff wird gewährt. Nutzer müssen aber ihr Konto vor der nächsten Anmeldung per E-Mail bestätigen.</li>
</ul>';
$string['settings_visible_description'] = 'Diese Registrierungsmethode fügt der Anmeldeseite ein neues Formularelement hinzu. Die Registrierung wird mit allen verfügbaren Einschreibeschlüsseln abgeglichen und meldet die Nutzer für die alle Kurse mit dem entsprechenden Einschreibeschlüssel an.';
