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
 * German translation of the original English language strings for Interactivevideo
 *
 * @package    mod_interactivevideo
 * @category   string
 * Original plugin copyright (retained from the English source):
 * @copyright  2024 Sokunthearith Makara <sokunthearithmakara@gmail.com>
 *
 * German translation: Syonis, 2026
 * Translation created with AI assistance.
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activationerror_generic'] = 'Aktivierung fehlgeschlagen. Überprüfen Sie Ihre Kauf-E-Mail-Adresse und versuchen Sie es erneut.';
$string['activationerror_invalid_date'] = 'Die Aktivierungsanfrage ist abgelaufen. Speichern Sie die Einstellung erneut.';
$string['activationerror_invalid_hash'] = 'Die Aktivierung wurde vom Lizenzserver abgelehnt.';
$string['activationerror_invalid_payload'] = 'Ungültige Aktivierungsanfrage.';
$string['activationerror_not_configured'] = 'Die Lizenzaktivierung ist auf dieser Website nicht eingerichtet.';
$string['activationerror_not_registered'] = 'Diese Website ist für das Plugin nicht registriert.';
$string['activationerror_purchase_not_found'] = 'Für diese E-Mail-Adresse und dieses Plugin wurde kein aktiver Kauf gefunden.';
$string['activationerror_purchase_refunded'] = 'Der Kauf für diese E-Mail-Adresse und dieses Plugin wurde erstattet.';
$string['activationerror_quantity_exceeded'] = 'Alle erworbenen Aktivierungsplätze sind bereits belegt.';
$string['activationerror_ratelimited'] = 'Zu viele Aktivierungsversuche. Versuchen Sie es später erneut.';
$string['activationerror_upstream_error'] = 'Verbindung zum Lizenzserver fehlgeschlagen.';
$string['activationnoticeaction'] = 'Aktivieren Sie jeden Inhaltstyp im Bereich „Inhaltstypen“ der Interactive-Video-Einstellungen mit der E-Mail-Adresse, die Sie beim Kauf verwendet haben.';
$string['activationnoticemessage'] = 'Diese Inhaltstypen sind aktiviert, aber noch nicht lizenziert. Deshalb können sie derzeit nicht zu Aktivitäten hinzugefügt werden. Bereits bestehende Interaktionen dieser Typen sind für Teilnehmer nicht sichtbar und können nicht bearbeitet werden: {$a}. Vorhandene Bewertungen bleiben erhalten.';
$string['activationnoticetitle'] = 'Inhaltstypen warten auf Aktivierung';
$string['activitycard'] = 'Aktivitätskarte';
$string['add'] = 'Hinzufügen';
$string['addinteractiontitle'] = '{$a->name} bei {$a->time} hinzufügen';
$string['additionalsettings'] = 'Weitere Einstellungen';
$string['advanced'] = 'Erweitert';
$string['aftercompletion'] = 'Nach Abschluss';
$string['alignindicatorcenter'] = 'Interaktionsmarkierungen zentrieren';
$string['allowcustomtheme'] = 'Individuelles Design erlauben';
$string['allowcustomtheme_desc'] = 'Erlaubt Nutzern, für das interaktive Video ein eigenes Design auszuwählen.';
$string['allowdeleteprogress'] = 'Löschen des eigenen Lernfortschritts erlauben';
$string['allowedfetchhosts'] = 'Zusätzliche Anbieter-Hosts';
$string['allowedfetchhosts_desc'] = 'Tragen Sie hier weitere Hostnamen ein, von denen das Plugin Videometadaten abrufen darf (einen Hostnamen pro Zeile). Dies ist nur bei selbst gehosteten Diensten mit eigener Domain erforderlich, beispielsweise bei einem Panopto-Server außerhalb von panopto.com oder panopto.eu. Mit dem Präfix „*.“ erlauben Sie auch Subdomains, etwa *.video.example.edu. Lassen Sie das Feld leer, wenn keine zusätzlichen Hosts benötigt werden.';
$string['annotationcontent'] = 'Anmerkungsinhalt';
$string['annotationscopied'] = 'Anmerkungen in die Zwischenablage kopiert';
$string['annotationssavedasdefaults'] = 'Die Standardwerte wurden erfolgreich aktualisiert.';
$string['appearanceandbehaviorsettings'] = 'Einstellungen für Darstellung und Verhalten';
$string['appearancesettings'] = 'Darstellungseinstellungen';
$string['areyousureyouwanttoresetthecompletiondata'] = 'Möchten Sie den Fortschritt dieses Nutzers wirklich zurücksetzen? Alle bisherigen Versuche und zugehörigen Dateien werden gelöscht.';
$string['atleastonecompletionrule'] = 'Es muss mindestens eine Abschlussbedingung festgelegt werden.';
$string['audio'] = 'Audio';
$string['audiovideooptions'] = 'Audio-/Videooptionen';
$string['auth_tool'] = 'API-Token/-Schlüssel für {$a}';
$string['auth_tool_desc'] = 'Geben Sie den API-Token/-Schlüssel für {$a} ein.';
$string['auto'] = 'Automatisch';
$string['autohidecontrols'] = 'Steuerelemente automatisch ausblenden';
$string['autolaunch'] = 'Automatisch starten';
$string['autolaunch_desc'] = 'Ist diese Option aktiviert, startet die Interaktion automatisch, sobald das Video den angegebenen Zeitpunkt erreicht. Andernfalls muss der Nutzer auf die Interaktionsmarkierung klicken.';
$string['autoplay'] = 'Automatische Wiedergabe';
$string['autoplayblocked'] = 'Die automatische Wiedergabe wird von Ihrem Browser oder einer Erweiterung blockiert.';
$string['avg'] = 'Durchschnitt';
$string['awardpartialpoints'] = 'Teilpunkte vergeben';
$string['backtocourse'] = 'Zurück zur Kursseite';
$string['beforecompletion'] = 'Vor Abschluss';
$string['behavioraftercompletion'] = 'Verhalten nach Abschluss';
$string['behaviorbeforecompletion'] = 'Verhalten vor bzw. ohne Abschluss';
$string['behaviorsettings'] = 'Verhaltenseinstellungen';
$string['braveautoplay'] = 'Die Aktivität „Interaktives Video“ wird im Brave-Browser bei deaktivierter automatischer Wiedergabe nicht unterstützt. Aktivieren Sie die automatische Wiedergabe für diese Website oder verwenden Sie einen anderen Browser.';
$string['bulkedit'] = 'Mehrere Einträge bearbeiten';
$string['cachedef_interactivevideo_settings'] = 'Zwischenspeicherdefinitionen für Interactive Video';
$string['cachedef_iv_activation'] = 'Zwischenspeicher für den Aktivierungsstatus der Inhaltstypen';
$string['cachedef_iv_items_by_cmid'] = 'Zwischenspeicherdefinitionen für Interactive-Video-Elemente nach Kursmodul-ID';
$string['cachedef_iv_plugins_catalog'] = 'Zwischengespeicherter Katalog verfügbarer Inhaltstypen';
$string['cancel'] = 'Abbrechen';
$string['captions'] = 'Untertitel';
$string['cardsize'] = 'Kartengröße';
$string['cardsize_desc'] = 'Wählen Sie die Standardgröße der Aktivitätskarte auf der Kursseite.';
$string['centeroncoursepage'] = 'Auf der Kursseite zentrieren';
$string['changeplaybackspeed'] = 'Wiedergabegeschwindigkeit';
$string['changevideoquality'] = 'Videoqualität ändern';
$string['chapterlist'] = 'Kapitelliste';
$string['chaptermetadata'] = 'Kapitelmetadaten';
$string['chapters'] = 'Kapitel';
$string['chaptertitle'] = 'Kapiteltitel';
$string['chaptertoggle'] = 'Kapitelanzeige umschalten';
$string['checkall'] = 'Alle auswählen';
$string['clickability'] = 'Anklickbar';
$string['clickability_desc'] = 'Ist die Option aktiviert, kann die Interaktionsmarkierung angeklickt werden, um den Interaktionsinhalt vor oder nach seinem Abschluss anzuzeigen.';
$string['clickaddtoaddinteraction'] = 'Klicken Sie auf „Hinzufügen“, um eine Interaktion hinzuzufügen.';
$string['clone'] = 'Duplizieren';
$string['close'] = 'Schließen';
$string['closechapterpanel'] = 'Kapitelbereich schließen';
$string['completed'] = 'Abgeschlossen';
$string['completedeletedforthisitem'] = 'Abschlussdaten für <b>{$a->item}</b> bei <b>{$a->user}</b> gelöscht';
$string['completionandgrade'] = 'Abschluss und Bewertung';
$string['completioncompleted'] = 'Abgeschlossen';
$string['completiondatadeleted'] = 'Die Abschlussdaten dieser Interaktion wurden zurückgesetzt.';
$string['completiondetail:nonexistent'] = 'Unbekannte Bedingung: {$a}';
$string['completiondetail:percentage'] = 'Interaktionen zu {$a} % abschließen';
$string['completiondetail:watchtillend'] = 'Bis zum Ende ansehen';
$string['completiondisablewarning'] = 'Mindestens ein Nutzer hat diese Aktivität bereits abgeschlossen. Um das Video zu bearbeiten, müssen Sie zuerst die Abschlusseinstellungen entsperren. Damit kann der Abschlussstatus gegebenenfalls neu berechnet werden.';
$string['completionincomplete'] = 'Nicht abgeschlossen';
$string['completionmanual'] = 'Manuell als abgeschlossen markieren';
$string['completionmarkcomplete'] = 'Als abgeschlossen markieren';
$string['completionmarkincomplete'] = 'Erledigt';
$string['completionnone'] = 'Nicht erfasst';
$string['completionnotrecordedinpreviewmode'] = 'In der Vorschau wird kein Abschluss erfasst.';
$string['completiononcomplete'] = 'Aktivität abschließen';
$string['completiononcompletefull'] = 'Volle Punktzahl erreichen';
$string['completiononcompletepass'] = 'Bestehen (> 50 %)';
$string['completiononview'] = 'Ansehen';
$string['completionpercentage'] = 'Aufgabenabschluss (%)';
$string['completionpercentageerror'] = 'Der Abschlussprozentsatz muss größer als 0 und höchstens 100 sein.';
$string['completionpercentagehelp'] = 'Interaktionen sind Aufgaben, die Benutzer während der Videowiedergabe als abgeschlossen markieren können.';
$string['completionreseterror'] = 'Fehler beim Zurücksetzen der Abschlussdaten.';
$string['completionresetsuccess'] = 'Abschlussdaten erfolgreich zurückgesetzt.';
$string['completiontracking'] = 'Abschlussverfolgung';
$string['completionwatchtillend'] = 'Bis zum Ende ansehen';
$string['confirmdeletedefault'] = 'Möchten Sie die gespeicherte Standardeinstellung für „{$a}“ wirklich löschen?';
$string['congratulationsyoucompletethisactivity'] = 'Herzlichen Glückwunsch! Sie haben alle Anforderungen dieser Aktivität erfüllt.';
$string['content'] = 'Inhalt';
$string['contenttype'] = 'Inhaltstypen';
$string['contenttypeactivated'] = 'Aktiviert';
$string['contenttypefree'] = 'Kostenlos';
$string['contenttypenotactivated'] = 'Nicht aktiviert';
$string['contenttypenotusable'] = 'Dieser Interaktionstyp ist auf dieser Website nicht aktiviert. Aktivieren Sie ihn unter „Inhaltstypen“, um ihn wieder zu verwenden.';
$string['contenttypescatalogerror'] = 'Der Katalog der Inhaltstypen konnte nicht geladen werden.';
$string['contenttypesenabledcount'] = '{$a->enabled} von {$a->total} Inhaltstypen aktiviert';
$string['contenttypesexploremoreplugins'] = 'Weitere Plugins entdecken';
$string['contenttypesinstalled'] = 'Installiert';
$string['contenttypesmore'] = 'Weitere';
$string['contenttypesmoreempty'] = 'Keine weiteren Inhaltstypen verfügbar.';
$string['contenttypeunknown'] = 'Dieser Interaktionstyp ist auf dieser Website nicht verfügbar.';
$string['contenttypeupdateavailable'] = 'Aktualisierung verfügbar';
$string['contentuploaded'] = 'Inhalt erfolgreich hochgeladen.';
$string['contentuploaderror'] = 'Fehler beim Hochladen des Inhalts';
$string['controlsaftercompletion'] = 'Steuerelemente nach Abschluss';
$string['controlsbeforecompletion'] = 'Steuerelemente vor bzw. ohne Abschluss';
$string['copied'] = 'Kopiert!';
$string['copiedtoclipboard'] = 'Link in die Zwischenablage kopiert!';
$string['copy'] = 'Kopieren';
$string['copynoun'] = 'Kopie';
$string['courseindex'] = 'Kursindex';
$string['createinteractivevideofromlist'] = 'Interaktives Video aus der Liste erstellen';
$string['currenttime'] = 'Aktuelle Zeit';
$string['customdescription'] = 'Individuelle Beschreibung';
$string['customsegment'] = 'Eigener Videoabschnitt';
$string['dailymotion'] = 'Dailymotion';
$string['darkmode'] = 'Dunkles Design verwenden';
$string['datatableinfo'] = 'Zeige _START_ bis _END_ von _TOTAL_ Einträgen';
$string['datatableinfoempty'] = 'Zeige 0 bis 0 von 0 Einträgen';
$string['datatableinfofiltered'] = '(gefiltert aus insgesamt _MAX_ Einträgen)';
$string['default'] = 'Standard';
$string['defaultappearance'] = 'Standarddarstellung';
$string['defaultappearance_desc'] = 'Wählen Sie die Standarddarstellung für das interaktive Video.';
$string['defaultbehavior'] = 'Standardverhalten';
$string['defaultbehavior_desc'] = 'Wählen Sie das Standardverhalten für das interaktive Video.';
$string['defaultdeleted'] = 'Standardwert erfolgreich gelöscht.';
$string['defaulttheme'] = 'Standarddesign';
$string['defaulttheme_desc'] = 'Wählen Sie das Standarddesign für das interaktive Video.';
$string['defaulttitle'] = 'Ohne Titel';
$string['defaultvideosource'] = 'Standardquelle für Video/Audio';
$string['defaultvideosource_desc'] = 'Wählen Sie die Standardquelle für das interaktive Video.';
$string['delete'] = 'Löschen';
$string['deletecompletion'] = 'Abschluss löschen';
$string['deletecompletiondesc'] = 'Ist diese Option aktiviert, können Abschlussdaten vor oder nach dem Abschluss der Interactive-Video-Aktivität gelöscht werden.';
$string['deletedbyinstructor'] = 'Vom Trainer gelöscht';
$string['deleteinteraction'] = 'Interaktion löschen';
$string['deleteinteractionconfirm'] = 'Möchten Sie diese Interaktion wirklich löschen?';
$string['deleteownprogress'] = 'Möchten Sie Ihren Fortschritt wirklich zurücksetzen? Alle bisherigen Versuche und zugehörigen Dateien werden gelöscht. Ihre aktuelle Bewertung in der Bewertungsübersicht bleibt davon unberührt.';
$string['deleterecordforselectedusers'] = 'Möchten Sie die ausgewählten Datensätze ({$a}) wirklich löschen?';
$string['deletethiscompletion'] = 'Abschlussdaten löschen';
$string['deletethiscompletiondesc'] = 'Möchten Sie die Abschlussdaten dieser Interaktion wirklich löschen? Alle bisherigen Versuche und zugehörigen Dateien werden dabei gelöscht.';
$string['deletevideo'] = 'Video/Audio löschen';
$string['deletevideobutton'] = '<i class="fa fa-trash fa-fw iv-mr-2"></i>Video/Audio löschen';
$string['deletevideoconfirm'] = 'Möchten Sie diese Datei wirklich löschen?';
$string['devtoolsdetected'] = 'Entwicklerwerkzeuge erkannt. Der Videoplayer wurde entfernt.';
$string['disablechapternavigation'] = 'Kapitelmenü deaktivieren';
$string['disablecustomtime'] = 'Individuelle Videozeiten deaktivieren';
$string['disablecustomtime_desc'] = 'Bei aktivierter Option können Nutzer im Formular zum Bearbeiten der Aktivität keine eigenen Start- und Endzeiten festlegen.';
$string['disableinteractionclick'] = 'Anklicken von Interaktionen in der Videonavigation deaktivieren';
$string['disableinteractionclickuntilcompleted'] = 'Interaktionen erst nach ihrem Abschluss anklickbar machen';
$string['dismissible'] = 'Schließbar';
$string['dismissibleandskippable'] = 'Ist das Schließen erlaubt, kann eine nicht abgeschlossene Interaktion über die Schaltfläche „Schließen“ beendet werden. <br>Ist das Überspringen erlaubt, kann eine nicht abgeschlossene Interaktion übersprungen werden. Andernfalls muss der Nutzer die Interaktion abschließen.';
$string['dismissnotallowedbeforecompletion'] = 'Sie können diese Interaktion nicht vor ihrem Abschluss schließen.';
$string['displayasstartscreen'] = 'Beschreibung auf dem Startbildschirm anzeigen';
$string['displaydescriptiononactivityheader'] = 'Beschreibung im Aktivitätskopf anzeigen';
$string['displayinline'] = 'Direkt auf der Kursseite anzeigen';
$string['displayoptions'] = 'Anzeigeoptionen';
$string['displayoptionsbottom'] = 'Unter dem Video';
$string['displayoptionsinline'] = 'Direkt eingebettet';
$string['displayoptionspopup'] = 'Pop-up';
$string['displayoptionsside'] = 'Seitenbereich';
$string['distractionfreemode'] = 'Ablenkungsfreien Modus verwenden';
$string['download'] = 'Herunterladen';
$string['draftsaved'] = 'Änderungen gespeichert';
$string['duration'] = 'Dauer';
$string['edit'] = 'Bearbeiten';
$string['editinteractiontitle'] = '{$a->name} bei {$a->time} bearbeiten';
$string['editinteractiontitlenotime'] = '{$a} bearbeiten';
$string['editwithctrlclick'] = 'Bearbeiten (Strg/Cmd + Klick für Schnellbearbeitung)';
$string['email'] = 'E-Mail';
$string['enablecontenttypes'] = 'Aktivierte Inhaltstypen';
$string['enablecontenttypes_desc'] = 'Wählen Sie die Inhaltstypen aus, die beim Bearbeiten interaktiver Inhalte verfügbar sein sollen.';
$string['enablecoursesettings'] = 'Einstellungen auf Kursebene erlauben';
$string['enablecoursesettings_desc'] = 'Aktiviert die Einstellungen auf Kursebene für interaktive Videos.';
$string['enableembedly'] = 'Embedly-Playerbibliothek aktivieren';
$string['enableembedly_desc'] = 'Embedly muss vorgeladen werden, um Videos von BunnyStream und VioStream abzuspielen. Wenn Ihre Website diese Quellen nicht verwendet, können Sie diese Option deaktivieren.';
$string['enablevideosources'] = 'Aktivierte Video-/Audioquellen';
$string['enablevideosources_desc'] = 'Wählen Sie die verfügbaren Video-/Audioquellen aus.';
$string['end'] = 'Endzeit';
$string['endscreen'] = 'Endbildschirm';
$string['endscreentext'] = 'Text für den Endbildschirm';
$string['endtime'] = 'Endzeit';
$string['endtimegreaterstarttime'] = 'Die Endzeit muss nach der Startzeit liegen.';
$string['endtimelesstotaltime'] = 'Die Zeit muss kürzer als die gesamte Videodauer sein.';
$string['endtip'] = '<b>Tipp:</b> Rechtsklick übernimmt die aktuelle Zeit. Strg/Cmd + Klick setzt die Zeit auf den Standardwert zurück.';
$string['errordeletingprogress'] = 'Beim Löschen Ihres Fortschritts ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.';
$string['errorplaynotallowed'] = 'Ihr Browser erlaubt keine automatische Videowiedergabe. Klicken Sie auf „Wiedergabe“, um Videoinformationen zu laden.';
$string['expand'] = 'Ausklappen';
$string['expected'] = 'Erwartet';
$string['external'] = 'Extern';
$string['fastforward200'] = '0,2 s vorspulen (Strg/Cmd für 1 s)';
$string['fbdescription'] = 'Fügen Sie Videoinhalte mit individuellen Start- und Endzeiten hinzu.';
$string['fetchurlnotallowed'] = 'Diese URL gehört nicht zu einem unterstützten Videoanbieter.';
$string['file'] = 'Datei hochladen';
$string['filters'] = 'Filter';
$string['first'] = 'Erster';
$string['firstname'] = 'Vorname';
$string['fontfamilies'] = 'Schriftfamilien';
$string['formvaluesarereset'] = 'Die Formularwerte wurden zurückgesetzt. Bitte speichern Sie das Formular erneut.';
$string['forward'] = 'Vorwärts';
$string['forwardtooltip'] = 'Vorspulen (Pfeil rechts)';
$string['fullavailablewidth'] = 'Vorschaubild über die gesamte Breite';
$string['fullreport'] = 'Vollständiger Bericht';
$string['fullscreen'] = 'Vollbild';
$string['fullscreenisnotsupported'] = 'Dieses Gerät unterstützt keinen Vollbildmodus.';
$string['generalsettings'] = 'Allgemeine Einstellungen';
$string['goto'] = 'Gehe zu';
$string['gradenonzero'] = 'Die Bewertung muss mindestens 0 betragen.';
$string['hidecontrol'] = 'Steuerelement ausblenden';
$string['hideinteractions'] = 'Interaktionen in der Videonavigation ausblenden';
$string['hidemainvideocontrols'] = 'Hauptsteuerelemente des Videos ausblenden';
$string['html5video'] = 'HTML5-Video/Audio hochladen';
$string['id'] = 'ID';
$string['import'] = 'Importieren';
$string['importcontent'] = 'Inhalte importieren';
$string['incomplete'] = 'Nicht abgeschlossen';
$string['inprogress'] = 'In Bearbeitung';
$string['instance'] = 'Instanz';
$string['interactionadded'] = 'Interaktion erfolgreich hinzugefügt.';
$string['interactionalreadyexists'] = 'Zu diesem Zeitpunkt ist bereits eine Interaktion vorhanden.';
$string['interactionbar'] = 'Interaktionsleiste';
$string['interactioncanonlybeaddedbetweenstartandendtime'] = 'Eine Interaktion kann nur zwischen der in den Aktivitätseinstellungen festgelegten Startzeit ({$a->start}) und Endzeit ({$a->end}) des Videos hinzugefügt werden.';
$string['interactioncount'] = 'Interaktionen';
$string['interactiondefaults'] = 'Standardwerte für Interaktionen';
$string['interactiondeleted'] = 'Interaktion erfolgreich gelöscht.';
$string['interactionimported'] = 'Interaktion erfolgreich importiert.';
$string['interactionisbetweentheskipsegment'] = 'Innerhalb eines übersprungenen Abschnitts kann keine Interaktion hinzugefügt werden.';
$string['interactions'] = 'Interaktionen';
$string['interactionsdeleted'] = '{$a} Interaktionen erfolgreich gelöscht.';
$string['interactionsin'] = 'Interaktionen in {$a}';
$string['interactionsnotsupportedonlivevideo'] = 'Interaktionen werden in Livevideos nicht unterstützt.';
$string['interactionupdated'] = 'Interaktion erfolgreich aktualisiert.';
$string['interactivevideo'] = 'Interaktives Video';
$string['interactivevideo:addinstance'] = 'Interaktives Video hinzufügen';
$string['interactivevideo:edit'] = 'Interaktives Video bearbeiten';
$string['interactivevideo:editreport'] = 'Bericht für interaktives Video bearbeiten';
$string['interactivevideo:manage'] = 'Interaktive Videos verwalten';
$string['interactivevideo:view'] = 'Interaktives Video anzeigen';
$string['interactivevideo:viewreport'] = 'Bericht für interaktives Video anzeigen';
$string['interactivevideoname'] = 'Name';
$string['invalidcolumn'] = 'Die Spalte „{$a->field}“ ist erforderlich.';
$string['invaliddefaults'] = 'Ungültige Standardwerte.';
$string['invalidtimeformat'] = 'Bitte geben Sie eine gültige Zeit ein.';
$string['invalidtimestamp'] = 'Ungültiger Zeitstempel';
$string['invalidtimestampformat'] = 'Ungültiges Zeitformat.';
$string['invalidtoken'] = 'Ungültiger Token';
$string['invalidvideourl'] = 'Die angegebene URL ist ungültig.';
$string['invalidxpvalue'] = 'Geben Sie einen XP-Wert zwischen 0 und dem Höchstwert der Interaktion ein.';
$string['keepcurrent'] = 'Aktuellen Wert beibehalten';
$string['last'] = 'Letzter';
$string['lastname'] = 'Nachname';
$string['launchinpopup'] = 'Im Pop-up öffnen';
$string['launchvideo'] = 'Video starten';
$string['layer-down'] = 'Ebene nach unten';
$string['layer-up'] = 'Ebene nach oben';
$string['list'] = 'Liste';
$string['live'] = 'Live';
$string['loadvideo'] = 'Video laden';
$string['lock'] = 'Entsperrt: Klicken zum Sperren';
$string['manage'] = 'Verwalten';
$string['manageivfor'] = 'Interaktive Videos für {$a} verwalten';
$string['managevideos'] = 'Interaktive Videos verwalten';
$string['max'] = 'Max.';
$string['maximum'] = 'Maximum {$a}';
$string['min'] = 'Min.';
$string['minimum'] = 'Minimum {$a}';
$string['minimumcompletionpercentage'] = 'Interaktionen abschließen (%)';
$string['modulename'] = 'Interaktives Video';
$string['modulename_help'] = 'Mit der Aktivität „Interaktives Video“ können Sie Videos mit Aufgaben und Interaktionen erstellen.';
$string['modulenameplural'] = 'Interaktive Videos';
$string['moresettings'] = 'Weitere Einstellungen';
$string['mute'] = 'Stummschalten';
$string['mutetooltip'] = 'Stummschalten (M)';
$string['nametip'] = '<b>Tipp:</b> Rechtsklick setzt den Namen auf den Standardtitel des Videos zurück, falls vorhanden.';
$string['needsgrading'] = 'Bewertung erforderlich';
$string['new'] = 'Neu';
$string['next'] = 'Weiter';
$string['no'] = 'Nein';
$string['nocontent'] = 'Kein Inhalt';
$string['nocontentfound'] = 'Keine Inhalte gefunden.';
$string['nodefaultssaved'] = 'Für diesen Kurs wurden keine Standardwerte für Interaktionen gespeichert.';
$string['nofound'] = 'Nicht gefunden';
$string['nonzero'] = 'Darf nicht null sein';
$string['nopermissiontoaddinteractions'] = 'Sie haben keine Berechtigung, Interaktionen hinzuzufügen.';
$string['nopermissiontoview'] = 'Sie haben keine Berechtigung, dieses interaktive Video anzusehen.';
$string['notstarted'] = 'Nicht gestartet';
$string['novalidvideoinfo'] = 'Keine gültigen Videoinformationen gefunden.';
$string['novideofile'] = 'Sie müssen eine Videodatei hochladen.';
$string['novideourl'] = 'Sie müssen hier eine URL einfügen.';
$string['numeric'] = 'Nur Zahlen';
$string['off'] = 'Aus';
$string['openinnewtab'] = 'In neuem Tab öffnen';
$string['options'] = 'Optionen';
$string['outcomelevel'] = 'Niveau bei Abschluss';
$string['outcomemode'] = 'Bewertungsmethode';
$string['outcomemode_fixed'] = 'Festes Niveau bei Abschluss';
$string['outcomemode_score'] = 'Anhand der Punktzahl und Schwellenwerte';
$string['outcomesreportfedby'] = 'Bewertet anhand von:';
$string['outcomesreportnotattempted'] = 'Nicht versucht';
$string['outcomesreportrated'] = 'Bewertet';
$string['outcomesreportunrated'] = 'Nicht bewertet';
$string['outcomethresholdfrom'] = '{$a} ab (%)';
$string['outcomethresholdinvalid'] = 'Geben Sie eine ganze Zahl zwischen 1 und 100 ein, die über der vorherigen Stufe liegt.';
$string['outcomethresholdlowest'] = 'Ab 0 %';
$string['overridexperror'] = 'Der überschriebene XP-Wert konnte nicht gespeichert werden. Bitte versuchen Sie es erneut.';
$string['overridexpsaved'] = 'XP aktualisiert.';
$string['participant'] = 'Teilnehmer';
$string['passwordprotected'] = 'Kennwortgeschützt';
$string['passwordprotected_help'] = 'Aktivieren Sie diese Option, wenn das Video kennwortgeschützt ist. So bleibt das Kennwortfeld auf der Seite zugänglich.';
$string['passwordrequired'] = 'Kennwort erforderlich';
$string['paste'] = 'Einfügen';
$string['pause'] = 'Pause';
$string['pauseonblur'] = 'Video pausieren, wenn der Tab inaktiv ist';
$string['pausetooltip'] = 'Pause (Leertaste)';
$string['play'] = 'Wiedergabe';
$string['playbackcontrols'] = 'Wiedergabesteuerung';
$string['playbackrate'] = 'Wiedergabegeschwindigkeit';
$string['player'] = 'Player';
$string['playpause'] = 'Wiedergabe/Pause';
$string['playtooltip'] = 'Wiedergabe (Leertaste)';
$string['playvideo'] = 'Video abspielen';
$string['pluginadministration'] = 'Verwaltung von Interactive Video';
$string['pluginname'] = 'Interactive Video';
$string['posterimage'] = 'Vorschaubild';
$string['preventdevtools'] = 'Rechtsklick deaktivieren und Entwicklerwerkzeuge erkennen';
$string['preventseeking'] = 'Spulen verhindern';
$string['preventskipping'] = 'Überspringen verhindern';
$string['preview'] = 'Vorschau';
$string['previous'] = 'Zurück';
$string['privacy:metadata:attachments'] = 'Element-ID des Anhangs.';
$string['privacy:metadata:char1'] = 'Als Char1 gespeicherte Daten.';
$string['privacy:metadata:char2'] = 'Als Char2 gespeicherte Daten.';
$string['privacy:metadata:char3'] = 'Als Char3 gespeicherte Daten.';
$string['privacy:metadata:completeditems'] = 'Liste der abgeschlossenen Elemente.';
$string['privacy:metadata:completiondetails'] = 'Abschlussinformationen eines Nutzers.';
$string['privacy:metadata:completionid'] = 'ID des Abschlusses.';
$string['privacy:metadata:completionpercentage'] = 'Abschlussprozentsatz eines Nutzers.';
$string['privacy:metadata:core_grades'] = 'Aus Interaktionspunkten berechnete Lernzielbewertungen werden in der Bewertungsübersicht gespeichert.';
$string['privacy:metadata:interactivevideo_completion'] = 'Abschlussstatus eines Nutzers für die Aktivität „Interaktives Video“.';
$string['privacy:metadata:interactivevideo_log'] = 'Protokoll eines Nutzers für die Aktivität „Interaktives Video“.';
$string['privacy:metadata:intg1'] = 'Als Intg1 gespeicherte Daten.';
$string['privacy:metadata:intg2'] = 'Als Intg2 gespeicherte Daten.';
$string['privacy:metadata:intg3'] = 'Als Intg3 gespeicherte Daten.';
$string['privacy:metadata:text1'] = 'Als Text1 gespeicherte Daten.';
$string['privacy:metadata:text2'] = 'Als Text2 gespeicherte Daten.';
$string['privacy:metadata:text3'] = 'Als Text3 gespeicherte Daten.';
$string['privacy:metadata:timecompleted'] = 'Zeitpunkt, zu dem ein Nutzer die Aktivität abgeschlossen hat.';
$string['privacy:metadata:timecreated'] = 'Zeitpunkt der Erstellung des Abschlussstatus bzw. Protokolls.';
$string['privacy:metadata:timeended'] = 'Zeitpunkt, zu dem das Video beendet wurde.';
$string['privacy:metadata:timemodified'] = 'Zeitpunkt der letzten Änderung des Abschlussstatus bzw. Protokolls.';
$string['privacy:metadata:userid'] = 'ID eines Nutzers.';
$string['privacy:metadata:xp'] = 'Erfahrungspunkte eines Nutzers.';
$string['progress'] = 'Fortschritt';
$string['progressbar'] = 'Fortschrittsbalken';
$string['providerapis'] = 'Anbieter-APIs';
$string['purchaseemail'] = 'E-Mail-Adresse beim Kauf';
$string['purchaseemail_desc'] = 'Geben Sie die E-Mail-Adresse ein, die Sie beim Kauf dieses Plugins verwendet haben. Um das Plugin zu deaktivieren, leeren Sie dieses Feld.';
$string['quality'] = 'Qualität';
$string['quicksettings'] = 'Schnelleinstellungen';
$string['redo'] = 'Wiederholen';
$string['refresh'] = 'Aktualisieren';
$string['remainingtime'] = 'Verbleibende Zeit';
$string['replay'] = 'Erneut abspielen';
$string['replayaftercompletion'] = 'Nach Abschluss erneut abspielen';
$string['replaybehavior'] = 'Verhalten bei erneuter Wiedergabe';
$string['report'] = 'Bericht';
$string['reportfields'] = 'Berichtsfelder';
$string['reportfields_desc'] = 'Wählen Sie die Nutzerfelder aus, die im Bericht angezeigt werden sollen.';
$string['reportfor'] = 'Bericht für {$a}';
$string['reportsettings'] = 'Berichtseinstellungen';
$string['reportwithctrlclick'] = 'Bericht (Strg/Cmd + Klick für Schnellbericht)';
$string['required'] = 'Erforderlich';
$string['requiremintime'] = 'Mindestens benötigte Zeit in Minuten';
$string['requiremintime_help'] = 'Geben Sie an, wie viele Minuten ein Benutzer mindestens mit der Aktivität verbringen muss, bevor sie als abgeschlossen markiert werden kann.';
$string['rerun_desc'] = 'Ist die Option aktiviert, muss eine bereits abgeschlossene Interaktion erneut bearbeitet werden, wenn der Nutzer den Abschnitt wieder aufruft.';
$string['reset'] = 'Zurücksetzen';
$string['resetappearancesettings'] = 'Darstellungseinstellungen zurücksetzen';
$string['resetbehaviorsettings'] = 'Verhaltenseinstellungen zurücksetzen';
$string['resetcompletion'] = 'Abschluss zurücksetzen';
$string['resetgrades'] = 'Bewertungen zurücksetzen';
$string['resetintro'] = 'Beschreibung leeren';
$string['resetpasswordprotected'] = 'Kennwortschutz zurücksetzen';
$string['resetprogress'] = 'Fortschritt zurücksetzen';
$string['resetsettings'] = 'Einstellungen zurücksetzen';
$string['resettodefaults'] = 'Auf Standardwerte zurücksetzen';
$string['resettositedefaults'] = 'Auf Website-Standardwerte zurücksetzen';
$string['resize'] = 'Größe ändern (E)';
$string['restart'] = 'Neu starten';
$string['resync'] = 'Inhalte erneut aus der Inhaltssammlung synchronisieren';
$string['rewind'] = 'Zurückspulen';
$string['rewind200'] = '0,2 s zurückspulen (Strg/Cmd für 1 s)';
$string['rewindtooltip'] = 'Zurückspulen (Pfeil links)';
$string['rightclicktosetcurrenttime'] = 'Rechtsklick übernimmt die aktuelle Zeit. Eingabetaste speichert.';
$string['rowsselected'] = '%d Zeilen ausgewählt';
$string['save'] = 'Speichern';
$string['search'] = 'Suchen';
$string['section'] = 'Abschnitt';
$string['sectionname'] = 'Abschnittsname';
$string['sectionnum'] = 'Abschnitt';
$string['seekingdisabled'] = 'Spulen ist deaktiviert.';
$string['segmentendmustbegreaterthantimestamp'] = 'Das Ende des Abschnitts muss nach dem Start liegen.';
$string['select'] = 'Auswählen …';
$string['selectacontenttypetoadd'] = 'Inhaltstyp zum Hinzufügen auswählen';
$string['selectactivity'] = 'Aktivität auswählen';
$string['selectcourse'] = 'Kurs auswählen';
$string['selectinteraction'] = 'Überprüfen Sie Ihre Auswahl.';
$string['selectoruploadcontent'] = 'Wählen Sie einen Inhalt aus der Liste oder erstellen Sie einen neuen.';
$string['separatesearchtermsbyslash'] = 'Tipp: Trennen Sie mehrere Suchbegriffe mit „|“.';
$string['setasdefault'] = 'Als Standardwerte für diesen Kurs festlegen';
$string['settings'] = 'Einstellungen';
$string['settingssaved'] = 'Einstellungen gespeichert';
$string['settingstooltip'] = 'Einstellungen (Strg/Cmd + Klick für Schnelleinstellungen)';
$string['share'] = 'Teilen';
$string['sharethismoment'] = 'Diesen Zeitpunkt teilen (S)';
$string['show'] = 'Anzeigen';
$string['showcompletionrequirements'] = 'Abschlussbedingungen anzeigen';
$string['showindexindf'] = 'Im ablenkungsfreien Modus anzeigen';
$string['showless'] = 'Weniger anzeigen';
$string['showmore'] = 'Mehr anzeigen';
$string['showname'] = 'Namen anzeigen';
$string['showoutcomes'] = 'Lernziele anzeigen auf';
$string['showoutcomesonendscreen'] = 'Endbildschirm';
$string['showoutcomesonreport'] = 'Bericht';
$string['showoutcomesonstartscreen'] = 'Startbildschirm';
$string['showposterimage'] = 'Vorschaubild anzeigen';
$string['showposterimageright'] = 'Vorschaubild rechts anzeigen';
$string['showprogressbar'] = 'Fortschrittsbalken anzeigen';
$string['skip'] = 'Überspringen';
$string['skippable'] = 'Überspringbar';
$string['skipped'] = 'Übersprungen';
$string['source'] = 'Quelle';
$string['spendatleast'] = 'Mindestens {$a} Minuten verbringen';
$string['squareposterimage'] = 'Quadratisches Vorschaubild';
$string['start'] = 'Startzeit';
$string['startchapter'] = 'Start';
$string['started'] = 'Gestartet';
$string['startscreen'] = 'Startbildschirm';
$string['startscreenonly'] = 'Nur Startbildschirm anzeigen; Video beim Start öffnen';
$string['starttime'] = 'Startzeit';
$string['starttimelessthanendtime'] = 'Die Startzeit muss vor der Endzeit liegen.';
$string['starttimelesstotaltime'] = 'Die Startzeit muss kürzer als die gesamte Videodauer sein.';
$string['starttip'] = '<b>Tipp:</b> Rechtsklick übernimmt die aktuelle Zeit. Strg/Cmd + Klick setzt die Zeit auf 00:00:00 zurück.';
$string['studentscompleted'] = 'Teilnehmer mit abgeschlossenem Video';
$string['studentsended'] = 'Teilnehmer, die das Video bis zum Ende angesehen haben';
$string['studentsstarted'] = 'Teilnehmer, die das Video gestartet haben';
$string['subplugintype_ivplugin'] = 'Inhaltstyp für Interactive Video';
$string['subplugintype_ivplugin_plural'] = 'Inhaltstypen für Interactive Video';
$string['subtitle'] = 'Untertitel';
$string['supportedlinks'] = '<b>Unterstützte Quellen:</b> {$a}';
$string['task_refreshlicensing'] = 'Lizenzen der Interactive-Video-Inhaltstypen aktualisieren';
$string['taskscompleted'] = 'Abgeschlossene Aufgaben';
$string['thereisanissueloadingvideo'] = 'Beim Laden des Videos ist ein Problem aufgetreten.';
$string['thisinteractionalreadyexists'] = 'Sie können nicht mehr als eine Interaktion vom Typ <b>{$a}</b> hinzufügen.';
$string['timecompleted'] = 'Abschlusszeit';
$string['timecompletedrange'] = 'Zeitraum des Abschlusses';
$string['timecreatedrange'] = 'Zeitraum des Starts';
$string['timemodified'] = 'Änderungszeit';
$string['timemustbebetweenstartandendtime'] = 'Die Zeit muss zwischen Start ({$a->start}) und Ende ({$a->end}) des Videos liegen.';
$string['timestamp'] = 'Zeitstempel';
$string['timestarted'] = 'Startzeit';
$string['tip'] = 'Tipp';
$string['title'] = 'Titel';
$string['todo'] = 'Zu erledigen';
$string['togglechapter'] = 'Kapitelmenü umschalten (C)';
$string['togglecompletion'] = 'Abschluss umschalten';
$string['togglecontrols'] = 'Steuerelemente umschalten';
$string['togglefullscreen'] = 'Vollbild umschalten (F)';
$string['toggleview'] = 'Ansicht umschalten';
$string['tutorial'] = 'Anleitung';
$string['type'] = 'Typ';
$string['undo'] = 'Rückgängig';
$string['unknowncontenttype'] = 'Unbekannter Inhaltstyp';
$string['unlock'] = 'Gesperrt: Klicken zum Entsperren';
$string['unmute'] = 'Ton einschalten';
$string['unmutetooltip'] = 'Ton einschalten (M)';
$string['unsavedchanges'] = 'Sie haben ungespeicherte Änderungen. Möchten Sie diese Seite wirklich verlassen?';
$string['updateavailable'] = 'Aktualisierung herunterladen';
$string['upload'] = 'Hochladen';
$string['uploadanimagebelow'] = 'Laden Sie unten ein Vorschaubild hoch.';
$string['uploadannotations'] = 'Interaktionen hochladen';
$string['uploadcontent'] = 'Inhalt hochladen';
$string['uploadfile'] = 'Datei hochladen';
$string['uploadvideo'] = 'Video/Audio hochladen';
$string['uploadvideobutton'] = '<i class="fa fa-upload fa-fw iv-mr-2"></i>Video/Audio hochladen';
$string['url'] = 'URL';
$string['usecardonlydesign'] = 'Minimalistisches Design verwenden';
$string['usecolumnlayout'] = 'Horizontales Layout verwenden';
$string['usecustomdescription'] = 'Individuelle Beschreibung verwenden';
$string['usecustomposterimage'] = 'Individuelles Vorschaubild verwenden';
$string['usefixedratio'] = 'Seitenverhältnis 16:9 erzwingen';
$string['useoriginalvideocontrols'] = 'Originale Videosteuerung verwenden';
$string['vdocipher_annotate'] = 'VdoCipher-Wasserzeichenhinweis';
$string['video'] = 'Video';
$string['videocontrols'] = 'Videosteuerung';
$string['videodisplayoptions'] = 'Playeroptionen';
$string['videoinformation'] = 'Videoinformationen';
$string['videolink'] = 'Direkt verlinktes externes Video/Audio';
$string['videoplayer'] = 'Videoplayer';
$string['videoprogress'] = 'Videofortschritt';
$string['videoquality'] = 'Videoqualität';
$string['videosharinginstructions'] = 'Websiteweite Hinweise zur Medienfreigabe';
$string['videosharinginstructions_desc'] = 'Geben Sie die Hinweise zur Medienfreigabe auf dieser Website ein, beispielsweise Richtlinien Ihrer Organisation für extern gehostete Medien.';
$string['videotoolbar'] = 'Videosymbolleiste';
$string['videourl'] = 'Video-/Audio-URL';
$string['videourlempty'] = 'Die Video-URL darf nicht leer sein.';
$string['videourlinvalid'] = 'Die Video-URL ist ungültig.';
$string['videourlplaceholder'] = 'Geben Sie die Video-URL ein oder laden Sie eine Datei hoch.';
$string['views'] = 'Aufrufe';
$string['visibilityonvideonav'] = 'In der Videonavigation sichtbar';
$string['visibilityonvideonav_desc'] = 'Ist diese Option aktiviert, wird die Interaktionsmarkierung vor und nach dem Abschluss in der Videonavigation angezeigt.';
$string['watch'] = 'Ansehen';
$string['watched'] = 'Angesehen (%)';
$string['watchedpercentage'] = 'Prozentual angesehen';
$string['watchtillend'] = 'Bis zum Ende ansehen';
$string['xp'] = 'XP';
$string['xpcompleted'] = 'Erhaltene XP';
$string['xpearned'] = 'Sie haben {$a} XP erhalten!';
$string['xplost'] = 'Sie haben {$a} XP verloren!';
$string['xppoint'] = 'Erfahrungspunkte';
$string['yes'] = 'Ja';
$string['youcannotviewthisannotationyet'] = 'Sie können diesen Inhalt noch nicht ansehen.';
$string['youmustcompletethistaskfirst'] = 'Sie müssen zuerst diese Aufgabe abschließen.';
$string['youmustspendatleastminutesbeforemarkingcomplete'] = 'Sie müssen mindestens <b>{$a->timerequire} Minuten</b> mit dieser Aktivität verbringen, bevor Sie sie als abgeschlossen markieren können.<br><br><b>Bisher verbrachte Zeit: {$a->timespent} Minuten.</b>';

