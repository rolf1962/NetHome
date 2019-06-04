<?php
use Model\DbContext;
use Model\MySQLiConnection;

include 'Model/Users.php';
include 'Model/User.php';
include 'Model/DbContext.php';
include 'Model/MySQLiConnection.php';

CheckAndStartSession();

$dbContext = new DbContext(new MySQLiConnection());
$userlist = $dbContext->Users()->GetAll();

// Datentabelle
// ------------
echo "<table>";
echo "
    <tr>
        <th style=\"text-align:right\">ID</th>
        <th style=\"text-align:center\">Admin</th>
        <th>Nachname</th>
        <th>Vorname</th>
        <th>Geburtsdatum</th>
        <th>Arbeit</th>
        <th style=\"text-align:right\">Taschengeld</th>
    </tr>";
foreach ($userlist as $user) {
    echo "
        <tr>
            <td style=\"text-align:right\">" . $user->getId() . "</td>
            <td style=\"text-align:center\">" . BoolToString($user->getIsAdmin()) . "</td>
            <td>" . $user->getLastname() . "</td>
            <td>" . $user->getFirstname() . "</td>
            <td>" . $user->getBirthdate()->format("d.m.Y") . "</td>
            <td>" . $user->getWorkplace() . "</td>
            <td style=\"text-align:right\">" . $user->getMoney() . "</td>
        </tr>";
}
echo "</table>";
// ------------ Datentabelle


/**
 *
 * @return string
 */
function BoolToString(bool $value)
{
    return $value === 0 ? "nein" : "ja";
}

/**
 *
 * @return bool
 */
function IsSessionStarted()
{
    if (php_sapi_name() !== 'cli') {
        if (version_compare(phpversion(), '5.4.0', '>=')) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

/**
 * @param string $fileName
 * @param boolean $echoInfo
 */
function CheckAndStartSession($fileName="", $echoInfo=FALSE)
{
    if (! IsSessionStarted()) {
        if ($echoInfo) {
            echo $fileName . ": Starte Session..." . "<br>";
        }
        session_start();
    }

    if ($echoInfo) {
        echo $fileName . ": Session started:\t " . BoolToString(IsSessionStarted()) . "<br>";
    }
    if (IsSessionStarted()) {
        if ($echoInfo) {
            echo $fileName . ": Session ID:\t " . session_id() . "<br>";
        }
    }
    if ($echoInfo) {
        echo "<br>";
    }
}