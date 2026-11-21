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
 * @subpackage zoom
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative_hosts'] = 'Alternative Veranstalter';
$string['alternative_hosts_desc'] = 'Mit dieser Einstellung steuern Sie, ob die Option zur Auswahl alternativer Veranstalter in den Aktivitätseinstellungen angezeigt wird oder nicht. Dabei stehen zwei Varianten zur Verfügung: Einmal ein einfaches Eingabefeld welches kommaseparierte E-Mail-Adressen akzeptiert. Und ein Nutzer-Auswahlfeld mit Auto-Vervollständigung welches die einfache Auswahl von Nutzern, welche im Kurs eingeschrieben sind, einen Zoom Account haben und eine der Rollen {$a->roles} haben, ermöglicht. Alternative Veranstalter welche vom Trainer in Zoom direkt hinzugefügt wurden aber im Auswahlfeld in Moodle nicht zur Auswahl stehen, werden trotzdem auf der Zoom Aktivität Übersichtsseite ausgegeben und werden auch im Rahmen der Aktualisierung eines Zoom Meeting aus Moodle heraus nicht überschrieben.';
$string['alternative_hosts_disable'] = 'Alternative Veranstalter deaktivieren';
$string['alternative_hosts_help'] = 'Die Option der alternativen Veranstalter erlaubt es Ihnen, Meetings zu planen und andere Zoom Nutzer zu ermächtigen das Meeting an Stelle von Ihnen zu starten. Diese Nutzer erhalten eine E-Mail von Zoom in welcher Sie informiert werden dass sie als alternative/r Veranstalter/in hinzugefügt wurden und in der ein Link zum Starten des Meetings enthalten ist. Als Eingabeformat geben Sie bitte die E-Mail Adresse(n) der alternativen Veranstalter an. Mehrere E-Mail Adressen separieren Sie bitte mit Kommas ohne Leerzeichen.';
$string['alternative_hosts_inputfield'] = 'Alternative Veranstalter als einfaches Eingabefeld anzeigen';
$string['alternative_hosts_picker'] = 'Alternative Veranstalter als Nutzer-Auswahlfeld mit Auto-Vervollständigung anzeigen';
$string['alternative_hosts_picker_help'] = 'Die Option der alternativen Veranstalter erlaubt es Ihnen, Meetings zu planen und andere Zoom Nutzer zu ermächtigen das Meeting an Stelle von Ihnen zu starten. Diese Nutzer erhalten eine E-Mail von Zoom in welcher Sie informiert werden dass sie als alternative/r Veranstalter/in hinzugefügt wurden und in der ein Link zum Starten des Meetings enthalten ist. Sie können eine/n oder mehrere alternative Veranstalter benennen. Falls Sie eine/n bestimmte/n Nutzer/in in diesem Auswahlfeld nicht finden können, ist diese/r Nutzer/in entweder nicht im Kurs mit einer geeigneten Rolle eingeschrieben oder hat keinen berechtigten Zoom Account.';
$string['alternative_hosts_picker_placeholder'] = 'Nutzer auswählen';
$string['apiendpoint_desc'] = 'Wählen Sie, mit welchem Zoom-API-Endpunkt sich die Zoom-Aktivität verbinden wird. Der globale API Endpunkt sollte für alle Nutzer funktionieren. Der EU (Europäische Union) API-Endpunkt ist ausschließlich für die Nutzung gedacht, welche eine Zoom-Lizenz mit EU-Provisionierung haben. Falls Sie unsicher sind, nutzen Sie bitte den globalen API Endpunkt.';
$string['displayleadtime_desc'] = 'Wenn diese Einstellung aktiviert ist wird die Vorlaufzeit den Nutzern angezeigt. Auf diesem Wege werden Nutzer informiert dass / ab wann sie das Meeting vor dem geplanten Start des Meetings vorab betreten können. Dies kann dazu beitragen, dass Nutzer nicht ständig die Seite neu laden bis sie schließlich beitreten können.';
$string['hostintro'] = '<a target="_blank" href="https://support.zoom.us/hc/de/articles/208220166">Alternative Veranstalter</a> können Zoom Meetings starten und das Wartezimmer verwalten.';
$string['joinbeforehostenable'] = 'Teilnehmer können jederzeit beitreten';
$string['meetingcapacitywarning_desc'] = 'Mit dieser Einstellung können Sie eine Warnung anzeigen lassen, falls der Kurs mehr aktive und eingeschriebene Teilnehmer hat als die Zoom Lizenz des Veranstalters zulässt. Die Warnung wird dem Veranstalter (und den alternativen Veranstaltern) auf der Zoom Aktivitäts-Übersichtsseite angezeigt werden. Sie wird dem Veranstalter empfehlen sich an den Zoom Account Inhaber zu wenden um nötigenfalls eine größere Zoom Lizenz zu erhalten. Sie können diese Nachricht über die Moodle Sprachanpassung anpassen.';
$string['meetingcapacitywarningbodyalthost'] = 'Die Zoom Lizenz des Veranstalters dieses Meetings, {$a->hostname}, hat eine Kapazität von <strong>{$a->meetingcapacity} Meeting Teilnehmer</strong>, aber dieser Kurs hat <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} eingeschriebene und aktive Teilnehmer</a></strong>.';
$string['meetingcapacitywarningbodyrealhost'] = 'Ihre Zoom Lizenz hat eine Kapazität von <strong>{$a->meetingcapacity} Meeting Teilnehmer</strong>, aber dieser Kurs hat <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} eingeschriebene und aktive Teilnehmer</a></strong>.';
$string['meetingcapacitywarningcontactalthost'] = 'Bitte bitten Sie den Veranstalter sich an den Zoom Account Verwalter zu wenden um eine größere Zoom Lizenz zu erhalten, falls alle diese Kursteilnehmer wirklich an Ihrem Meeting teilnehmen sollen.';
$string['meetingcapacitywarningcontactrealhost'] = 'Bitte wenden Sie sich an den Zoom Account Verwalter um eine größere Zoom Lizenz zu erhalten, falls alle diese Kursteilnehmer wirklich an Ihrem Meeting teilnehmen sollen.';
$string['option_authenticated_users_help'] = 'Wenn diese Option aktiviert ist müssen alle Teilnehmer sich mit ihrem Zoom Account autorisieren um das Meeting betreten zu können. Diese Option bezieht sich <em>nicht</em> auf den Login in Moodle.';
$string['option_jbh_help'] = 'Wenn diese Option aktiviert ist werden die Teilnehmer dem Meeting schon vor dem Veranstalter beitreten können. Ebenso können sie beitreten wenn der Veranstalter gar nicht selbst am Meeting teilnimmt. Diese Option schließt sich mit der Option "Wartezimmer" gegenseitig aus, das Aktivieren der einen Option wird die andere deaktivieren.';
$string['option_mute_upon_entry'] = 'Teilnehmer bei Beitritt stummschalten';
$string['option_mute_upon_entry_help'] = 'Wenn diese Option aktiviert ist werden alle Teilnehmer stummgeschaltet wenn Sie dem Meeting beitreten. Die Teilnehmer können sich nach dem Beitritt selbst auf laut schalten.';
$string['option_participants_video_help'] = 'Wenn diese Option aktiviert ist wird das Video der Teilnehmer beim Beitritt zum Meeting aktiviert werden. Aber auch wenn Sie diese Option deaktivieren werden die Teilnehmer ihr Video jederzeit aktivieren können.';
$string['participants'] = 'Teilnehmer';
$string['privacy:metadata:zoom_meeting_participants'] = 'Die Datenbank-Tabelle, welche Informationen über die Teilnehmer des Meetings speichert.';
$string['recordingnotvisible'] = 'Aufzeichnung ist nicht sichtbar. Wenden Sie sich bitte an Ihre Systemadministratoren, wenn Sie der Meinung sind, dass dies ein Fehler ist.';
$string['registration_help'] = 'Wenn diese Option ausgewählt wird, müssen sich Teilnehmer vor dem Betreten eines Meetings oder Webinars registrieren.';
$string['registration_text'] = 'Teilnehmer zwingen, sich für das Meeting/Webinar zu registrieren';
$string['requirepasscode_help'] = 'Wenn diese Einstellung aktiviert ist, muss der Veranstalter für das Meeting einen Kenncode vergeben. Beitretende Teilnehmer müssen diesen Kenncode eingeben bevor sie das Meeting betreten können. Teilnehmer, die das Meeting aber direkt aus der Moodle Aktivität betreten, müssen den Kenncode nicht eingeben.';