$string['bunnystream'] = 'Bunny Stream';

$string['canvas'] = 'Canvas';

$string['customsegment_help'] = 'Legen Sie die Start- und Endzeit des Videoabschnitts fest. Mit einem Rechtsklick auf ein Eingabefeld übernehmen Sie die aktuelle Wiedergabeposition aus der Vorschau. Strg/Cmd + Klick setzt die Startzeit auf 0 beziehungsweise die Endzeit auf die Gesamtdauer des Videos.';

$string['deleterecordforitemforuserconfirm'] = 'Möchten Sie den Eintrag <b>{$a->item}</b> für <b>{$a->user}</b> wirklich löschen?<br><br><b>Hinweis:</b> Der Abschlussstatus, die Note und die Erfahrungspunkte werden dadurch nicht automatisch aktualisiert. Eine Neuberechnung erfolgt erst, wenn der Benutzer die Aktivität erneut bearbeitet.';

$string['dyntube'] = 'Dyntube';

$string['fontfamilies_desc'] = 'Legen Sie fest, welche Schriftarten im Auswahlmenü verfügbar sind. Geben Sie jede Schriftart in einer eigenen Zeile im Format „Anzeigename=Schriftfamilie“ an. Beispiel: Arial=Arial, sans-serif';

$string['gumlet'] = 'Gumlet';

