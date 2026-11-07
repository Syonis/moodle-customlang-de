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
 * @package    core
 * @subpackage badges
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminonly'] = 'Diese Seite ist nur für Administratoren erlaubt!';
$string['allowexternalbackpack_desc'] = 'Wenn diese Option aktiviert ist, können Nutzer eine Verbindung zu einem externen Backpack herstellen und ihre Badges von dieser Website freigeben. Nutzer können außerdem festlegen, dass alle öffentlichen Badge Collections von ihrem externen Backpack auf ihrer Profilseite angezeigt werden. Es wird empfohlen, diese Option deaktiviert zu lassen, wenn Ihre Website nicht über das Internet erreichbar ist (z.B. ein lokales Moodle).';
$string['archivehelp'] = '<p>Mit dieser Option wird der Badge \'zurückgezogen\' und erscheint nicht mehr in der Liste der Badges. Der Badge kann nicht mehr neu erworben werden. Alle diejenigen, die den Badge bereits erworben haben, können ihn weiterhin auf ihrer Profilseite anzeigen und in ihren externen Backpack exportieren.</p><p>Wenn Sie möchten, dass Nutzer ihre erworbenen Badges behalten sollen, müssen Sie diese Option wählen, anstatt den Badge vollständig zu löschen.</p>';
$string['awardoncron'] = 'Eine große Anzahl von Nutzern bekommen das Badge "{$a->badgename}". Es kann einige Zeit dauern, bis alle Nutzer es erhalten haben.';
$string['awards'] = 'Empfänger';
$string['backpackavailability_help'] = 'Für die Verifizierung von Badges muss ein externer Backpack-Service auf die Website zugreifen. Im Moment scheint diese Verbindung nicht möglich zu sein, so dass verliehene Badges der Website nicht von extern verifiziert werden können. **Warum sehe ich diese Mitteilung?** Eventuell verhindert eine Firewall, dass jemand von außerhalb zugreifen kann. Möglicherweise ist die Website kennwortgeschützt oder ist nicht über das Internet erreichbar (z.B. ein lokales Moodle). **Ist das ein Problem?** Auf einer produktiven Website sollten Sie das Problem lösen. Andernfalls können Nutzer nicht nachweisen, dass ein Badge auf der Website verliehen wurde. **Was muss ich tun, wenn nicht die gesamte Website öffentlich erreichbar sein soll?** Die einzige URL, die für die Verifizierung benötigt wird, ist [stgh.goldbecks]/badges/assertion.php. Wenn die Firewall so konfiguriert ist, dass sie den Zugriff auf dieses Skript erlaubt, funktioniert die Verifizierung von Badges.';
$string['backpackemailverifyemailbody'] = 'Guten Tag, unter Verwendung Ihrer E-Mail-Adresse wurde von \'{$a->sitename}\' eine neue Verbindung zu Ihrem Badges-Backpack angefordert. Um die Verbindung zu prüfen und zu aktivieren, klicken Sie bitte auf den nachfolgenden Link. {$a->link} In den meisten E-Mail-Programmen sollte dieser Link blau und anklickbar sein. Falls das nicht funktioniert, kopieren Sie die Adresse vollständig und fügen Sie sie in die Adresszeile Ihres Webbrowsers ein. Wenn Sie Hilfe benötigen, wenden Sie sich an die Administratoren der Website, {$a->admin} Ihr E-Learning-Team';
$string['badgeimage_help'] = 'Das Bild sollte mindestens 300 x 300 Pixel groß sein. Es wird als 300 x 300 Pixel auf der Badge-Seite und 100 x 100 Pixel auf der Profilseite von Nutzern angezeigt.';
$string['badgesalt_desc'] = 'Mit Verwendung des Hash können Backpack-Dienste die Empfänger eines Badge bestätigen, ohne deren E-Mail-Adresse zu kennen. Der Hash Salt ist eine zusätzliche Sicherung, die dem Hash hinzugefügt wird. Verwenden Sie für den Salt ausschließlich Ziffern und Buchstaben. Hinweis: Vermeiden Sie bei der Absicherung der Badge-Verifikation unbedingt, nachträglich den Salt zu ändern, wenn bereits Badges verliehen wurden.';
$string['badgestatus_0'] = 'Nicht verfügbar für Nutzer';
$string['badgestatus_1'] = 'Verfügbar für Nutzer';
$string['badgestatus_2'] = 'Nicht verfügbar für Nutzer';
$string['badgestatus_3'] = 'Verfügbar für Nutzer';
$string['bawards'] = 'Empfänger ({$a})';
$string['configenablebadges'] = 'Wenn diese Option aktiviert ist, können Sie Badges erstellen und an Nutzer der Website verleihen.';
$string['contact'] = 'Kontakt zu Herausgeber';
$string['coursecompletion'] = 'Teilnehmer müssen diesen Kurs abschließen.';
$string['criteria_1_help'] = 'Dieses Kriterium erlaubt es, einen Badge an Nutzer zu verleihen, die bestimmte Aktivitäten im Kurs abgeschlossen haben.';
$string['criteria_2_help'] = 'Dieses Kriterium erlaubt es, einen Badge manuell durch Benutzer zu verleihen, die eine bestimmte Rolle auf der Website oder in einem Kurs haben.';
$string['criteria_4_help'] = 'Dieses Kriterium erlaubt es, einen Badge an Nutzer zu verleihen, die den Kurs abgeschlossen haben. Bei diesem Kriterium können Sie zusätzliche Parameter festlegen, z.B. eine zu erreichende Mindestbewertung oder ein Datum für den Kursabschluss.';
$string['criteria_5_help'] = 'Dieses Kriterium erlaubt es, einen Badge an Nutzer zu verleihen, die mehrere Kurse abgeschlossen haben. Für jeden dieser Kurse können Sie zusätzliche Parameter festlegen, z.B. eine zu erreichende Mindestbewertung oder ein Datum für den Kursabschlusses.';
$string['criteria_6_help'] = 'Dieses Kriterium erlaubt es, einen Badge an Nutzer zu verleihen, die bestimmte Profilfelder im ihrem Nutzerprofil vervollständigt haben. Das können standardmäßige oder nutzerdefinierte Profilfelder sein, die für Nutzer zugänglich sind.';
$string['criteria_7_help'] = 'Dieses Kriterium erlaubt es, einen Badge an Nutzer zu verleihen, die bereits andere Badges erworben haben.';
$string['criteria_8_help'] = 'Dieses Kriterium erlaubt es, einen Badge an Nutzer zu verleihen, die Mitglied in bestimmten globalen Gruppen sind.';
$string['criteria_9_help'] = 'Dieses Kriterium erlaubt es, einen Badge an Nutzer zu verleihen, die bestimmte Kompetenzen abgeschlossen haben.';
$string['criteria_descr'] = 'Nutzer erhalten den Badge, wenn sie folgende Bedingung erfüllen:';
$string['criteria_descr_2'] = 'Dieser Badge muss von Nutzern mit <strong>{$a}</strong> Rollen verliehen werden:';
$string['criteria_descr_4'] = 'Teilnehmer müssen den Kurs abschließen.';
$string['criteria_descr_single_2'] = 'Dieser Badge muss von Nutzern mit folgender Rolle verliehen werden:';
$string['criteria_descr_single_4'] = 'Teilnehmer müssen den Kurs abschließen';
$string['criterror_help'] = 'Die Übersicht zeigt alle Parameter, die ursprünglich mit diesem Badge verbunden waren, aber nicht mehr verfügbar sind. Diese Parameter sollten deaktiviert werden, damit Nutzer diesen Badge in Zukunft überhaupt erlangen können.';
$string['deletehelp'] = '<p>Vollständiges Löschen von Badges führt dazu, dass alle verliehenen Badges verschwinden und nicht mehr verfügbar sind. Löschen bedeutet, sie endgültig zu entfernen.</p><p>Hinweis: Wenn Nutzer vor dem Löschen einen Badge exportiert haben, bleibt dieser erhalten. Der Link zur Prüfseite, wo der Badge herkommt, wird jedoch beim Löschen entfernt und kann nicht mehr genutzt werden.</p>';
$string['donotaward'] = 'Derzeit ist der Badge nicht verfügbar, d.h. er kann nicht an Nutzer verliehen werden. Wenn Sie den Badge verleihen möchten, müssen Sie ihn aktivieren. Klicken Sie dazu auf die Taste \'\'Zugriff erlauben\'\'.';
$string['error:cannotawardbadge'] = 'Der Badge kann nicht an Nutzer verliehen werden.';
$string['error:cannotrevokebadge'] = 'Das Badge kann von Nutzer nicht zurückgezogen werden.';
$string['error:nopermissiontoview'] = 'Sie haben kein Recht, Empfänger mit dem Badge zu sehen.';
$string['error:nosuchuser'] = 'Der Benutzer mit dieser E-Mail-Adresse hat kein Benutzerkonto beim aktuellen Backpack-Dienst.';
$string['existingrecipients'] = 'Vorhandene Empfänger';
$string['imageauthoremail'] = 'E-Mail vom Bildautor';
$string['imageauthoremail_help'] = 'Wenn angegeben, wird die E-Mail-Adresse des Benutzers auf der Badge-Seite angezeigt, der das Bild erstellt hat.';
$string['imageauthorname'] = 'Name vom Bildautor';
$string['imageauthorname_help'] = 'Wenn angegeben, wird der Name des Benutzers auf der Badge-Seite angezeigt, der das Bild erstellt hat.';
$string['imageauthorurl'] = 'URL vom Bildautor';
$string['imageauthorurl_help'] = 'Wenn angegeben, wird die URL zur Website des Benutzers auf der Badge-Seite angezeigt, der das Bild erstellt hat. Die URL muss mit http:// oder https:// beginnen.';
$string['issuerdetails'] = 'Verleiher';
$string['issuername'] = 'Verleiher';
$string['issuername_endorsement_help'] = 'Name des Bestätigers';
$string['issuerurl'] = 'URL vom Verleiher';
$string['nobadges'] = 'Derzeit sind keine Badges für Nutzer verfügbar';
$string['nomatchingawards'] = 'Bisher gibt es noch keine passenden Empfänger, die dieses Badge bekommen haben.';
$string['nomatchingbadges'] = 'Es gibt keine passenden Badges, die Nutzer verdienen könnten.';
$string['notacceptedrole'] = 'Sie haben derzeit keine Rolle, die diesen Badge manuell verleihen darf.<br/> Benutzer, die diesen Badge bisher erworben haben, können Sie auf der Seite {$a} sehen.';
$string['notification'] = 'Ersteller benachrichtigen';
$string['notification_help'] = 'Diese Einstellung legt fest, wie Ersteller benachrichtigt werden, wenn der Badge verliehen wird. Folgende Optionen sind möglich: * **Nie**: Keine Nachrichten. * **Jederzeit**: Nachricht, sobald der Badge verliehen wird. * **Täglich**: Nachricht einmal täglich. * **Wöchentlich**: Nachricht einmal wöchentlich. * **Monatlich**: Nachricht einmal monatlich.';
$string['numawards'] = 'Nutzer mit dem Badge \'{$a->badgename}\': <a href="{$a->link}">{$a->count}</a>.';
$string['numawardstat'] = 'Nutzer mit dem Badge \'{$a->badgename}\': {$a->awards}.';
$string['potentialrecipients'] = 'Mögliche Empfänger';
$string['privacy:metadata:backpack:userid'] = 'ID des Benutzers, dessen Backpack das ist';
$string['privacy:metadata:backpackoauth2'] = 'OAuth2-Info, wenn sich ein Benutzer zu einem externen Backpack verbindet';
$string['privacy:metadata:backpackoauth2:userid'] = 'ID des Benutzers, der die Verbindung aufbaut';
$string['privacy:metadata:backpackoauth2:usermodified'] = 'ID des Benutzers, der die Verbindung ändert';
$string['privacy:metadata:badge:usercreated'] = 'ID des Benutzers, der den Badge erstellt hat';
$string['privacy:metadata:badge:usermodified'] = 'ID des Benutzers, der den Badge bearbeitet hat';
$string['privacy:metadata:criteriamet:userid'] = 'ID des Benutzers, der die Kriterien erfüllt hat';
$string['privacy:metadata:external:backpacks'] = 'Geteilte Daten, wenn ein Benutzer seine Badges an ein externes Backpack überträgt';
$string['privacy:metadata:issued:userid'] = 'ID des Benutzers, der den Badge erworben hat';
$string['privacy:metadata:manualaward:issuerid'] = 'ID des Benutzers, der den Badge verleiht';
$string['privacy:metadata:manualaward:issuerrole'] = 'Rolle des Benutzers, der den Badge verleiht';
$string['privacy:metadata:manualaward:recipientid'] = 'ID des Benutzers, der den Badge manuell verliehen bekommen hat';
$string['recipient'] = 'Badge-Empfänger';
$string['recipientidentificationproblem'] = 'Empfänger für diesen Badge kann unter den vorhandenen Nutzern nicht gefunden werden.';
$string['recipients'] = 'Empfänger';
$string['recipientvalidationproblem'] = 'Nutzer kann nicht als Empfänger für dieses Badge verifiziert werden.';
$string['reviewconfirm'] = '<p>Hiermit machen Sie Ihren Badge für Nutzer sichtbar und erlauben ihnen den Erwerb.</p> <p>Möglicherweise haben Nutzer bereits früher die Kriterien für den Badge erfüllt. Ihnen wird der Badge nun umgehend zugewiesen.</p> <p>Sobald der Badge einmal verliehen wurde, wird er <strong>gesperrt</strong>.</p> <p>Möchten Sie für den Badge \'{$a}\' nun den Zugriff aktivieren?</p>';
$string['sitebackpack_help'] = 'Der externe Backpack, mit dem Nutzer von dieser Website aus eine Verbindung herstellen können. Wenn Sie diese Einstellung ändern, nachdem Nutzer ihre Backpacks verbunden haben, müssen alle Nutzer ihre Backpack-Einstellungen aufrufen, die Verbindung trennen und dann wieder neu herstellen.';
$string['sitebadges_help'] = 'Website-Badges können nur für systemweite Leistungen verliehen werden, wie z.B. das Abschließen mehrerer Kurse oder die Vervollständigung des Benutzerprofils. Website-Badges können auch manuell von einem Benutzer an einen anderen verliehen werden. Badges für kursbezogene Leistungen müssen für den jeweiligen Kurs angelegt werden. Sie finden die entsprechenden kursbezogenen Badges unter \'Kurs-Administration > Badges\'.';
$string['status_help'] = 'Der Status eines Badge legt fest, wie er verwendet werden kann: * **Verfügbar**: Der Badge kann von Nutzern erworben werden. Während ein Badge verfügbar ist, können keine Änderungen an den Kriterien vorgenommen werden. * **Nicht verfügbar**: Der Badge kann nicht erworben und auch nicht manuell verliehen werden. Solange ein Badge nicht verliehen wurde, können seine Kriterien verändert werden. Sobald ein Badge einmal verliehen wurde, wird er automatisch **gesperrt**. Gesperrte Badges können weiterhin erworben werden, die Kriterien sind aber nicht mehr änderbar. Falls Sie Details oder Kriterien eines gesperrten Badges bearbeiten möchten, können Sie den Badge duplizieren und dann alle Einstellungen vornehmen. *Warum werden Badges gesperrt?* Wir möchten sicherstellen, dass immer dieselbe Leistung erbracht werden muss, um den Badge zu erwerben. Derzeit ist es nicht möglich, einmal erworbene Badges zurückzuziehen. Wenn die Kriterien für Badges nachträglich geändert werden könnten, würden Nutzer mit dem gleichen Badge möglicherweise ganz andere Anforderungen erfüllt haben.';
$string['statusmessage_0'] = 'Dieser Badge ist aktuell für Nutzer nicht verfügbar. Klicken Sie auf \'\'Zugriff aktivieren\'\', damit der Badge von Nutzern erworben werden kann.';
$string['statusmessage_1'] = 'Dieser Badge ist aktuell für Nutzer verfügbar. Klicken Sie auf \'\'Zugriff verhindern\'\', wenn Sie Änderungen vornehmen möchten.';
$string['statusmessage_2'] = 'Dieser Badge ist aktuell für Nutzer nicht verfügbar und seine Kriterien sind gesperrt. Klicken Sie auf \'\'Zugriff aktivieren\'\', damit er wieder von Nutzern erworben werden kann.';
$string['statusmessage_3'] = 'Dieser Badge ist aktuell für Nutzer verfügbar und seine Kriterien sind gesperrt.';
$string['userbadges'] = 'Badges von Nutzern';
$string['variablesubstitution_help'] = 'In einer Badge-Nachricht können bestimmte Variablen in den Betreff und/oder den Nachrichtentext eingefügt werden, sodass sie beim Versand der Nachricht durch die tatsächlichen Werte ersetzt werden. Die Variablen sollten exakt so in den Text eingefügt werden, wie sie unten aufgeführt sind. Folgende Variablen können verwendet werden: %badgename% : Wird durch den vollständigen Namen des Badges ersetzt. %username% : Wird durch den vollständigen Namen der Empfänger ersetzt. %badgelink% : Wird durch die öffentliche URL mit Informationen zum ausgestellten Badge ersetzt. Auch nutzerspezifische Werte, die sich auf die Empfänger der Nachricht beziehen, können verwendet werden: %firstname%, %lastname%, %fullname% usw.';
