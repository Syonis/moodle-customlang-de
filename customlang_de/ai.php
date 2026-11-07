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
 * @subpackage ai
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_explain_text_instruction'] = 'Sie erhalten eine Texteingabe von jemandem. Ihre Aufgabe ist es, den bereitgestellten Text zu erklären. Befolgen Sie diese Richtlinien: 1. Ausarbeiten: Erläutern Sie wichtige Ideen und Konzepte, und stellen Sie sicher, dass die Erklärung sinnvolle Tiefe hinzufügt und es vermeidet, den Text wörtlich zu wiederholen. 2. Vereinfachen: Zerlegen Sie komplexe Begriffe oder Ideen in einfachere Komponenten, damit sie für ein breites Publikum, einschließlich Lehrern, leicht verständlich sind. 3. Kontext bereitstellen: Erklären Sie, warum etwas passiert, wie es funktioniert oder was sein Zweck ist. Fügen Sie relevante Beispiele oder Analogien ein, um das Verständnis zu verbessern, wo dies angebracht ist. 4. Logisch organisieren: Strukturieren Sie Ihre Erklärung so, dass sie natürlich fließt, beginnend mit grundlegenden Ideen, bevor Sie zu feineren Details übergehen. Wichtige Anweisungen: 1. Geben Sie die Zusammenfassung nur im Klartext zurück. 2. Fügen Sie keine Markdown-Formatierung, Begrüßungen oder Plattitüden ein. 3. Konzentrieren Sie sich auf Klarheit, Prägnanz und Zugänglichkeit. Stellen Sie sicher, dass die Erklärung leicht zu lesen ist und die wichtigsten Punkte des Originaltexts effektiv vermittelt.';
$string['action_summarise_text_instruction'] = 'Sie erhalten eine Texteingabe vom Benutzer. Ihre Aufgabe ist es, den bereitgestellten Text zusammenzufassen. Befolgen Sie diese Richtlinien: 1. Verdichten: Kürzen Sie lange Passagen auf die wichtigsten Punkte. 2. Vereinfachen: Machen Sie komplexe Informationen verständlicher, insbesondere für Schüler. Wichtige Anweisungen: 1. Geben Sie die Zusammenfassung nur im Klartext zurück. 2. Fügen Sie keine Markdown-Formatierung, Grüße oder Plattitüden ein. 3. Konzentrieren Sie sich auf Klarheit, Prägnanz und Zugänglichkeit. Stellen Sie sicher, dass die Zusammenfassung leicht zu lesen ist und die wichtigsten Punkte des Originaltexts effektiv vermittelt.';
$string['enableuserratelimit'] = 'Obergrenze für Nutzer festlegen';
$string['enableuserratelimit_help'] = 'Anzahl der Anfragen begrenzen, die jeder Nutzer in jeder Stunde an den KI-Provider stellen kann.';
$string['privacy:metadata:ai_action_explain_text'] = 'Eine Tabelle, in der die von Nutzern gestellten Erläuterungstextanforderungen gespeichert werden.';
$string['privacy:metadata:ai_action_register'] = 'Tabelle, in der die von Nutzern gestellten Aktionsanfragen gespeichert werden.';
$string['privacy:metadata:ai_policy_register'] = 'Tabelle, in der der Status der Zustimmung zu den KI-Bedingungen für jeden einzelnen Nutzer gespeichert werden.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Zeit, zu der der Nutzer die KI-Bedingungen akzeptiert hat';
$string['providerinstancedeletefailed'] = 'Die KI-Provider-Instanz {$a} kann nicht gelöscht werden. Der Provider wird entweder verwendet oder es gibt ein Datenbankproblem. Prüfen Sie, ob der Provider aktiv ist, oder wenden Sie sich an die Administratoren der Datenbank.';
$string['providerinstancedisablefailed'] = 'Die KI-Provider-Instanz kann nicht deaktiviert werden. Der Provider wird entweder verwendet oder es gibt ein Datenbankproblem. Prüfen Sie, ob der Provider aktiv ist, oder wenden Sie sich an die Administratoren der Datenbank.';
$string['userpolicy'] = '<h4>Willkommen bei der neuen KI-Funktion!</h4> <p>Diese Funktion für künstliche Intelligenz (KI) basiert ausschließlich auf externen Large Language Models (LLM), um Ihr Lern- und Lehrerlebnis zu verbessern. Bevor Sie diese KI-Dienste nutzen, lesen Sie bitte diese Nutzungsrichtlinie.</p> <h4>Genauigkeit von KI-generierten Inhalten</h4> <p>KI kann nützliche Vorschläge und Informationen liefern, ihre Genauigkeit kann jedoch variieren. Sie sollten die bereitgestellten Infos immer überprüfen und sicherstellen, dass sie korrekt, vollständig und für Ihre spezifische Situation geeignet sind.</p> <h4>Wie Ihre Daten verarbeitet werden</h4> <p>Diese KI-Funktion verwendet externe "Large Language Models" (LLM). Wenn Sie diese Funktion benutzen, werden alle von Ihnen übermittelten Eingaben oder personenbezogenen Daten gemäß der Datenschutzrichtlinie dieser LLMs verarbeitet. Wir empfehlen Ihnen, die Datenschutzrichtlinie des LLMs zu lesen, um zu verstehen, wie mit Ihren personenbezogenen Daten umgegangen wird. Darüber hinaus können Ihre Interaktionen mit den KI-Funktionen auf dieser Website aufgezeichnet und gespeichert werden. Wenn Sie Fragen hierzu haben, wenden Sie sich bitte an Ihre Trainer oder die Lernorganisation.</p> <p>Wenn Sie fortfahren, erkennen Sie an, dass Sie diese Richtlinie verstehen und ihr zustimmen.</p>';
$string['userratelimit'] = 'Maximale Anzahl von Anfragen pro Nutzer';
$string['userratelimit_help'] = 'Maximale Anzahl von Anfragen pro Stunde und pro Nutzer';