$string['interactionscannotbeedited'] = '<i class="fa fa-warning iv-mr-2 fa-xl"></i>Mindestens ein Benutzer hat diese Aktivität bereits abgeschlossen. Sie können weiterhin Interaktionen hinzufügen oder bearbeiten. Abschlussstatus und Note werden jedoch erst neu berechnet, wenn der Benutzer die Aktivität erneut bearbeitet.';

$string['keyboardshortcuts'] = '<h5>Tastenkürzel:</h5><br><ul class="iv-pl-3"><li><b>Leertaste</b> – Wiedergabe starten oder pausieren</li><li><b>Pfeiltaste rechts</b> – Eine Sekunde vorspulen</li><li><b>Pfeiltaste links</b> – Eine Sekunde zurückspulen</li><li><b>Plus (+)</b> – Zeitleiste vergrößern</li><li><b>Minus (-)</b> – Zeitleiste verkleinern</li><li><b>Strg/Cmd + S</b> – Interaktionen speichern</li><li><b>A</b> – Liste der Interaktionstypen öffnen</li><li><b>E</b> – Mehrfachbearbeitung aktivieren</li><li><b>Strg/Cmd + A</b> – Interaktionen auswählen oder Auswahl aufheben</li><li><b>C</b> – Ausgewählte Interaktionen kopieren</li><li><b>D</b> – Ausgewählte Interaktionen herunterladen</li><li><b>X</b> – Ausgewählte Interaktionen löschen</li><li><b>I</b> – Importformular für Interaktionen öffnen</li><li><b>P</b> – Kopierte Interaktionen einfügen</li><li><b>U</b> – Uploadformular für Interaktionen öffnen</li></ul>';

