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
 * @subpackage grouptool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allow_multiple_help'] = 'Ermöglicht es Teilnehmern, in mehr als 1 Gruppe zur gleichen Zeit angemeldet zu sein. Sie müssen spezifizieren wie viele Gruppen zumindest und maximal gewählt werden müssen.';
$string['allow_reg_help'] = 'Ermöglicht es Teilnehmern sich selbst zu einer (oder mehrerer) der unten aktivierten Gruppen anzumelden.';
$string['allow_unreg_help'] = 'Ermöglicht Teilnehmer sich von Gruppen ab- bzw. zu anderen Gruppen umzumelden, solange sie sich innerhalb eines (optionalen) Zeitlimits befinden.';
$string['alwaysshowdescription_help'] = 'Wenn die Option deaktiviert ist, wird die Beschreibung für Teilnehmer nur ab dem Anmeldebeginn angezeigt.';
$string['asterisk_marks_moodle_registrations'] = 'Teilnehmer mit führendem Asterisk/Stern sind bereits in den entsprechenden Moodle-Gruppen angemeldet.';
$string['availabledate_help'] = 'Beginn des Anmeldezeitraums. Nach diesem Datum ist es Teilnehmer möglich sich selbst zu den ausgewählten Gruppen anzumelden (falls dies zugelassen ist).';
$string['cfg_allow_multiple_desc'] = 'Ermöglicht Teilnehmer sich standardmäßig in mehr als 1 Gruppe zur gleichen Zeit zu befinden.';
$string['cfg_allow_reg_desc'] = 'Ermöglicht es Teilnehmern standardmäßig sich selbst anzumelden.';
$string['cfg_allow_unreg_desc'] = 'Erlaubt es Teilnehmern standardmäßig sich selbst, innerhalb der Deadline, von Gruppen ab- und zu anderen Gruppen umzumelden.';
$string['cfg_choose_max_desc'] = 'In wie viele Gruppen sollen Teilnehmer standardmäßig maximal zeitgleich angemeldet sein dürfen?';
$string['cfg_choose_min_desc'] = 'In wie vielen Gruppen sollen Teilnehmern standardmäßig minimal angemeldet sein?';
$string['cfg_force_dereg_desc'] = 'Aktivieren Sie das Häkchen, wenn Sie Teilnehmer sowohl von der Moodle Standardgruppe als auch von der ausgewählten Gruppe der Gruppenverwaltung austragen möchten.';
$string['cfg_force_importreg_desc'] = 'Erzwingt die Anmeldung innerhalb der Gruppenverwaltungsinstanz für Teilnehmer, die via Gruppenverwaltung in Moodle-Gruppen importiert wurden.';
$string['cfg_groups_queues_limit_desc'] = 'Gibt an wie viele Teilnehmer standardmäßig zeitgleich in der Warteliste einer Gruppe gereiht sein dürfen.';
$string['cfg_ifgroupdeleted_desc'] = 'Sollen in Moodle gelöschte Gruppen standardmäßig für die jeweiligen Instanzen wiederhergestellt oder aus den jeweiligen Instanzen (inkl. aller Anmeldungen & Wartelisten in der Gruppenverwaltung, etc.) entfernt werden? Man beachte: Wenn „Gruppe erneut erstellen“ ausgewählt wurde, werden die Gruppen unmittelbar nach dem Löschvorgang unter „Kurs-Administration / Teilnehmer / Gruppe“ wiederhergestellt.';
$string['cfg_importfields_desc'] = 'Gibt an mit welchen Feldern der Teilnehmer-Tabelle beim Import/ beim Austragen verglichen werden soll. Die Felder werden sequenziell durchsucht, bis möglichst genau ein einziger Treffer gefunden wurde. Mögliche/Sinnvolle Werte sind z.B.: username, idnumber, email. ACHTUNG: es erfolgt keine Kontrolle auf richtige Schreibweise. Erlaubte Zeichen: a-z, A-Z und \',\'';
$string['cfg_max_queues_desc'] = 'Gibt an in wie vielen Gruppen Teilnehmern standardmäßig zeitgleich in der Warteliste gereiht sein dürfen.';
$string['cfg_users_queues_limit_desc'] = 'Gibt an in wie vielen Gruppen Teilnehmern standardmäßig zeitgleich in der Warteliste gereiht sein dürfen.';
$string['define_amount_groups_help'] = 'Definiere Gruppenanzahl N - Es wird ausgewählt aus welcher Rolle Teilnehmer für die Gruppenerzeugung benutzt werden sollen und die gewünschte Anzahl an Gruppen im Textfeld angegeben. Im Namenschema wird das Schema für die Gruppennamen angegeben. Dabei können folgende Tags verwendet werden:
<ul>
<li># (wird durch die Gruppennummer ersetzt)</li>
<li>@ (wird durch eine Buchstabenrepräsentation der Gruppennummer ersetzt)</li>
</ul>
Die betroffenen Teilnehmer werden automatisch auf die angegebene Anzahl an Gruppen verteilt.';
$string['define_amount_members_help'] = 'Definiere Mitgliederanzahl M - Hier werden die ideale Gruppenmitgliedsanzahl sowie Namensschema und Rolle für die Teilnehmer-auswahl angegeben. Die benötigte Gruppenanzahl wird automatisch errechnet. Wahlweise können kleine Gruppen (entspricht weniger als 70 % Füllung) auf die anderen Gruppen aufgeteilt werden.';
$string['duedate_help'] = 'Ende des Anmeldezeitraums. Nach diesem Datum können sich Teilnehmer nicht mehr selbstständig anmelden und Trainer erhalten u.a. Zugriff auf die Wartelistenauflösung.';
$string['eventuserimported'] = 'Teilnehmer importiert';
$string['forceregistration_help'] = 'Beachten Sie, dass die Gruppen der Gruppenverwaltung sich grundlegend von den Moodle Standardgruppen des Kurses unterscheiden. Aktivieren Sie das Häckchen, wenn Sie Teilnehmer sowohl in die Moodle Standardgruppe als auch in die ausgewählte Gruppe der Gruppenverwaltung importieren möchten.';
$string['global_userstats'] = '<strong>{$a->reg_users}</strong> von <strong>{$a->users}</strong> Teilnehmer sind angemeldet. <strong>{$a->notreg_users}</strong> (noch) ohne Anmeldung.';
$string['groupstatus_help'] = 'Der Status der Gruppe ist farbig:<ul><li>Grün - aktive Gruppe. Die Gruppe ist dieser Gruppenverwaltung zugeordnet und steht Teilnehmern (bei aktivierter Selbstanmeldung) zur Anmeldung zur Verfügung.</li><li>Grau - inaktive Gruppe. Die Gruppe wird in dieser Gruppenverwaltung nicht verwendet.</li></ul>Mit Klick auf das Symbol können Sie den Status der Gruppe direkt ändern.';
$string['grouptool:move_students'] = 'Verschiebe Teilnehmer in andere Gruppen.';
$string['grouptool:register_students'] = 'Melde andere Teilnehmer in aktiven Gruppen unter Zuhilfenahme der Gruppenverwaltung an. (Wird auch zum Auflösen von Wartelisten benötigt)';
$string['grouptool:unregister_students'] = 'Teilnehmer von Gruppen unter Zuhilfenahme der Gruppenverwaltung austragen.';
$string['grouptool:view_regs_course_overview'] = 'Zeige eine Teilnehmer-Liste mit der Information, wer in welcher aktiven Gruppe angemeldet/in der Warteliste gereiht ist.';
$string['grouptool:view_regs_course_view'] = 'Zeige eine Teilnehmer-Liste mit der Information, wer in welcher aktiven Gruppe angemeldet/in der Warteliste gereiht ist.';
$string['ifgroupdeleted_help'] = 'Sollen gelöschte Kursgruppen für die Gruppenverwaltung wiederhergestellt oder alle Referenzen (aktive Gruppe/Anmeldungen/Warteliste) gelöscht werden? Man beachte: Wenn „Gruppe erneut erstellen“ ausgewählt wurde, werden die Gruppen unmittelbar nach dem Löschvorgang unter „Kurs-Administration / Teilnehmer / Gruppe“ wiederhergestellt.';
$string['ignoring_not_found_users'] = 'Zumindest 1 Teilnehmer/in kann nicht gefunden werden! Alle nicht gefundenen Teilnehmer werden ignoriert!';
$string['import_desc'] = 'Importiere Teilnehmer per Liste von ID-Nummern in bestimmte Gruppe.';
$string['importbutton'] = 'Teilnehmer hinzufügen';
$string['includedeleted'] = 'auch gelöschte Teilnehmer';
$string['includedeleted_help'] = 'Wenn aktiviert werden gelöschte Teilnehmer nicht aus der Liste herausgefiltert. Gelöschte Teilnehmer-Accounts können während des Import-Prozesses NICHT automatisch in den Kurs eingeschrieben werden.';
$string['includeonlyactiveenrol_help'] = 'Diese Option legt fest, dass gesperrte Nutzer keiner Gruppe zugeteilt werden.';
$string['modulename_help'] = 'Die Gruppenverwaltung umfasst mehrere Aufgabenbereiche in Verbindung mit Gruppen:<ul><li>Sie erlaubt es Gruppen auf verschiedene Art und Weise (Angabe von Anzahl an Gruppen/Gruppenmitgliedern, 1-Personen-Gruppen) sowie Gruppierungen für jede Kursgruppe zu erzeugen.</li><li>Weiters kann sie benutzt werden um es Teilnehmer zu ermöglichen sich selbst innerhalb eines gewissen Zeitraumes zu Gruppen anzumelden.</li><li>Mit ihrer Hilfe lassen sich Gruppenbenotungen durchführen, d.h. eine Aktivitätsbenotung von einer Teilnehmerin/einem Teilnehmer auf andere Gruppenmitglieder zu übertragen.</li><li>Es ist auch möglich Gruppen schnell zu befüllen, indem Teilnehmer mittels Liste mit Matrikelnummern in eine bestimmte Gruppe importiert werden. Ebenfalls ist auf diese Weise das Austragen von Teilnehmern aus Gruppen möglich.</li><li>Überblick über alle Gruppen sowie deren Anmeldungen/Wartelisten/etc in verschiedene Formate (PDF/XLSX/ODS/TXT) exportierbar.</li><li>Exportierbare Liste aller im Kurs eingeschriebener Teilnehmer mit ihren Gruppenanmeldungen, Wartelistenplätzen, etc. (ebenfalls exportierbar).</li></ul><p>(!) Beachten Sie, dass die Gruppen der Gruppenverwaltung sich grundlegend von den Moodle Standardgruppen des Kurses unterscheiden. Um Konsistenz zwischen den Standardgruppen und den Gruppenverwaltungsgruppen zu bewahren, stellen Sie alle Parameter unter dem Abschnitt „Verhalten bei Änderungen in Moodle-Gruppen“ mit Hilfe des Drop Down Menüs auf „Folge Änderungen“ ein.</p><p><a href="https://academic-moodle-cooperation.org/anleitungen/gruppenverwaltung-selbstanmeldung-zu-gruppen-einrichten/" target="_blank">Anleitung "Gruppenverwaltung: Selbstanmeldung einrichten"</a></p><p><a href="https://academic-moodle-cooperation.org/anleitungen/gruppenverwaltung-bewertungen-uebertragen/" target="_blank">Anleitung "Gruppenverwaltung: Bewertungen übertragen"</a></p>
<p><a href="https://academic-moodle-cooperation.org/anleitungen/gruppenverwaltung-wartelisten-und-mehrfache-anmeldungen/" target="_blank">Anleitung "Gruppenverwaltung: Wartelisten und mehrfache Anmeldungen"</a></p><p><a href="https://academic-moodle-cooperation.org/anleitungen/gruppenverwaltung-gruppenadministration/" target="_blank">Anleitung "Gruppenverwaltung: Gruppenadministration"</a></p><p><a href="https://youtu.be/7LtVx8P7RGY?si=k30ezb3YLNMBHypF" target="_blank" rel="noopener">Promovideo: Gruppenverwaltung</a></p><p><a href="https://youtu.be/TlMupVy5oTc?si=BARltyrYQa0JDsW8" target="_blank" rel="noopener">Promovideo: Gruppenbewertung</a></p>';
$string['move_help'] = 'Verwenden Sie das "Verschieben"-Icon um die Reihenfolge der Gruppen zu ändern. Die Gruppen werden Teilnehmer in dieser Reihenfolge angezeigt.';
$string['namingscheme_help'] = '<p>Das Namensschema definiert, wie Gruppen beim Erstellen automatisch benannt werden. </p>
<p>Hierbei ist folgendes zu beachten:<br />
<ol><li>Der Gruppenname muss immer einzigartig in Ihrem Kurs sein (d.h. es können nicht mehrere Gruppen idente Namen tragen).</li>
<li>Sollen mehrere Gruppen hinzugefügt werden, müssen zwingend "Tags" verwendet werden, die die Gruppen eindeutig bezeichnen.</li></ol></p>
<p>Jeder "Tag" wird für die Gruppennamen durch Teilnehmer-Informationen ersetzt. Die Tags in [] sind mit Teilnehmern-Daten verknüpft und die # und @ werden durch eine laufende Nummer bzw. alphabetische Repräsentation dieser ersetzt. Wenn JavaScript aktiviert ist, können Sie durch Klicken auf die Tags, diese dem Namensschema anhängen. Bitte beachten Sie, dass jeder Gruppenname innerhalb des Kurses einzigartig sein muss und ändern Sie bei entsprechenden Problemen das Namensschema!</p>';
$string['no_users_to_display'] = 'Keine Teilnehmer anzuzeigen!';
$string['nogroupscreated'] = 'Keine Gruppen erstellt, weil sich keine Teilnehmer im Kurs befinden.';
$string['nosmallgroups_help'] = 'Wenn aktiviert, wird sichergestellt, dass jede Gruppe zumindest zu 70% der angegebenen Größe gefüllt ist! Die Teilnehmer der unter Umständen vorhandenen letzten kleineren Gruppe, werden auf die übrigen Gruppen aufgeteilt. Es kann daher vorkommen, dass diese Gruppen mehr Mitglieder als spezifiziert haben!';
$string['number_of_students'] = 'Anzahl an Teilnehmer';
$string['privacy:metadata:enrolexplanation'] = 'Die Gruppenverwaltung schreibt noch nicht eingeschriebene Teilnehmer in den Kurs ein, damit diese beim Import einer Gruppe hinzugefügt werden können.';
$string['privacy:metadata:gradesexplanation'] = 'Die Gruppenverwaltung kann die Bewertungen von Teilnehmern auf deren ganze Gruppe kopieren.';
$string['privacy:metadata:messageexplanation'] = 'Die Gruppenverwaltung verschickt Nachrichten an Teilnehmer, wenn diese in einer Gruppe angemeldet werden indem sie von der Warteliste nachrücken.';
$string['queuesgrp_help'] = 'Wenn Wartelisten aktiviert sind, werden Teilnehmer, die sich in einer vollen Gruppe anmelden wollen, auf deren Warteliste gesetzt bis sie durch die Abmeldung eines anderen in die Gruppe nachrücken. Nach der Deadline, kann der/die Trainer/in die Wartelisten auflösen, wobei die Gruppen in der Reihenfolge der Sortierung in der Gruppenliste mit den restlichen Wartelisteneinträgen aufgefüllt werden. Man kann die gleichzeitigen Wartelistenplätze für Teilnehmer begrenzen.<br />Begrenzt die gleichzeitig einnehmbaren Plätze in Wartelisten pro Teilnehmer/in in dieser Gruppenverwaltung.';
$string['queuespresent'] = 'Es sind bereits Teilnehmer in Wartelisten eingetragen! Diese werden gelöscht, wenn Sie fortfahren. Speichern Sie erneut um fortzufahren!';
$string['queuespresenterror'] = 'Es sind bereits Teilnehmer in Wartelisten eingetragen. Sie können diese nicht deaktivieren, bis die Wartelisten aufgelöst wurden.';
$string['require_registration_help'] = 'Die Aktivität wird als abgeschlossen markiert, wenn Teilnehmer zumindest in der definierten Anzahl von Gruppen angemeldet sind. Registrierungen in Wartelisten werden von der Regel nicht berücksichtigt. Wenn die Zahl höher als 1 ist, muss "Mehrfache Anmeldungen zulassen" aktiviert sein und "Maximalanzahl zu wählender Gruppen" muss höher oder gleich diesem Wert sein.';
$string['reset_transparent_unreg'] = 'Trage Teilnehmer aus Moodle-Gruppen aus';
$string['show_members_help'] = 'Ermöglicht es Teilnehmern (unter gewissen Umständen) zu sehen, wer sich bereits in Gruppen registriert hat.<br />
<ul>
    <li><strong>Nein:</strong> zeige keine Gruppenmitglieder</li>
    <li><strong>Alle - nach Ablauf des Anmeldeendes:</strong> zeige Mitglieder aller Gruppen nach Ablauf des Anmeldeendes</li>
    <li><strong>Nur eigene - nach Ablauf des Anmeldeendes:</strong> zeige die Mitglieder der eigenen Gruppe(n) nach Ablauf des Anmeldeendes</li>
    <li><strong>Nur eigene - nach eigener Anmeldung:</strong> zeige die Mitglieder der eigenen Gruppe(n) nach der Anmeldung</li>
    <li><strong>Ja:</strong> zeige alle Mitglieder der Gruppen</li>
