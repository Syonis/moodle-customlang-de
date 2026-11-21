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
 * @subpackage userenrols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HELP_PAGE_IMPORT_help'] = '<p>
Verwenden Sie dieses Kursimportplugin, um Nutzereinschreibungen aus einer Textdatei mit Trennzeichen in den Kurs zu importieren.
Es werden keine neuen Nutzerkonten erstellt, d.h. jeder der in der Eingabedatei aufgeführten Nutzer muss bereits ein Konto für die Website haben.<br />
<br />
Wenn ein Gruppenname in einem Nutzerdatensatz (Zeile) enthalten ist, wird diese Person zu dieser Gruppe hinzugefügt, falls sie existiert. Optional können Sie bei Bedarf neue Gruppen erstellen.
</p>

<ul>
  <li>Jede Zeile der Importdatei stellt einen Datensatz dar.</li>
  <li>Jeder Datensatz sollte mindestens ein Feld mit einem Wert zur Benutzeridentifikation enthalten, sei es ein Nutzername, eine
  E-Mail-Adresse oder eine interne ID-Nummer.</li>
  <li>Jeder Datensatz kann ein zusätzliches Feld für den Gruppennamen enthalten, das durch ein Komma, ein Semikolon oder ein
  Tabulatorzeichen getrennt ist.</li>
  <li>Die Rolle, die diesen Nutzern zugewiesen wird, kann ausgewählt werden, sollte aber standardmäßig die Standardrolle des Kurses sein.</li>
  <li>Jedes oder keines der Felder kann in Anführungszeichen gesetzt werden. Das Feld für den Gruppennamen muss in Anführungszeichen gesetzt werden, wenn es ein Semikolon oder ein Komma enthält.</li>
  <li>Leere Zeilen in der Importdatei werden übersprungen.</li>
  <li>Hinweis: Wenn eine Person bereits für den Kurs eingeschrieben ist, werden keine Änderungen an der Einschreibung dieser Person vorgenommen (d.h. keine Rollenänderung).</li>
</ul>

<p>
Hinweis zu Metakursen: Dieses Plugin importiert keine Nutzereinschreibungen in einen Metakurs, da die Einschreibung in einem der untergeordneten Kurse erfolgen sollte. Es wird jedoch Gruppenzuweisungen vornehmen und bei Bedarf Gruppen erstellen, wenn die Nutzer-ID bereits mit dem Metakurs über einen untergeordneten Kurs eingeschrieben ist.
</p>

<h3>Beispiele</h3>

Interne ID-Nummer und Gruppe
<pre>
2144323548;Dienstag Labor
2144323623
2144323647;Mittwoch Labor
2144323638;Mittwoch Labor
</pre>

E-Mail Adresse
<pre>
smith-john@university.edu
janedoe@university.edu, "Honors"
alan.jones@university.edu, "HonorsPlus"
</pre>

Nutzernamen (vom Gruppenfeld mit einem Tabulatorzeichen getrennt)
<pre>
johnsonf    "Präsentation, Gruppe Eins"
samsel      Zehn Uhr Test
</pre>';
$string['LBL_GROUP_CREATE_help'] = 'Wenn die Gruppen in der Importdatei nicht existieren, werden diese angelegt. Andernfalls werden Nutzer nur dann Gruppen zugewiesen, wenn der angegebene Gruppenname bereits existiert.';
$string['LBL_ROLE_ID_help'] = 'Welche Rolle sollen die importierten Nutzer im Kurs haben? Wenn \'Keine Einschreibung\' gewählt ist, werden nur Gruppenzuweisungen vorgenommen.';