$string['kinescope'] = 'Kinescope';

$string['mux'] = 'Mux';

$string['outcomerating_desc'] = 'Wählen Sie ein Lernziel aus, das durch diese Interaktion bewertet werden soll. Bei „Aus der Punktzahl“ wird das Ergebnis des Teilnehmers anhand der unten festgelegten Schwellenwerte einer Bewertungsstufe zugeordnet. Alternativ erhält der Teilnehmer beim Abschluss der Interaktion eine feste Bewertungsstufe. Tragen mehrere Interaktionen zu einem Lernziel bei, wird der Durchschnitt ihrer Bewertungsstufen berechnet, gewichtet nach den jeweiligen Erfahrungspunkten (XP).';

$string['outcomethresholds_desc'] = 'Jeder Wert gibt an, welchen Mindestanteil der möglichen Erfahrungspunkte (XP) ein Teilnehmer erreichen muss, um die jeweilige Bewertungsstufe zu erhalten. Maßgeblich ist der Prozentwert. Interaktionen, die beim Abschluss grundsätzlich die volle Punktzahl vergeben, zählen als 100 %. Das gilt beispielsweise für H5P-Inhalte ohne die Option „Teilpunkte vergeben“ sowie für Interaktionen, deren Abschluss allein durch das Ansehen erfasst wird.';

