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
 * @package    qtype
 * @subpackage vplquestion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answertemplate_help'] = 'Schreiben Sie hier Code, der im Antwortformular der Teilnehmer vorausgefüllt werden soll.';
$string['deletesubmissions_help'] = 'Ob Abgaben in VPL Fragen, die im VPL gemacht wurden, bei der Auswertung der Frage entfernt werden sollen.<br>
ACHTUNG: Dies löscht alle Abgaben der betroffenen Teilnehmer im Basis VPL wenn die Frage ausgewertet wird. Stellen Sie sicher, dass das Basis VPL nur für VPL Fragen verwendet wird.';
$string['gradingmethod_help'] = 'Bewertungsmethode für diese Frage festlegen.
<ul><li>Wenn "Alles oder nichts" gewählt ist, erhalten die Teilnehmer entweder 100% oder 0% auf die Auswertung dieser Frage, abhängig davon, ob alle Teilbereiche richtig beantwortet wurden oder nicht.</li>
<li>Wenn "Skalierung" gewählt ist, sakliert die Bewertung für die Frage mit der Bewertung im VPL.</li></ul>';
$string['noanswertag'] = 'Benötigter {{ANSWER}} Tag nicht gefunden. Bitte fügen Sie die Vorlage, in der der Code der Teilnehmer eingefügt werden soll hinzu.';
$string['pluginname_help'] = 'VPL Fragen ermöglichen das Erstellen von einfachen Programmierübungen.<br>
Sie basieren auf einem VPL, aber das Design ist in der Teilnehmer-Ansicht einfacher gestaltet.';
$string['pluginnamesummary'] = 'VPL Fragen ermöglichen das Erstellen von einfachen Programmierübungen.<br>
Sie basieren auf einem VPL, aber das Design ist in der Teilnehmer-Ansicht einfacher gestaltet.';
$string['precheckpreference_help'] = 'Legt fest ob die Teilnehmer Zugang zu einem "Vorabprüfung"-Button (mit unbegrenzter Nutzung) während des Frageversuchs haben.
<ul><li>"Keine Vorabprüfung": Es wird kein "Vorabprüfung"-Button zur Verfügung gestellt.</li>
<li>"Vorabprüfung ist Debug": Der "Vorabprüfung-Button agiert als "Debug"-Button in einem VPL. Bitte beachten Sie, dass dieser keine grafische Oberfläche bereitstellt.</li>
<li>"Vorabprüfung verwendet die gleichen ausführbaren Dateien wie Prüfung": Der "Vorabprüfung"-Button prüft die Antwort mit den oben angeführten ausführbaren Dateien.</li>
<li>"Vorabprüfung verwendet eigene ausführbare Dateien": Sie können spezielle ausführbare Dateien für die Vorabprüfung festlegen. Dies ist die empfohlene Option, da Sie einen Teilbereich der Tests festlegen können, die den Teilnehmern während des Versuchs zur Verfügung stehen.</li></ul>';
$string['templatecontext_help'] = 'Sie können hier den Code ändern, der verarbeitet wird (z.B. den Inhalt der erforderlichen Datei).<br>
Der "{{ANSWER}}" Tag wird durch die Antwort der Teilnehmer ersetzt. Sie können den Tag an die gewünschte Stelle verschieben, aber nicht entfernen.';
$string['vplnotavailablewarning'] = 'Warnung! Das VPL, auf dem diese Frage basiert, ist für Teilnehmer nicht verfügbar. Diese Frage könnte nicht richtig funktionieren.';
