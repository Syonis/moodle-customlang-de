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
 * @subpackage jitsi
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountinsufficientprivileges'] = 'Das eingerichtete Streaming-Konto hat keine ausreichenden Rechte. Wenden Sie sich an die Administratoren.';
$string['adminaccountex'] = 'Mindestens ein Konto ist erforderlich, um Sitzungen mit der Streaming-Methode "Moodle integriert" zu streamen bzw. aufzuzeichnen.
  </br>Nur ein Konto kann "<b>in Verwendung</b>" sein und wird zum Streamen bzw. Aufzeichnen alle Trainersitzungen verwendet.
  </br>Wenn Sie neue Konten hinzufügen, wird empfohlen, sie <b> mit echten Kontonamen </b> zu benennen, um sich in Zukunft möglicherweise erneut anzumelden können und das Konto erneut zu autorisieren.
  </br>Nur Konten ohne Aufzeichnungen im Zusammenhang mit den Jitsi-Aktivitäten von Trainern und ohne Aufzeichnungen, die zum Löschen von den Streaming-Servern ausstehen, können hier mithilfe des Papierkorbsymbols entfernt werden.
  </br>Neue Konten ohne Anmeldeinformationen könnten hier erscheinen, wenn Backups von Jitsi-Aktivitäten von einem anderen Server auf diesem mit Konten wiederhergestellt werden, die hier nicht vorhanden waren.
</br></br>NEU ab Version 3.3.3: Eine neue Spalte namens "In Warteschlange" ermöglicht die Verwendung aller Recorder im Round-Robin-Verfahren. Sie können Recorder zur Warteschlange hinzufügen, indem Sie auf <b>+</b> klicken, und Sie können sie aus der Warteschlange entfernen, indem Sie auf <b>-</b> klicken. Wenn ein Recorder verwendet wurde, weil er der Recorder war, der "<b>in Verwendung</b>" war (oder der nächste zu verwendende Recorder war), wird das Flag "In Verwendung" auf den nächsten Recorder in der Warteschlange gesetzt. Mit dieser Funktion können Sie viele Recorder verwenden, um YouTube-Kontingentbeschränkungen wie die pro Tag zulässigen Live-Streams zu vermeiden.';
$string['blurbuttonex'] = 'Allen Nutzern wird die Option „Hintergrund auswählen“ angezeigt. Diese Funktion ist cool, erfordert aber leistungsstarke Computer. Vielleicht sollten Sie es deaktivieren.';
$string['completionminutes_help'] = 'Dauer in Minuten, die Teilnehmer teilnehmen müssen, um die Aktivität abschließen zu können.';
$string['connectedattendeesnow'] = 'Teilnehmer';
$string['finishandreturnex'] = 'Zum Kurs zurückgehen, wenn die Sitzung beendet ist. Bei Verwendung des öffentlichen Jitsi gelangen die Nutzer zum Kurs zurück, sobald sie die Werbung schließen.';
$string['helpex'] = 'Dieser Hilfetext wird am Ende in allen Jitsi-Aktivitäten angezeigt. Es ist ein guter Ort für Netiquette-Regeln oder Hilfeanweisungen für Nutzer.';
$string['internalerror'] = 'Interner Fehler. Wenden Sie sich an die Administratoren.';
$string['invitebuttonex'] = 'Erlauben Sie Nutzer mit dem Recht mod/jitsi:createlink (Trainer), auch Einladungslinks für Nutzer zu erstellen, die nicht im Kurs eingeschrieben sind.';
$string['minpretime_help'] = 'Nutzer mit Moderationsberechtigungen können diese Zeit (in Minuten) vor Beginn bereits zugreifen.';
$string['modulename_help'] = 'Mit Jitsi können Sie eine Videokonferenz einrichten und durchführen. Für diese Videokonferenz sind alle Teilnehmer Ihres Kurses zugelassen. Beim Betreten der Videokonferenz werden automatisch die Nutzernamen und die Nutzerbilder aus Moodle übernommen und angezeigt.

