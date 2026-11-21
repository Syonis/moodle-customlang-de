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
 * @subpackage langpackdropper
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['setting_langpackurls_desc'] = 'Diese Einstellung erwartet eine Liste von Sprachpaketen, die auf dieser Moodle-Instanz verwendet werden sollen.<br/> In jeder Zeile steht ein Sprachpaket. Die Zeile besteht aus dem Sprachpaket-Identifikator und einer URL, unter der das Sprachpaket heruntergeladen werden kann. Beide Werte werden durch einen Senkrechtstrich getrennt.<br/><br/>
Beispiel:<br/>
de_mysublangpack|https://github.com/lernlink/moodle-tool_langpackdropper/raw/main/tests/fixtures/de_droppertest_toplevel.zip
<br/><br/>
Weitere Informationen zu den Parametern:
<ul>
<li><b>Identifikator:</b> Dies ist der Name des Verzeichnisses unterhalb Ihres MOODLEDATA/lang Verzeichnisses verwendet werden, wo das Sprachpaket dann platziert werden wird.</li>
<li><b>URL:</b> Dies ist die vollwertige Download URL, unter der Moodle eine ZIP Datei mit dem Sprachpaket herunterladen kann. URLs zu Github Repository Downloads funktionieren hier sehr gut.</li>
</ul>
Bitte beachten Sie:
<ul>
<li>Einstellungszeilen mit einem ungültigen Formal oder einer ungültigen URL  werden bei der Verarbeitung stillschweigend ignoriert.</li>
<li>Die ZIP-Datei des Sprachpakets muss entweder alle Sprachpaket-Dateien auf der obersten Ebene oder innerhalb eines einzigen Unterordners enthalten. Im letztgenannten Fall ist der Name des Ordners irrelevant. Falls die ZIP-Datei diese Anforderungen nicht erfüllt, wird das Sprachpaket nicht verarbeitet und ein Fehler wird gelogged.</li>
<li>Moodle lädt mit diesem Dienstprogramm PHP-Code von der angegebenen URL herunter und führt diesen als PHP-Dateien eines Sprachpakets aus.<em>Moodle-Administratoren dürfen nur URLs zu konfigurieren, welche nichts anderes als Sprachpaket-Dateien enthalten. Sie müssen außerdem sicherstellen, dass niemand Schadcode in die ZIP-Datei einschleusen kann.</em></li>
<li>Falls Sie planen, dieses Dienstprogramm dazu einzusetzen, um Sprachpakete mit einem Identikator zu platzieren, der zu einem offiziellen Moodle Sprachpaket gehört - was problemlos möglich ist - sollten Sie prüfen, ob Sie den geplanten Task \\tool_langimport\\task\\update_langpacks_task deaktivieren, damit sich die beiden Aktualisierungsmechanismen nicht in die Quere kommen.</li>
<li>Falls Sie eine Einstellungszeile hier entfernen, wird das heruntergeladene Sprachpaket nicht automatisch gelöscht. Um ein solches Sprachpaket endgültig zu entfernen, gehen Sie bitte zur <a href="{$a->managepage}">Sprachpaketverwaltung</a>.</li>
</ul>';