$string['panopto'] = 'Panopto';

$string['peertube'] = 'PeerTube';

$string['rumble'] = 'Rumble';

$string['rutube'] = 'RuTube';

$string['showoutcomes_help'] = 'Zeigt die Lernziele dieser Aktivität und die aktuelle Bewertung des Teilnehmers für jedes Lernziel auf dem Startbildschirm, dem Endbildschirm oder auf beiden Bildschirmen an. Wird dort bereits eine Beschreibung oder ein Abschlusstext angezeigt, erscheint die Liste darunter. Andernfalls wird nur die Liste angezeigt.';

$string['showoutcomesonendscreen_help'] = 'Zeigt die Lernziele der Aktivität und die jeweilige Bewertung des Teilnehmers auf dem Endbildschirm an. Ist ein Abschlusstext vorhanden, erscheint die Liste darunter. Andernfalls wird nur die Liste angezeigt.';

$string['showoutcomesonreport_help'] = 'Fügt dem Bericht eine Spalte hinzu, die angibt, für wie viele Lernziele der Aktivität jeder Teilnehmer bereits eine Bewertung erhalten hat. Ein Klick auf die Spaltenüberschrift zeigt, wie sich die Teilnehmer auf die Bewertungsstufen der einzelnen Lernziele verteilen.';

