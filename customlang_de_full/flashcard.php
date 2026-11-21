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
 * @package    mod
 * @subpackage flashcard
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autodowngrade_help'] = 'Diese Option ermöglicht ein automatisches Abstufen von Karten. Ein Spiel wird abgestuft, wenn Teilnehmer das Spiel für eine gewisse Zeit nicht überprüfen (Zeiten siehe unten). Karten, die in den Paketen zu alt sind, werden schwieriger und in den ersten Stapel zurückgegeben. Die Abstufung hängt von der Einstellung verschiedenen Verzögerungen für den jeweiligen Stapel ab.';
$string['byusers'] = 'Nach Nutzern';
$string['import_help'] = 'Sie können innerhalb von FlashCards viele Frage-Antwort-Paare auf einmal importieren, indem Sie die Karten-Massenimportfunktion verwenden. Dieser Import kann nur für Text-/Text-Karten benutzt werden.

Sie müssen dafür eine Datei mit einer Liste von Fragen/Antworten erstellen und den Inhalt dieser Datei in den Textbereich des Imports einfügen.

Sie können entscheiden, diese Datei mit gängigen Trennzeichen zu kodieren. Die häufigste Art dürfte "ein Paar pro Zeile" sein, mit \';\' oder Komma als Trenner zwischen Fragen und Antworten.

Fragen werden immer zuerst gestellt und müssen eine Antwort haben. Leere Zeilen werden ignoriert, auch solche, die mit einem # oder einem Schrägstrich (/) beginnen.

Der Import führt eine schnelle Überprüfung des Textes durch, den Sie importieren möchten. Wenn die Textsequenz nicht richtig formatiert ist, erhalten Sie eine Mitteilung, wie viele Paare in der Datei falsch sind und zurückgewiesen werden.

Da der Import alle bisherigen Daten aus den Decks, aber auch die der Teilnehmer löscht, muss eine Bestätigung aktiviert werden, um den Import zu erzwingen.';
$string['importadvice'] = 'Beim Importieren eines neuen Kartensatzes entfernen Sie alle alten Kartensets zusammen mit den vorherigen Infos über die Spiele aller Nutzer.';
$string['nousers'] = 'Keine Teilnehmer in diesem Kurs.';
$string['remindusers'] = 'Teilnehmer erinnern';
