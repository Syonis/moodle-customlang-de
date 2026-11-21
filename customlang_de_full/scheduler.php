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
 * @subpackage scheduler
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['appointmentmode_help'] = '<p>Sie können hier zwischen einigen Varianten wählen, wie Verabredungen getroffen werden können.</p>
<p><ul>
<li><strong>"<emph>n </emph>Termin(e) festlegen in diesem Planer": </strong>Teilnehmer können nur eine feste Anzahl von Terminen in dieser Aktivität buchen. Selbst wenn die/der Trainer/in sie als "gesehen" markiert, wird es den die/den Teilnehmern nicht erlaubt, weitere Treffen zu buchen. Der einzige Weg, die Fähigkeit einer/eines Teilnehmer/in zum Buchen zurückzusetzen ist, die alten "gesehen" Einträge zu löschen.</li>
<li><strong>"<emph>n </emph>Termin(e) festlegen auf ein Mal": </strong>Teilnehmer können eine feste Anzahl von Terminen buchen. Sobald das Treffen vorbei ist und die/der Trainer/in die/den Teilnehmer/in als "gesehen" markiert, kann die/der Teilnehmer/in weitere Termine buchen. Doch die/der Teilnehmer/in ist zu jedem Zeitpunkt auf <emph>n</emph> "offene" (noch nicht gesehen) Termine beschränkt.
</li>
</ul>
</p>';
$string['attendedlbl'] = 'Anzahl Teilnehmer, die wahrgenommen haben';
$string['bookingformoptions'] = 'Buchungsformular und von Teilnehmern bereitgestellte Daten';
$string['bookinginstructions_help'] = 'Dieser Text wird den Teilnehmern vor der Buchung angezeigt. Der Text kann anleiten, wie das optionale Mitteilungsfeld ausgefüllt wird oder welche Dateien hochgeladen werden sollen.';
$string['displayfrom'] = 'Zeitfenster für Teilnehmer sichtbar ab';
$string['exclusivity_help'] = '<p>Sie können die maximale Anzahl von Teilnehmern festlegen, die sich für ein bestimmtes Zeitfenster einschreiben können.</p>
<p>Mit dem Wert 1 (Standard) kann das Zeitfenster nur für einzelne Teilnehmer gebucht werden. Mit einem anderen Wert (z.B. etwa 3) kann das Zeitfenster von mehreren Teilnehmern (bis zu 3) gebucht werden.</p>
<p>Wenn die Option deaktiviert ist, kann das Zeitfenster ohne Einschränkungen gebucht werden und nie als "Voll" angesehen.</p>';
$string['exclusivityoverload'] = 'Das Zeitfenster hat {$a} gebuchte Teilnehmer, mehr als durch diese Einstellung erlaubt.';
$string['exclusivitypositive'] = 'Die Anzahl der Teilnehmer pro Zeitfenster muss 1 oder mehr sein.';
$string['field-maxstudents'] = 'Max. Teilnehmer';
$string['field-teachernote'] = 'Vertrauliche Bemerkung (nur Trainer)';
$string['forcourses'] = 'Teilnehmer in Kursen auswählen';
$string['gradingstrategy_help'] = 'In einem Planer, in welchem Teilnehmer mehrere Treffen haben können, wählen Sie, wie die Bewertung aggregiert wird.
    Die Bewertungen können entweder <ul><li>die durchschnittliche Bewertung oder</li><li>die beste Bewertung</li></ul> welche die/der Teilnehmer/in erreicht hat, anzeigen.';
$string['groupbookings_help'] = 'Erlaubt Teilnehmer ein Zeitfenster für ihre gesamte Gruppe zu buchen.
(Beachten Sie, dass diese Einstellung losgelöst ist vom "Gruppenmodus", welcher die Sichtbarkeit der Zeitfenster, die die Teilnehmer sehen können, kontrolliert.)';
$string['groupmodeyourgroups'] = 'Gruppenmodus: {$a->groupmode}. Nur Teilnehmer von {$a->grouplist} können Termine auswählen.';
$string['guardtime_help'] = 'Die Änderungssperre verhindert, dass Teilnehmer ihre Buchung kurz vor dem Termin ändern.
<p>Wenn die Änderungssperre aktiviert und beispielsweise auf 2 Stunden eingestellt ist, können Teilnehmer keinen neuen Termin buchen, der in weniger als 2 Stunden beginnt. Sie können aber auch keinen bestehenden Termin löschen, der in weniger als 2 Stunden beginnt.</p>';
$string['howtoaddstudents'] = 'Um Teilnehmer zu einem Planer globaler Reichweite hinzuzufügen, verwenden Sie die Einstellungen der Rollen für das Modul.<br/>Sie können auch die Rollendefinitionen des Moduls verwenden, um die Anwesenheiten Ihrer Teilnehmer zu definieren.';
$string['ignoreconflicts_help'] = 'Wenn dieses Feld angekreuzt ist, wird das Zeifenster zum gewählten Zeitpunkt verschoben, selbst falls andere Zeitfenster zur gleichen Zeit existieren. Dies kann zu überlappenden Terminen für einige Trainer oder Teilnehmer führen und sollte daher mit Vorsicht verwendet werden.';
$string['maxstudentlistsize_desc'] = 'Die maximale Länge der Teilnehmerliste ohne Termin, die für Trainer/innnen angezeigt wird. Wenn mehr Teilnehmer ohne Termin sind, wird die Liste nicht angezeigt.';
$string['maxstudentsperslot'] = 'Maximale Anzahl von Teilnehmern pro Zeitfenster';
$string['missingstudents'] = '{$a} Teilnehmer müssen noch einen Termin festlegen';
$string['missingstudentsmany'] = '{$a} Teilnehmer müssen noch einen Termin festlegen. Aufgrund der Grösse wird keine Liste angezeigt.';
$string['modeintro'] = 'Teilnehmer können';
$string['modulename_help'] = 'Die Aktivität "Planer" hilft Ihnen bei der Planung von Terminen mit Ihren Teilnehmern.