$string['showoutcomesonstartscreen_help'] = 'Zeigt die Lernziele der Aktivität und die jeweilige Bewertung des Teilnehmers auf dem Startbildschirm an. Ist dort eine Beschreibung vorhanden, erscheint die Liste darunter. Andernfalls wird nur die Liste angezeigt.';

$string['soundcloud'] = 'SoundCloud';

$string['spotify'] = 'Spotify';

$string['spotlightr'] = 'Spotlightr';

$string['sproutvideo'] = 'SproutVideo';

$string['vdocipher'] = 'VdoCipher';

$string['vdocipher_annotate_desc'] = 'Dynamisches Wasserzeichen für die VdoCipher-Wiedergabe. Geben Sie das Wasserzeichen in der Annotationssyntax von VdoCipher an (siehe <a href="https://www.vdocipher.com/docs/server/playbackauth/anno/">Dokumentation zur Erstellung von Annotationen</a>). Lassen Sie das Feld leer, wenn kein Wasserzeichen angezeigt werden soll. Folgende Platzhalter werden wie im offiziellen VdoCipher-Filter-Plugin unterstützt: {name}, {email}, {username}, {id}, {ip} und {date.FORMAT} mit einem PHP-Datumsformat, beispielsweise {date.d/m/Y}. Beispiel: <code>[{\'type\':\'rtext\',\'text\':\'{name} {email}\',\'alpha\':\'0.6\',\'color\':\'0xFFFFFF\',\'size\':\'14\',\'interval\':\'8000\'}]</code>';

