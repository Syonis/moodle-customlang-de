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
 * @subpackage coderunner
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowattachments_help'] = 'Ob und wie viele Anhänge Teilnehmer ihren Einreichungen beifügen dürfen. Die Anhänge werden in das Runtime-Arbeitsverzeichnis kopiert und eine durch Kommata getrennte Liste der Namen der Anhänge wird der Vorlage in der Twig-Variablen {{ ATTACHMENTS }} zur Verfügung gestellt. Warnung: Das Zulassen von Anhängen könnte bei großen Klassen und/oder großen Anhängen Auswirkungen auf die Leistung oder den Plattenplatz der Moodle- und Jobe-Server haben. Der Moodle-Server und die Jobe-Server vor Februar 2019 speichern alle Anhänge auf unbestimmte Zeit.';
$string['enable_diff_check_desc'] = 'Geben Sie Teilnehmer eine Schaltfläche "Unterschiede anzeigen", wenn ihre Antwort falsch ist und ein Validierer für genaue Übereinstimmung verwendet wird (experimentell).';
$string['giveup_help'] = 'Wenn diese Option aktiviert ist, sehen Teilnehmer einen Button, um die Interaktion mit der Frage abzubrechen und stattdessen das allgemeine Feedback anzuzeigen.

Der Button "Stop und Feedback anzeigen" kann gleich zu Beginn angezeigt werden oder sobald die Bewertung durch die Teilnehmer nicht mehr verbessert werden kann.';
$string['gradingcontrols_help'] = 'Die Standardbewertung "Genaue Übereinstimmung" vergibt nur Punkte, wenn der Output dem im Testfall erwarteten Wert exakt entspricht. Nachfolgende Leerzeichen werden von allen Zeilen entfernt und etwaige nachfolgende Leerzeilen werden gelöscht bevor der Vergleichstest durchgeführt wird.

Die Bewertung "Ungefähre Übereinstimmung" ist ähnlich. Es werden zusätzlich mehrere Leerzeichen und Tabulatorzeichen zu einem Leerzeichen zusammengefasst, alle Leerzeilen gelöscht und die Strings in Kleinbuchstaben umgewandelt.

Die Bewertung "Regulärer Ausdruck" verwendet das "Erwartet" Feld des Testfalls als Regulären Ausdruck (ohne PERL Begrenzungszeichen) und überprüft den das erwartete Ergebnis im Output enthalten ist. So würde beispielsweise ein erwarteter Wert von \'ab.*z\' jeden Output der die Zeichen \'ab\' und ein nachfolgendes \'z\' enthält. Um den gesamten Output zu mit dem Regulären Ausdruck zu überprüfen, beginnen Sie den Regulären Ausdruck mit \'\\A\' und schließen Sie mit \'\\Z\'. Der Reguläre Ausdruck Vergleich verwendet die MULTILINE und DOTALL Optionen.

Die Bewerter-Vorlage nimmt an, dass der Output des Programms ein Bewertungsergebnis ist, d.h. die Vorlage überprüft *und bewertet* die Abgabe der Teilnehmer. Der einzige Output eines solchen Template Programms muss ein JSON-kodierter Datensatz sein.

Wenn die Vorlage eine Pro-Test-Vorlage (d.h. nicht eine Kombinationsvorlage) ist, muss der JSON String eine Zeile der Ergebnistabelle beschreiben und sollte zumindest ein \'fraction\' Feld enthalten, das mit TEST.mark multipliziert wird, um festzustellen wie viele Punkte für den Testfall vergeben werden. Er sollte auch ein \'got\' Feld, das den Wert der in der \'got\' Spalte angezeigt wird enthalten. Die anderen Spalten der Ergebnistabelle (Testcode, stdin, erwartet) können von dom Vorlage-Programm definiert werden und werden statt des Wertes des Testfalls verwendet. Beispiel: Wenn der Output des Programms der String <code>{"fraction":0.5, "got": "Die Hälfte der Antworten war richtig!"}</code> ist, würden die Hälfte der Punkte für den entsprechenden Testfall vergeben und die \'Erhalten\' Spalte würde den Text "Die Hälfte der Antworten war richtig!" enthalten. Weitere Spalten können zur Ergebnistabelle hinzugefügt werden, in dem weitere Attribute zur JSON Ausgabe und zum Feld der Ergebnistabelle der Frage hinzugefügt werden.

