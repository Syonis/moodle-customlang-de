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
 * @package    tool
 * @subpackage generator
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursewithoutusers'] = 'Ausgewählter Kurs hat keine Nutzer';
$string['notenoughusers'] = 'Der ausgewählte Kurs hat zu wenig Nutzer.';
$string['testplanexplanation'] = 'Dieses Tool erstellt eine JMeter-Testplandatei zusammen mit der Datei mit den Nutzeranmeldeinfos. Dieser Testplan ist so konzipiert, dass er mit {$a} zusammenarbeitet, was die Ausführung des Testplans in einer bestimmten Moodle-Umgebung erleichtert, Informationen über die Läufe sammelt und die Ergebnisse vergleicht. Sie müssen den Testplan herunterladen und sein Script test_runner. sh verwenden. Befolgen Sie die Installations- und Gebrauchsanweisungen. Sie müssen in der config.php ein Passwort für die Kursnutzer festlegen (z. B. $CFG->tool_generator_users_password = \'moodle\';). Es gibt keinen Standardwert für dieses Kennwort, um eine unbeabsichtigte Verwendung des Tools zu verhindern. Sie müssen die Option zum Aktualisieren von Passwörtern verwenden, falls Ihre Kursnutzer andere Passwörter haben oder diese von tool_generator generiert wurden, ohne jedoch einen Wert für $CFG->tool_generator_users_password festzulegen. Es ist Teil von tool_generator, so dass es gut mit den Kursen funktioniert, die von den Kursen und den Site-Generatoren generiert werden; es kann aber auch mit jedem Kurs verwendet werden, der mindestens enthält: * Genügend eingeschriebene Nutzer (abhängig von der von Ihnen gewählten Testplangröße) mit dem zurückgesetzten Passwort "moodle" * Eine Textseiten-Instanz * Eine Foren-Instanz mit mindestens einer Diskussion und einer Antwort Sie sollten die Serverkapazität beim Ausführen großer Testpläne berücksichtigen. Die von JMeter generierte Last kann sehr groß sein. Die Ramp-up-Periode wurde entsprechend der Anzahl der Threads (Nutzer) angepasst, um diese Art von Problemen zu reduzieren, aber die Last wird immer noch riesig sein. **Führen Sie den Testplan nicht auf einem Live-System aus**. Diese Funktion erstellt nur die Dateien, um JMeter zu füttern, ist also selbst nicht gefährlich, aber Sie sollten diesen Testplan **NIEMALS** in einer Produktionsumgebung ausführen.';
$string['updateuserspassword'] = 'Aktualisierung Zugangskennwort für Nutzer';
$string['updateuserspassword_help'] = 'JMeter benötigt einen Login als Kursnutzer. Das Nutzerkennwort können Sie mit der Variable $CFG->tool_generator_users_password in der config.php erzeugen; Diese Einstellung aktualisiert das Kennwort, das zu $CFG->tool_generator_users_password gehört. Dies kann hilfreich sein, wenn ein Kurs verwandt wird, der nicht mit dem Tool-Generator generiert wurde, oder wenn $CFG->tool_generator_users_password nicht gesetzt wurde, als Sie die Testkurse erstellt haben.';