$string['videonavhelp'] = '<h5>Tipps:</h5><ul class="iv-pl-3"><li>Klicken Sie auf die Navigationsleiste des Videos, um zu einer bestimmten Wiedergabeposition zu springen.</li><li>Klicken Sie mit der rechten Maustaste auf die Navigationsleiste, um an dieser Stelle einen Inhalt hinzuzufügen.</li><li>Klicken Sie auf das Symbol einer Interaktion, um deren Inhalt anzuzeigen.</li><li>Klicken Sie mit der rechten Maustaste auf das Symbol einer Interaktion, um den Inhalt zu bearbeiten.</li><li>Halten Sie beim Vor- oder Zurückspulen Strg/Cmd gedrückt, um in Schritten von einer Sekunde zu springen.</li><li>Halten Sie die Umschalttaste gedrückt und scrollen Sie auf der Zeitleiste, um horizontal zu navigieren.</li><li>Halten Sie Strg/Cmd gedrückt und scrollen Sie auf der Zeitleiste, um hinein- oder herauszuzoomen.</li><li>Ziehen Sie das Symbol einer Interaktion, um ihren Zeitpunkt zu ändern.</li></ul>';

$string['vidyard'] = 'Vidyard';

$string['vimeo'] = 'Vimeo';

$string['viostream'] = 'Viostream';

$string['wistia'] = 'Wistia';

$string['youtube'] = 'YouTube';

$string['yt'] = 'YouTube';