Wenn die Vorlage eine Kombinationsvorlage ist, sollte der JSON-String Output der Vorlagenbewertung ebenfalls ein "fraction" Feld enthalten, in diesem Fall für die Gesamtpunktezahl. Der String kann keines oder mehr der folgenden Felder enthalten: \'prologuehtml\', \'testresults\', \'epiloguehtml\', \'columnformats\', \'showoutputonly\', \'showdifferences\' and \'graderstate\'.
Die Felder \'prologuehtml\' und \'epiloguehtml\' enthalten HTML das vor bzw. nach der (optionalen) Ergebnistabelle angezeigt wird. Das \'testresults\' Feld, wenn vorhanden, ist eine Liste von Listen und wird verwendet um eine Art Testergebnistabelle anzuzeigen. Die erste Zeile enthält die Spaltenüberschriften, alle anderen Zeilen definieren den Tabellenkörper. Es gibt zwei spezielle Werte für Spaltenüberschriften:  \'iscorrect\' und \'ishidden\'. Die \'iscorrect\' Spalten werden verwendet, um Kreuze oder Haken für 0 bzw. 1 anzuzeigen. Die \'ishidden\' Spalte wird nicht angezeigt, jedoch können 0 und 1 Werte in der Spalte verwendet werden, um die Sichtbarkeit der Zeile zu steuern. Teilnehmer sehen keine verborgenen Zeilen, aber Bewerter und Trainer sehen diese. Wenn eine \'testresults\' Tabelle eingefügt wird, kann auch ein \'columnformats\' Feld verwendet werden. Dieses sollte eine Liste mit einem String für jede Spalte ausgenommen der \'iscorrect\' und der \'ishidden\' Spalten enthalten. Die Strings definieren das Format, das zur Anzeige der Zellwerte verwendet wird; derzeit werden nur \'%s\' für normale String-Anzeige (die bereinigt und in ein \'pre\' Element eingeschlossen wird) und \'%h\' für einen HTML-Wert, der vor der Anzeige nicht weiter verarbeitet werden sollte, unterstützt.
Das \'showdifferences\' Feld aktiviert die Anzeige eines \'Zeige Unterschiede\' Buttons, unter der Ergebnistabelle, wenn die ermittelte Bewertung nicht 1,0 entspricht. Das \'showoutputonly\' Feld - wenn aktiviert - wird verwendet, wenn die Frage nur dazu verwendet wird den Output und eventuell Bilder eines Testlaufs ohne Bewertung anzuzeigen.
Die \'graderstate\' Variable ist ein String, den die Frageautoren und -autorinnen dazu verwenden können eine Bestehensbewertungs-Information zwischen Testversuchen zu protokollieren. Wenn diese in der Bewertungsantwort einer Abgabe inkludiert wird, ist diese bei der nächsten Abgabe als Twig \'QUESTION.stepinfo.graderstate\' verfgübar.';
$string['languages_help'] = 'Die Sandbox-Sprache ist die Computersprache, um die Einreichung auszuführen. Dies sollte normalerweise keine Änderung von dem Wert in Elternvorlage erfordern; Modifikation auf eigene Gefahr.

Ace-Sprache ist die Sprache, die der Ace-Code-Editor (falls aktiviert) für die Antwort der Teilnehmer verwendet.
Standardmäßig entspricht dies der Sandbox-Sprache; geben Sie hier nur einen anderen Wert ein, wenn die Vorlagensprache von der Sprache abweicht in der man erwartet, dass die Teilnehmer schreiben (z.B. wenn es sich um einen Python-Präprozessor handelt, der verwendet wird, um C-Programm von Teilnehmern zu validieren, bevor sie ausgeführt werden).