</ul>';
$string['toomanyregs'] = 'Achtung! In mindestens einer der Gruppen wird die eingetragene Gruppengröße bereits überschritten.<br />Bevor Sie die neuen Einstellungen der Gruppengröße speichern können, reduzieren Sie die Anzahl der angemeldeten Teilnehmer in den Gruppen.';
$string['unregfrommgroups_help'] = 'Aktivieren Sie das Häkchen, wenn Sie Teilnehmer sowohl von der Moodle Standardgruppe als auch von der ausgewählten Gruppe der Gruppenverwaltung abmelden möchten.';
$string['unregister_desc'] = 'Trage Teilnehmer per Liste von ID-Nummern aus bestimmten Gruppen aus.';
$string['unregister_progress_unregister'] = 'Teilnehmer austragen';
$string['unregisterbutton'] = 'Teilnehmer austragen';
$string['use_queue_help'] = 'Teilnehmer können sich selbst für bereits volle Gruppen in einer Warteliste registrieren. Diese Einstellung kann nur verwendet werden, wenn die Selbstanmeldung zugelassen und eine Gruppengröße gesetzt wurde.';
$string['user_is_deleted'] = 'Der gefundene Teilnehmer-Account (ID <strong>{$a->id}</strong>, Name <strong>{$a->fullname}</strong>) ist bereits gelöscht. Eine Einschreibung ist deshalb nicht möglich.';
$string['userlist_alt'] = 'Zeige Liste aller Teilnehmer und deren Anmeldungen. Exportiere Daten über Teilnehmer und deren Gruppen in verschiedene Formate (PDF, plain text, Excel, etc.).';
$string['users_tab'] = 'Teilnehmer';
$string['users_tab_alt'] = 'Öffne Teilnehmer';