Jitsi ist eine Open-Source-Software, mit der Sie Videokonferenzen einfach und sicher durchführen können.';
$string['participantspaneex'] = 'Das Teilnehmerfeld soll für alle Nutzer angezeigt werden. Wenn Sie die Option deaktivieren, wird das Feld nur für Nutzer mit dem Recht zur Jitsi-Moderation mod/jitsi:moderation angezeigt, normalerweise für Trainer.';
$string['raisehandex'] = 'Die Taste \'Hand heben\' für alle anzeigen. Wenn Nutzer ihre Hand heben, können sie auf das Teilnehmerfeld zugreifen. Wenn Sie das Teilnehmerfeld ausblenden, sollten Sie auch diese Schaltfläche ausblenden.';
$string['recordex'] = 'Aktivieren Sie die nativen Optionen für Jitsi-Aufzeichnungen (eigentlich Dropbox) für Nutzer mit dem Recht mod/jitsi:record (Trainer). Wenn Sie die "Streaming-Konfiguration" auf "Moodle integriert" einstellen, möchten Sie diese wahrscheinlich deaktivieren.';
$string['securitybuttonex'] = 'Dies aktiviert die native Jitsi-Optionen \'Sicherheit\' und den \'Lobby-Modus\'. Sie sollten diese Option deaktivieren, wenn Sie oben ein Kennwort festgelegt haben, da das Kennwort den Nutzern angezeigt wird. Bei Token-Konfiguration können Sie mit dieser Option experimentieren.';
$string['showavatarsex'] = 'Nutzerbilder von Teilnehmern in Jitsi anzeigen. Wenn Nutzer kein Profilbild haben, wird das standardmäßige Profilbild von Moodle geladen, anstatt die in Jitsi üblichen Initialen zu verwenden.';
$string['simultaneouscamerasex'] = 'Anzahl der gleichzeitig möglichen Kameras. Dies könnte vom Jitsi-Server mit einem niedrigeren Wert überschrieben werden. Zu viele Kameras könnten die Browser der Teilnehmer überlasten.';
$string['streamingbuttonex'] = 'Aktivieren Sie die Live-Streaming-Funktionen für Nutzer mit dem Recht mod/jitsi:record-Funktion (Trainer). Wenn die Option aktiviert ist, möchten Sie vielleicht die Option \'Aufzeichnen\' oben deaktivieren.';
$string['streamingconfigex'] = 'Die Standard-Streaming-Konfiguration funktioniert \'out of the box\'. Trainer können ihre Sitzungen mit eigenen Streaming-Konten bei Streaming-Diensten (Youtube, Peertube, ...) streamen bzw. aufzeichnen, aber sie müssen dann selber ihre Watch-Links für Teilnehmer im Kurs veröffentlichen. </br></br>Für ein besseres Erlebnis können Sie die Methode \'Moodle integriert\' aktivieren, um mit einem institutionellen Streaming-Konto aufzunehmen (bisher ist nur YouTube verfügbar) und die Aufzeichnungen automatisch für Teilnehmer bereitzustellen.';
$string['streamingoptionex'] = '<b>Jitsi-Oberfläche</b> Aktivieren Sie "Live-Streaming starten" in der Jitsi-Oberfläche. damit Nutzer ihre eigenen Streaming-Konten verwenden. </br><b>Moodle integriert</b> Diese Option ist am einfachsten für Nutzer. Trainer können sofort \'Aufnehmen & Streamen\' starten, ohne dass dafür Zugangsdaten abgefragt werden. Aufzeichnungen und Streams werden in einem institutionellen Streaming-Konto gespeichert und werden Teilnehmer sofort bereitgestellt. Sie müssen unten die OAuth2-Anmeldeinformationen und ein Streaming-Konto festlegen.';
$string['tokenconfigurationex'] = 'Wenn Sie einen  Jitsi-Server im \'Token-Modus\' verwenden, z.B. Ihren eigenen Server oder einen 8x8-Server, füllen Sie je nach Servertyp die folgenden Parameter aus. Dies ist erforderlich, um Nutzer mit dem Recht mod/jitsi:moderation als native Jitsi-Moderatoren zu unterstützen.';
$string['whiteboardex'] = 'Taste für das Whiteboard allen Nutzern anzeigen. Derzeit ist Whiteboard auf Jaas-Servern nicht verfügbar.';