Mehrsprachige Fragen sind Fragen, auf die die Teilnehmer in mehr als einer Sprache antworten können. Sie werden aktiviert, indem die Ace-Sprache auf eine Komma-getrennte Liste der Sprachen gesetzt wird. Den Teilnehmern wird dann ein Dropdown-Menü zur Auswahl angeboten, um die Sprache auszuwählen, in der ihre Antwort geschrieben werden soll. Wenn genau eine der Sprachen ein Sternchen (\'\\*\') nachgestellt hat, wird diese Sprache als Standardsprache gewählt, die die Ausgangseinstellung des Dropdown-Menüs ist. Ein Ace-Sprachwert von beispielsweise "C,C++,Java\\*,Python3" würde es erlauben, eine Antwort in C, C++, Java oder Python3 einzureichen, aber das Dropdown-Menü würde anfänglich Java als Standard zeigen. Wenn kein Standardwert angegeben ist, bleibt der Anfangszustand des Dropdown-Menüs leer und die Teilnehmer müssen eine Sprache auswählen.
Mehrsprachige Fragen erfordern eine spezielle Vorlage, die {{ANSWER\\_LANGUAGE}} verwendet, um die Vorlagenvariablen zu steuern, wie der Code ausgeführt wird, siehe das eingebaute Beispiel für den mehrsprachigen Fragentyp. Die Variable {{ANSWER\\_LANGUAGE}} ist <i>nur</i> für mehrsprachige Fragen definiert.

Wenn der Autor eine Beispielantwort zu einer mehrsprachigen Frage liefern möchte, muss er es entweder in der Standardsprache schreiben, falls angegeben, oder ansonsten in der ersten der erlaubten Sprachen.';
$string['mgmt_cat_analytics_desc'] = 'Werkzeuge zur Analyse des Engagements von Teilnehmern und ihrer Leistungen in Testfragen.';
$string['mgmt_tool_analytics_quiztrajectory_desc'] = 'Punktzahl von Teilnehmern bei einem ausgewählten Test im Zeitverlauf darstellen. Dies ist nur für adaptive Verhaltenstest aussagekräftig. Vertikale gepunktete Linien zeigen an, wann ein/e Teilnehmer/in eine Pause eingelegt hat, die länger war als der festgelegte Schwellenwert für die Inaktivitätslücke.';
$string['mgmt_tool_analytics_studenttime_desc'] = 'Verweildauer von Teilnehmern in einem Kurs auf dem Server anhand der Moodle-Protokollereignisse einschätzen. Ein/e Teilnehmer/in gilt als inaktiv, wenn die Zeit zwischen zwei Klicks den festgelegten Schwellenwert für die Inaktivitätslücke überschreitet. Filterung nach Aktivität, Gruppe und Datumsbereich sind möglich.';
$string['mgmt_tool_analytics_studenttime_title'] = 'Verweildauer von Teilnehmern am Server';
$string['pluginname_help'] = 'Verwenden Sie das Feld "Fragetyp", um die Programmiersprache auszuwählen, die verwendet werden soll, um die Einreichung der Teilnehmer auszuführen.
Geben Sie das Problem an, für das die Teilnehmer Code schreiben müssen, und definieren Sie dann eine Reihe von Tests, die bei der Einreichung der Teilnehmer durchgeführt werden';
$string['precheck_help'] = 'Legen Sie die für Teilnehmer verfügbaren Buttons zum Überprüfen der Antwort fest. Üblicherweise wird zumindest ein Prüfen-Button angezeigt. Dieser kann jedoch verborgen werden (z. B. für Tests mit späterer Auswertung), wenn die Option <i>Prüfen-Button verbergen</i> aktiviert ist.

Wenn die Vorabprüfung aktiviert ist, haben die Teilnehmer einen zusätzlichen Button links neben dem Prüfen-Button, um ihnen einen abzugfreien Durchlauf ihres Codes gegenüber einer Teilmenge der Testfälle zu ermöglichen.

<ul>
<li>Wenn \'Leer\' ausgewählt ist, wird ein einzelner Lauf mit der Testvorlage durchgeführt, die einen Testfall verwendet, in dem alle Felder (Testcode, stdin, erwartet, usw.) leere Zeichenfolgen sind. Eine nicht leere Ausgabe wird als Vorabprüfungsfehler angesehen. Verwenden Sie dies mit Vorsicht: Einige Fragetypen werden dies nicht korrekt behandeln, z.B. "schreiben Sie ein Programm"- Fragen, die eine Ausgabe erzeugen.</li>
<li>Wenn \'Beispiele\' ausgewählt ist, wird der Code gegen alle Testfälle getestet, für die \'Als Beispiel verwenden\' aktiviert wurde.</li>
<li>Wenn \'Ausgewählt\' ausgewählt ist, wird jedem Testfall ein zusätzliches  Benutzeroberflächenelement hinzugefügt damit der Autor eine bestimmte Teilmenge der Tests auswählen kann.</li>
<li>Wenn "Alle" ausgewählt ist, werden alle Testfälle ausgeführt (obwohl ihr Verhalten möglicherweise von der normalen Prüfung abweichen kannn, wenn der Vorlagencode dies so vorschreibt).</li>
</ul>

Die Vorlage kann anhand des Twig-Parameter {{IS_PRECHECK}}, der während des Vorüberprüfungslaufs "1" ist, ansonsten "0", überprüfen, ob der Lauf ein Vorabprüfungslauf ist oder nicht.';
$string['qtype_c_function'] = '<p>Ein Fragetyp für Schreibe-Eine-C-Funktion Fragen. Es wird eine vollständige C-Funktion in der Antwort erwartet. Der Antwort kann jedoch anderer in sich geschlossenem C-Code wie beispielsweise Präprozessor Direktiven und Support-Funktionen vorangestellt werden.</p>

<p>Der Test-Code für diese Fragetypen ruft die Funktion der Teilnehmer mit einigen Test-Argumenten auf und gibt das Ergebnis aus, wie beispielsweise
<pre>printf("%d\\n", eineIntFunktion(blah1, blah2))</pre>
Das Feld <i>Erwartete Ausgabe</i> im Testfall legt die erwartete Ausgabe des Tests fest.</p>

<p>Wenn kein Standard Input für die Testfälle angegeben wird, wird ein einziges Testprogramm erstellt, das aus folgenden Elementen besteht:</p>
<ol>
<li>Standard #Includes: stdlib.h, ctype.h, string.h, stdbool.h, math.h</li>
<li>Die Antwort der Teilnehmer</li>
<li>Eine Folge von mit Klammern umschlossenen Blöcken für jeden Testfall. Jeder Block enthält nur den Testcode des Testfalls. Es wird auch ein <i>printf</i> Statement zwischen den Codeblöcken eingefügt, um einen speziellen Trenner einzufügen, der verwendet wird, um den Output in einzelene Outputs der Testfälle zu gliedern.</li>
</ol>
<p>Wenn jedoch einer der Testfälle einen nicht leeren Standard Input aufweist, werden mehrere Programme für jeden Testfall geladen.</p>
<p>Das Feld<i>extra</i> des Testfalls wird ignoriert.</p>';
$string['qtype_c_program'] = '<p>Ein Fragetyp für Schreibe-Ein-C-Programm Fragen. Es gibt keinen Pro-Testfall-Code und unterschiedliche Tests verwenden nur unterschiedliche Standard Input-Daten (stdin). Es wird ein vollständiges ausführbares Programm als Antwort der Teilnehmer erwartet. Das Programm wird von CodeRunner ohne weitere Veränderung für jeden Testfall ausgeführt. Die Werte vom Testcode und den Zusatzfeldern jedes Testfalls werden ignoriert.</p>
<p>Wenn Sie einen spezielle Bibliothek oder Argumente für die Frage benötigen, können Sie diese benutzerdefiniert gestalten. (Aktivieren Sie die Anpassen Checkbox), öffnen Sie den Abschnitt <i>Erweiterte Anpassung</ und fügen Sie entsprechende Werte im <i>Sandbox &gt; Parameter</i> Feld ein. Zum Beispiel:
<pre>{"linkargs":["-lm"]}</pre>, um die Mathematik-Bibliothek zu verlinken.';
$string['qtype_cpp_function'] = '<p>Ein Fragetyp für Schreibe-Eine-C++Funktion Fragen.Es wird eine vollständige C++ Funktion als Antwort erwartet. Der Antwort kann jedoch anderer in sich geschlossenem C++Code wie beispielsweise Präprozessor Direktiven und Support-Funktionen vorangestellt werden.</p>
<p>Der Test-Code für diese Fragetypen ruft die Funktion der Teilnehmer mit einigen Test-Argumenten auf und gibt das Ergebnis aus, wie beispielsweise
<pre>cout << eineIntFunktion(blah1, blah2))</pre>
Das Feld <i>Erwartete Ausgabe</i> im Testfall legt die erwartete Ausgabe des Tests fest.</p>
<p>Wenn kein Standard Input für die Testfälle angegeben wird, wird ein einziges Testprogramm erstellt, das aus folgenden Elementen besteht:</p>
<ol>
<li>Standard #Includes: iostream, fstream, string, math, vector und algorithm</li>
<li><code>using namespace std;</code></li>
<li>Die Antwort der Teilnehmer</li>
<li>Eine Folge von mit Klammern umschlossenen Blöcken für jeden Testfall. Jeder Block enthält nur den Testcode des Testfalls. Es wird auch ein <i>printf</i> Statement zwischen den Codeblöcken eingefügt, um einen speziellen Trenner einzufügen, der verwendet wird, um den Output in einzelene Outputs der Testfälle zu gliedern.</li>
</ol>
<p>Wenn jedoch einer der Testfälle einen nicht leeren Standard Input aufweist, werden mehrere Programme für jeden Testfall geladen.</p>';
$string['qtype_cpp_program'] = '<p>Verwendet für Schreib-ein-C++-Programm-Fragen, bei denen es keinen Code für jeden Testfall gibt und die verschiedenen Tests einfach unterschiedliche Standardeingabedaten (stdin) verwenden. Es wird erwartet, dass die Antwort der Teilnehmer ein vollständig
lauffähiges Programm ist, das ohne Änderung durch CodeRunner in der vorliegenden Form einmal für jeden Testfall ausgeführt wird. Die Werte des Testcodes und der zusätzlichen Felder der Testfälle werden ignoriert.</p>';
$string['qtype_java_program'] = '<p>Eine Schreib-ein-Java-Programm-Frage, bei der die Teilnehmer
Ihnen ein vollständiges Programm als Antwort vorlegen. Das Programm wird kompiliert und für jede Testfall ausgeführt. Es gibt keinen Testcode, nur stdin-Testdaten, obwohl dies nicht tatsächlich überprüft wird: caveat emptor. Die zusätzlichen Felder der Testfälle werden ebenfalls
ignoriert.</p>
<p>Dieser Fragetyp wird sehr ineffizient, wenn es viele Testfälle gibt, da
jeder einzelne einen vollständigen Kompilierungs- und Ausführungszyklus auf dem Jobe-Server erfordert. Es ist möglich, alle Tests in einen einzigen Python-Job zu packen, der an den Sandbox-Server gesandt wird und dieser kompiliert das Programm nur einmal und führt es dann bei jedem Testfall aus.
Einzelheiten zu diesem Ansatz finden Sie im Forum für Fragenautoren unter coderunner.org.nz.</p>';
$string['qtype_php'] = '<p>Eine php-Frage, bei dem die Antwort der/des Teilnehmer/in PHP-Code ist. Im einfachsten Fall beginnt der Code der/des Teilnehmer/in mit </p><pre><?php</pre>, aber <i>schließt den PHP-Tag nicht</i>. Der Grund für das Nichtschließen kann durch Einsicht in die Vorlage erkannt werden: Auf die Antwort der/des Teilnehmer/in folgen alle Testfall-Testcodes. Wenn Sie stattdessen möchten, dass der Code der/des Teilnehmer durch Schließen des PHP-Tags beendet wird, sollten Sie die Vorlage so bearbeiten, dass der PHP-Tag vor der Testsequenz wieder geöffnet wird.</p>
<p>Die Ausgabe aus jedem Testfall, die mit dem <i>Erwartet</i> Feld aus dem Testfall übereinstimmen sollte, ist die Ausgabe aus dem PHP-Code der/des Teilnehmer/in (einschließlich aller Inhalte außerhalb des Geltungsbereichs von &lt;?php...?&gt; Tags) plus die Ausgabe aus dem Testcode.</p><p>Untersuchen Sie den Vorlagee-Code (durch Klicken auf <i>Anpassen</i>), um dies zu verstehen.</p>';
$string['qtype_python2'] = '<p>Ein Python2 Fragetyp, der "Schreiben Sie eine Funktion", "Schreiben Sie eine Klasse" oder "Schreiben Sie ein Programm" Fragen ermöglicht. Für jeden Testfall wird der Antwortcode der Teilnehmer gefolgt vom Testcode ausgeführt. Wenn die Teilnehmer beispielsweise eine Funktionsdefinition schreiben sollen, wird ihre Definition zuerst ausgeführt, gefolgt vom Testcode des Fragenautors/der Fragenautorin, der die Funktion üblicherweise aufruft und das Ergebnis oder einen daraus resultierenden Wert ausgibt.</p>
<p>Wenn es keine Standardeingaben für alle Testfälle gibt, werden alle Tests in einem einzigen Durchgang ausgeführt und jede Ausgabe wird durch einen Separierungsstring getrennt. Bitte beachten Sie, dass dies nicht unbedingt das gleiche Ergebnis liefert, als jeden Test einzeln auszuführen. Wenn durch die Teilnehmer beispielsweise globale Variablen definiert werden, behalten diese über mehrere Testläufe die Werte. Wenn dies zu Problemen führen könnte, ist der einfachste Workaround einen Standard-Input mit einem nicht-leeren Wert für einen Testfall zu definieren. Damit wird CodeRunner in den Fallback Modus gezwungen und jeder Testfall wird separat ausgeführt.</p>';
$string['qtype_python3'] = '<p>Ein Python3 Fragetyp, der "Schreiben Sie eine Funktion", "Schreiben Sie eine Klasse" oder "Schreiben Sie ein Programm" Fragen ermöglicht. Für jeden Testfall wird der Antwortcode der Teilnehmer gefolgt vom Testcode ausgeführt. Wenn die Teilnehmer beispielsweise eine Funktionsdefinition schreiben sollen, wird ihre Definition zuerst ausgeführt, gefolgt vom Testcode des Fragenautors/der Fragenautorin, der die Funktion üblicherweise aufruft und das Ergebnis oder einen daraus resultierenden Wert ausgibt.</p>
<p>Wenn es keine Standardeingaben für alle Testfälle gibt, werden alle Tests in einem einzigen Durchgang ausgeführt und jede Ausgabe wird durch einen Separierungsstring getrennt. Bitte beachten Sie, dass dies nicht unbedingt das gleiche Ergebnis liefert, als jeden Test einzeln auszuführen. Wenn durch die Teilnehmer beispielsweise globale Variablen definiert werden, behalten diese über mehrere Testläufe die Werte. Wenn dies zu Problemen führen könnte, ist der einfachste Workaround einen Standard-Input mit einem nicht-leeren Wert für einen Testfall zu definieren. Damit wird CodeRunner in den Fallback Modus gezwungen und jeder Testfall wird separat ausgeführt.</p>';
$string['template_help'] = 'Die Vorlage definiert die Programme, die in der Sandbox für eine bestimmte Antwort der Teilnehmer und Tests ausgeführt wird. Es gibt zwei Arten von Vorlagen:

* eine Vorlage pro Testfall, die ein Programm definiert, das für einen einzelnen Testfall ausgeführt werden soll, und
* eine \'Kombinator\'-Vorlage, die ein Programm definiert, das alle verschiedenen Fälle in einem einzigen Programm kombiniert.

Das Kontrollkästchen \'Ist ein Kombinator\' wird bei einer Vorlage pro Testfall nicht angekreuzt und ist für eine für eine Kombinator-Vorlage angekreuzt. Der Rest dieses Hilfebereichs geht davon aus, dass Sie eine Vorlage pro Testfall verwenden; siehe die vollständige Dokumentation für die Verwendung von Kombinator-Vorlagen.

Die Vorlage wird von der Twig-Templating-Engine (siehe http://twig.sensiolabs.org) verarbeitet in einem Kontext, in dem STUDENT_ANSWER die Antwort der/des Teilnehmenden ist und TEST.testcode der Code für den aktuellen Testfall ist. Diese Werte
(und andere Testfallwerte wie TEST.expected, TEST.stdin, TEST.mark)
können in die Vorlage eingefügt werden, indem sie in doppelte Klammern eingeschlossen werden, z.B. <code>{{TEST.testcode}}</code>. Für die Verwendung innerhalb von literalen Zeichenketten muss eine entsprechendes Escape-Funktion angewendet werden, z.B. <code>{{STUDENT_ANSWER | e(\'py\')}}</code> ist die Antwort der/des Teilnehmenden in einer Weise escaped, die für die Verwendung innerhalb von dreifachen Anführungszeichen in Python geeignet ist. Andere Escape-Funktionen sind <code>e(\'c\')</code>, <code>e(\'java\')</code>,
<code>e(\'matlab\')</code>. Das Programm, das von Twig ausgegeben wird, wird dann mit der Sprache des gewählten eingebauten Typs kompiliert und mit stdin auf TEST.stdin gesetzt ausgeführt. Die Ausgabe dieses Programms wird dann an den ausgewählten Bewerter weitergegeben.
Weitere Informationen dazu finden Sie in der Hilfe unter \'Grading controls\'.

Beachten Sie, dass, wenn eine angepasste Vorlage pro Testfall verwendet wird, es für jeden Testfall einen Kompilierungs- und Ausführungszyklus geben wird, während die meisten integrierten Fragetypen stattdessen eine Kombinator-Vorlage definieren, die alle Testfälle in einem einzigen Lauf ausführt.

Wenn das Vorlagen-Debugging-Kontrollkästchen angeklickt ist, wird in der Ausgabe das generierte Programm für jeden Testfall  angezeigt.';
$string['templateparams_help'] = 'Wenn das Vorlageparameter-Feld nicht leer ist, muss die Vorlage-Parameter im JSON-Format eingegeben werden. In der einfachsten Form ist dieses feld ein JSON Datensatz, der eine Variablenliste definiert, die zur Twig-Vorlage Umgebung hinzugefügt werden, wenn die Vorlage erweitert wird.

Wenn ein Präprozessor in den Vorlageparameter-Einstellungen definiert wird, werden die Vorlageparameter zuerst von der definierten Sprache verarbeitet, um einen JSON Datensatz zu erzeugen. Weitere Informationen in der <a href="https://coderunner.org.nz/mod/url/view.php?id=199">Dokumentation</a>.

<b>Warnung:</b> der Einsatz eines anderen Präprozessors als Twig kann drastische Auswirkungen auf die Performance haben, wenn die Auswertung-pro-Teilnehmer/in-Checkbox aktiviert ist. Diese muss aktiviert sein, wenn eine zufällige Frage-Zuordung für alle Teilnehmer konfiguriert wurde. Die Frage muss den Präprozessor durchlaufen, bevor sie dem/der Teilnehmer/in angezeigt wird. Nur Twig wird vom Jobe Sandbox Server verarbeitet. Jeder Versuch von jeder Frage von jedem/jeder Teilnehmer/in löst einen Job aus, der an den Server gesendet wird. Dies kann dazu führen, dass tausende Jobs vom Server abgearbeitet werden müssen, was zu einem Serveroverload führen kann.';
$string['wsnoaccess'] = 'Nur angemeldete Benutzer können auf diese Funktion zugreifen.';
