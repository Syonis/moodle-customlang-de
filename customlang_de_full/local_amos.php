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
 * @subpackage amos
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contribnotifconverted'] = '{$a->fullname} hat Ihre beigesteuerte Übersetzung
#{$a->id} {$a->subject} konvertiert.

Vielen Dank für Ihren Beitrag. Scheinbar wurde Ihr Beitrag versehentlich für das falsche Sprachpaket eingereicht. Deswegen wurde Ihr Beitrag für das falsche Sprachpaket abgelehnt und zum richtigen Sprachpaket verschoben. Dort findet jetzt die Prüfung durch die Betreuer statt und Sie müssen nichts weiter tun.

Bitte überprüfen Sie künftig, dass Sie die richtige Sprache ausgewählt haben, wenn Sie mit der Übersetzung von Texten beginnen.

---------------------------------------------------------------------
Ursprüngliche Beitragsseite: {$a->contriborigurl}
Geänderte Beitragsseite: {$a->contribnewurl}';
$string['contribstagedinfo_help'] = 'Die Texte im Arbeitsspeicher wurden von einem Community-Mitglied vorgeschlagen. Die Betreuer des Sprachpakets werden gebeten, die Übersetzung zu prüfen. Die Texte erhalten den Status \'angenommen\' (und werden ins Sprachpaket übernommen) oder \'abgelehnt\' (wenn sie aus bestimmten Gründen nicht annehmbar sind).';
$string['creditstitlelong'] = 'Betreuer und weitere beteiligte Personen beim Sprachpaket';
$string['maintainers'] = 'Maintainer';
$string['ownstashactions_help'] = '* Verwenden - Die übersetzten Texte von der Ablage in den Arbeitsspeicher kopieren, ohne die Ablage zu verändern. Wenn sich ein Text bereits im Arbeitsspeicher befindet, wird er von jenem der Ablage überschrieben.
* Aufnehmen - Die übersetzten Texte von der Ablage in den Arbeitsspeicher kopieren, und die Ablage leeren (das ist Verwenden und Löschen).
* Löschen - Die Texte in der Ablage löschen.
* An Betreuer/in senden - Öffnet ein Formular zum Senden der Ablage an die offiziellen Betreuer des Sprachpakets, damit sie Ihren Beitrag in das offizielle Sprachpaket aufnehmen können.';
$string['stagesubmit'] = 'Texte an die Betreuer des Sprachpakets senden';
$string['stashactions_help'] = 'Eine Ablage ist eine Momentaufnahme des aktuellen Arbeitsspeichers. Eine solche Ablage kann als Vorschlag an die Betreuer des Sprachpakets gesendet werden.';
$string['stashsubmit'] = 'An Betreuer senden';
$string['submitting_help'] = 'Dadurch werden übersetzte Texte an die offiziellen Betreuer des Sprachpakets gesendet. Diese holen Ihre Übersetzungen in deren Arbeitsspeicher, um sie zu überprüfen und sie schließlich ins Sprachpaket zu übernehmen. Schreiben Sie bitte eine Nachricht, in der Sie den Inhalt Ihrer Arbeit beschreiben und angeben, warum Sie Ihren Beitrag einbeziehen lassen möchten.';
$string['translatortranslation_help'] = 'Klicken Sie auf die Zelle, um sie in den Eingabeditor zu verwandeln. Fügen Sie die Übersetzung ein und klicken Sie außerhalb der Zelle, um die Übersetzung in den Arbeitsspeicher zu legen. Die Hintergrundfarbe der Zelle bedeutet:

* Grün - der Text ist bereits übersetzt, Sie können die Übersetzung falls notwendig ändern.
* Gelb - der Text kann veraltet sein. Das englische Original wurde wahrscheinlich nach der Übersetzung des Textes geändert.
* Rot - der Text ist noch nicht übersetzt.
* Blau - Sie haben die Übersetzung geändert und sie ist nun im Arbeitsspeicher.
* Grau - AMOS kann nicht verwendet werden, um diesen Text zu übersetzen. Beispielsweise können Texte für Moodle 1.9 nur über den legacy CVS-Zugang bearbeitet werden.

Die Betreuer des Sprachpakets sehen ein kleines rotes Symbol in der Ecke der Zellen, die sie übernehmen dürfen.';
$string['unableunmaintained'] = 'Das Sprachpaket \'{$a}\' hat zur Zeit keine Betreuer, also können Beiträge zur Übersetzung nicht angenommen werden. Überlegen Sie sich bitte, ob Sie gerne selber als Betreuer/in des Sprachpakets \'{$a}\' tätig werden möchten.';