Trainer geben Zeitfenster für Treffen vor, Teilnehmer wählen dann eines davon in Moodle. Trainer können Resultate - und optional eine Bewertung - eines Treffens im Planer erfassen.

Die Planung von Gruppentermin wird unterstützt. Jedes Zeitfenster kann dabei mehrere Teilnehmer aufnehmen. Optional ist es möglich, Termine auch für ganze Gruppen gleichzeitig zu vereinbaren.';
$string['needteachers'] = 'Es können keine Zeitfenster hinzugefügt werden, da der Kurs keine Trainer hat.';
$string['noexistingstudents'] = 'Keine Teilnehmer vorhanden';
$string['nostudents'] = 'Keine Teilnehmer mit Terminen';
$string['notifications_help'] = 'Wenn diese Option aktiviert ist, werden Trainer und Teilnehmer Benachrichtigungen erhalten, wenn Termine beantragt oder abgesagt werden.';
$string['registeredlbl'] = 'Teilnehmer mit Terminen';
$string['revealteachernotes_desc'] = 'Wenn diese Option ausgewählt ist, werden vertrauliche Trainernotizen (die normalerweise nicht sichtbar sind) den Teilnehmern in Datenexportanfragen, d.h. über die Datenschutz-API, mitgeteilt. Sie sollten sich bei einer individuellen Verwendung dieses Feldes entscheiden, ob es in Datenexporte für Teilnehmer im Rahmen der DSGVO einbezogen werden muss.';
$string['scheduler:attend'] = 'Teilnehmer betreuen';
$string['scheduler:canseeotherteachersbooking'] = 'Buchungen anderer Trainer sehen und browsen';
$string['scheduler:editallattended'] = 'Teilnehmer in allen Terminen als besucht / nicht besucht markieren';
$string['scheduler:seeotherstudentsbooking'] = 'Die Buchung anderer Teilnehmer im Zeitfenster sehen';
$string['scheduler:seeotherstudentsresults'] = 'Die Bewertung anderer Teilnehmer im Zeitfenster sehen';
$string['showemailplain_desc'] = 'In der Trainer-Ansicht: E-Mail-Adressen der Teilnehmer ohne Termin anzeigen';
$string['showparticipants'] = 'Teilnehmer anzeigen';
$string['staffrolename_help'] = 'Name der Rolle, welche die Teilnehmer betreut. Das ist nicht unbedingt ein/e "Trainer/in".';
$string['students'] = 'Teilnehmer';
$string['tab-otherstudents'] = 'Teilnehmer in diesem Zeitfenster';
$string['teachernote'] = 'Vertrauliche Bemerkungen (nur für Trainer sichtbar)';
$string['unregisteredlbl'] = 'Teilnehmer ohne Termin';
$string['uploadmaxsize_help'] = 'Maximale Dateigröße für Uploads von Teilnehmern. Diese Grenze gilt pro Datei.';
$string['usecaptcha_help'] = 'Wenn diese Option aktiviert ist, müssen die Teilnehmer eine Captcha-Sicherheitsfrage lösen, bevor sie eine neue Buchung machen.
Verwenden Sie diese Einstellung, wenn Sie vermuten, dass automatisierte Programme verwendet werden, um verfügbare Slots zu schnappen.
<p>Es wird kein Captcha angezeigt, wenn eine bestehende Buchung bearbeitet wird.</p>';
$string['usenotesstudent'] = 'Termin-Bemerkungen, für Trainer und Teilnehmer/in sichtbar';
$string['usenotesteacher'] = 'Vertrauliche Bemerkung, nur für Trainer sichtbar';
$string['usestudentnotes_help'] = 'Wenn diese Option aktiviert ist, enthält der Buchungsbildschirm ein Textfeld, in dem die Teilnehmer eine Nachricht eingeben können. Beschreiben Sie in den "Buchungsanweisungen" oben, welche Informationen nötig sind..';
$string['yesoptional'] = 'Ja, optional für Teilnehmer';
$string['yesrequired'] = 'Ja, Teilnehmer müssen eine Mitteilung eingeben';
