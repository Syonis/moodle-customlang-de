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
 * @subpackage aiescape
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowstudentreview'] = 'Teilnehmer dürfen eigene Versuche ansehen';
$string['allowstudentreview_help'] = 'Wenn aktiviert, können Teilnehmer auf der Aktivitätsseite eine schreibgeschützte Wiedergabe ihrer früheren Versuche ansehen.';
$string['buttonusagelimit_help'] = 'Wie oft Teilnehmer diese Schaltfläche während eines Versuchs höchstens nutzen dürfen. Leer lassen für unbegrenzte Nutzung.';
$string['choiceretrylimit_desc'] = 'Wenn die KI für einen Zug nicht die geforderten Auswahlmöglichkeiten liefert, fordert Moodle sie so oft erneut zu einer vollständigen, korrekt formatierten Antwort auf, bevor aufgegeben wird. Bleibt dies erfolglos, wird Teilnehmer statt erfundener Auswahlmöglichkeiten eine einzelne Option „Freier Zug“ angeboten.';
$string['defaultbuttonssection_desc'] = 'Legen Sie bis zu fünf voreingestellte Schaltflächen fest, die Trainer pro Aktivität aktivieren können. Lassen Sie die Beschriftung leer, um einen Platz zu deaktivieren.';
$string['defaultbuttonusagelimit_desc'] = 'Standardmäßige maximale Anzahl, wie oft diese voreingestellte Schaltfläche pro Versuch genutzt werden darf. Leer lassen für unbegrenzt. Trainer können diesen Wert beim Aktivieren der Schaltfläche in einer Aktivität überschreiben.';
$string['flagkeywords_help'] = 'Ein Schlüsselwort oder eine Wortgruppe pro Zeile. Frei eingegebene Antworten von Teilnehmern (Modus Freitext oder Kombination), die einen Treffer enthalten (ohne Beachtung der Groß-/Kleinschreibung), werden im Versuchsbericht zur Prüfung durch Trainer markiert. Leer lassen, um die Funktion zu deaktivieren.';
$string['gamemode_help'] = 'Legt fest, wie Teilnehmer der KI antworten. Multiple Choice zeigt beschriftete Auswahlschaltflächen. Freitext bietet ein Texteingabefeld. Kombination zeigt beides.

Hinweis: In den Modi Freitext und Kombination wird jede frei eingegebene Antwort vom KI-Modell selbst bewertet. Diese Bewertung ist nur eine Empfehlung – wer es darauf anlegt, kann das Modell mit geschickt formulierten Eingaben beeinflussen. Diese Modi eignen sich daher am besten für formative Aktivitäten (mit geringer Tragweite). Der Fortschritt im Modus Multiple Choice wird vollständig auf dem Server ermittelt und lässt sich so nicht beeinflussen.';
$string['gameopenclose_help'] = 'Teilnehmer können Versuche nur zwischen Start- und Enddatum beginnen und spielen. Versuche, die zum Enddatum noch laufen, werden automatisch abgebrochen (mit Teilbewertung, wenn „Teilbewertung bei Abbruch vergeben“ aktiviert ist). Trainer und Manager können die Aktivität jederzeit in der Vorschau ansehen.';
$string['gamestyle_help'] = 'Legt fest, wie sich die KI präsentiert. Im Stil Erzählung erzählt die KI eine Geschichte und die Teilnehmer führen Handlungen aus. Im Stil Persona spielt die KI eine benannte Figur und die Teilnehmer führen ein Gespräch mit ihr – die Auswahlschaltflächen werden zu Gesprächsoptionen, die der Persona gesagt werden.';
$string['maxattempts_help'] = 'Wie oft Teilnehmer diese Aktivität versuchen dürfen. Wählen Sie „Unbegrenzt“, um beliebig viele Wiederholungen zu erlauben.';
$string['modulename_help'] = 'Die Aktivität KI-Escape-Room versetzt Teilnehmer in eine KI-gesteuerte Geschichte oder ein Szenario. Die Teilnehmer interagieren mit der KI, um ein festgelegtes Ziel zu erreichen, und erhalten nach Abschluss eine Bewertung.';
$string['nousers'] = 'Bisher hat niemand diese Aktivität versucht und es sind keine Teilnehmer eingeschrieben.';
$string['partialscoreonquit_help'] = 'Wenn aktiviert, erhalten Teilnehmer, die einen Versuch vorzeitig abbrechen, eine Bewertung entsprechend ihrem Fortschritt zum Zeitpunkt des Abbruchs (erreichte Schritte ÷ erforderliche Schritte × Maximalbewertung). Wenn deaktiviert, bringt ein Abbruch keine Bewertung.';
$string['personaname_help'] = 'Der Name der Figur, die die KI spielt (z. B. „Professor Aldric“ oder „Der Händler“). Wird den Teilnehmern im Gespräch angezeigt.';
$string['presetbuttonssection_help'] = 'Von der Website-Administration konfigurierte Schaltflächen. Aktivieren Sie diejenigen, die Sie den Teilnehmern anbieten möchten.';
$string['previewhoverhints_help'] = 'Wenn aktiviert, wird beim Überfahren einer Auswahlschaltfläche mit der Maus angezeigt, ob sie gut, neutral oder schlecht ist. Das gilt nur für Personen, die Berichte ansehen dürfen (Trainer und Manager in der Vorschau) – echte Teilnehmer sehen dies nie. Im Modus Freitext nicht anwendbar.';
$string['privacy:metadata:aiescape_attempts'] = 'Aufzeichnungen zu jedem Versuch von Teilnehmern, einschließlich Status und Fortschritt.';
$string['privacy:metadata:aiescape_externalai'] = 'Nachrichten der Teilnehmer werden zusammen mit Ausgangslage, Ziel und Gesprächsverlauf der Aktivität an den KI-Provider gesendet, den die Website-Administration konfiguriert hat (Website-Administration → KI → KI-Provider), damit dieser eine Antwort erzeugen kann.';
$string['privacy:metadata:aiescape_flags'] = 'Aufzeichnungen zu Nachrichten, die wegen eines Schlüsselwort-Treffers zur Prüfung durch Trainer markiert wurden.';
$string['showaiproviderinfo'] = 'KI-Konfiguration für Trainer anzeigen';
$string['showaiproviderinfo_desc'] = 'Wenn aktiviert, sehen Trainer auf der Aktivitätsseite den Namen des aktiven KI-Providers und das Modell.';
$string['showchoicecounts'] = 'Anzahl der Auswahlmöglichkeiten für Teilnehmer anzeigen';
$string['showchoicecounts_help'] = 'Wenn aktiviert, wird den Teilnehmern auf der Aktivitätsseite angezeigt, wie viele gute, neutrale und schlechte Auswahlmöglichkeiten pro Zug angeboten werden. Im Modus Freitext nicht anwendbar.';
$string['showgoal_help'] = 'Wenn aktiviert, wird das Ziel den Teilnehmern auf der Aktivitätsseite angezeigt – ähnlich wie eine Kursseite die Beschreibung einer Aktivität anzeigen kann.';
$string['showpremise_help'] = 'Wenn aktiviert, wird die Ausgangslage den Teilnehmern auf der Aktivitätsseite angezeigt – ähnlich wie eine Kursseite die Beschreibung einer Aktivität anzeigen kann.';
$string['showprogress_help'] = 'Wenn aktiviert, sehen Teilnehmer einen Fortschrittsbalken, der anzeigt, wie viele Schritte sie auf dem Weg zum Ziel bereits geschafft haben.';
