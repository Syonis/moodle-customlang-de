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
 * @subpackage verbalfeedback
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowundodecline'] = 'Teilnehmer erlauben, das Einreichen eines abgelehnten Feedbacks rückgängig zu machen';
$string['allparticipants'] = 'Alle Kursteilnehmer';
$string['errorcannotviewallreports'] = 'Sie können nicht die Bewertungen anderer Teilnehmer sehen.';
$string['errornotingroup'] = 'Sie müssen Mitglied einer Gruppe sein, um an dieser verbalen Feedback-Aktivität teilnehmen zu können. Bitte kontaktieren Sie Ihre Trainer.';
$string['instancenotready'] = 'Klicken Sie auf die Schaltfläche „Verfügbar machen“, um den Fragebogen nach der Bearbeitung der Kriterien an die Trainer freizugeben.';
$string['modulename_help'] = '###### Hauptmerkmale
- Bewertung durch mehrere Trainer: Unterstützt gleichzeitiges Feedback von mehreren Trainern. Die Ergebnisse werden automatisch aggregiert und gemittelt.
- Konfigurierbarer Kriterienkatalog: Bietet eine Vielzahl anpassbarer Kriterien, darunter mehrere Vorlagen. Gewichtungen können angepasst und Kriterien durch Zuweisung einer Gewichtung von 0 % ausgeschlossen werden.
- Flexible Feedback-Eingabe: Trainer können vordefinierte Textblöcke in Feedback-Felder einfügen und diese später zur Personalisierung bearbeiten.
- Private Kommentare: Ermöglicht Dozenten, private Notizen hinzuzufügen, die für Teilnehmer nicht sichtbar sind.
- Teilnehmerfreundliche Ergebnisse: Bietet eine attraktive und übersichtliche Darstellung des Feedbacks.

###### Anwendungsmöglichkeiten
- Bewertung von Präsentationen: Bewerten Sie studentische Präsentationen systematisch anhand gewichteter Kriterien und vorformulierter Feedback-Sätze
- Kollaborative Bewertung: Ermöglichen Sie mehreren Trainern, Feedback zu derselben Präsentation zu geben, um Fairness und unterschiedliche Perspektiven zu gewährleisten
- Vorlagenbasierte Bewertung: Verwenden Sie vordefinierte Vorlagen für verschiedene Präsentationstypen oder erstellen Sie benutzerdefinierte Vorlagen für spezifische Kurse
- Konstruktives Feedback: Kombinieren Sie strukturierte Bewertung mit personalisierten Kommentaren für umfassendes Feedback an die Teilnehmer';
$string['modulename_summary'] = 'Unterstützt strukturiertes Feedback von mehreren Trainern mit anpassbaren Kriterien, vordefinierten Kommentaren und klaren, teilnehmerfreundlichen Ergebnissen';
$string['privacy:metadata:verbalfeedback_submission'] = 'Diese Tabelle speichert die Informationen über den Status der verbalen Feedback-Abgaben zwischen den Teilnehmern';
$string['rel_closed'] = 'Geschlossen für Teilnehmer';
$string['rel_open'] = 'Offen für Teilnehmer';
$string['release'] = 'Berichte für Teilnehmer freigeben';
$string['release_close'] = 'Berichte für Teilnehmer schliessen';
$string['releasetype_help'] = 'Ob die Teilnehmer den Bericht über das gegebene Feedback sehen können.
<ul>
<li>Geschlossen für Teilnehmer. Die Teilnehmer können ihren eigenen Feedbackbericht nicht einsehen. Nur diejenigen, die die Möglichkeit haben, die verbale Feedback-Aktivität zu verwalten (z. B. Trainer, Manager, Administratoren), können die Feedback-Berichte der Teilnehmer einsehen.</li>
<li>Offen für Teilnehmer. Die Teilnehmer können ihren eigenen Feedbackbericht jederzeit einsehen.</li>
<li>Manuelle Freigabe. Teilnehmer können ihren eigenen Feedbackbericht einsehen, wenn sie von einer/m Nutzer/in freigegeben werden, die/der die Fähigkeit hat, die Aktivität für verbales Feedback zu verwalten.</li>
<li>Freigabe nach Abschluss der Aktivität. Die Teilnehmer können ihren eigenen Feedback-Bericht einsehen, nachdem die Aktivität beendet wurde.</li>
</ul>';
$string['teachers'] = 'Trainer';
$string['verbalfeedback:view_all_reports'] = 'Verbales Feedback-Berichte aller Teilnehmer anzeigen';
