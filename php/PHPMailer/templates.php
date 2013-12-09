<?php

function bodyPlain($name, $email, $phone, $company, $city, $state, $country, $message)
{
    return "NOMBRE: " . $name . ", EMAIL: " . $email . ", TELEFONO: " . $phone . ", EMPRESA: " . $company . ", CIUDAD: " . $city . ", ESTADO: " . $state . ", PAIS: " . $country . ", ASUNTO: " . $message . ".";
}


function bodyHTML($name, $email, $phone, $company, $city, $state, $country, $message)
{
    return
    "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>Feedback via Creaprac.com</title>

</head>
<body leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">
    <center>
        <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" height=\"100%\" width=\"100%\" bgcolor=\"#F0F0F0\">
            <tr>
                <td align=\"center\" valign=\"top\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\" bgcolor=\"#FFFFFF\" style=\"border: 1px solid #BBB; padding: 20px 0 20px 0;\">
                        <tr>
                            <td align=\"center\" valign=\"top\">
                                <img src=\"http://www.creaprac.com/img/mail/email_header.png\" width=\"550\" style=\"margin-bottom: 20px;\">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" height=\"100%\" width=\"500\">
                                    <tr>
                                        <th align=\"left\" bgcolor=\"#1F85D5\" width=\"20%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"white\">NOMBRE</font></th>
                                        <td width=\"80%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"#222222\">" . $name . "</font></td>
                                    </tr>
                                    <tr>
                                        <th align=\"left\" bgcolor=\"#1F85D5\" width=\"20%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"white\">EMAIL</font></th>
                                        <td width=\"80%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"#222222\">" . $email . "</font></td>
                                    </tr>
                                    <tr>
                                        <th align=\"left\" bgcolor=\"#1F85D5\" width=\"20%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"white\">TEL&Eacute;FONO</font></th>
                                        <td width=\"80%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"#222222\">" . $phone . "</font></td>
                                    </tr>
                                    <tr>
                                        <th align=\"left\" bgcolor=\"#1F85D5\" width=\"20%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"white\">EMPRESA</font></th>
                                        <td width=\"80%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"#222222\">" . $company . "</font></td>
                                    </tr>
                                    <tr>
                                        <th align=\"left\" bgcolor=\"#1F85D5\" width=\"20%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"white\">CIUDAD</font></th>
                                        <td width=\"80%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"#222222\">" . $city . "</font></td>
                                    </tr>
                                    <tr>
                                        <th align=\"left\" bgcolor=\"#1F85D5\" width=\"20%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"white\">ESTADO</font></th>
                                        <td width=\"80%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"#222222\">" . $state . "</font></td>
                                    </tr>
                                    <tr>
                                        <th align=\"left\" bgcolor=\"#1F85D5\" width=\"20%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"white\">PA&Iacute;S</font></th>
                                        <td width=\"80%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"#222222\">" . $country . "</font></td>
                                    </tr>
                                    <tr>
                                        <th align=\"left\" bgcolor=\"#1F85D5\" width=\"20%\" style=\"border-bottom: 1px solid #CCCCCC;\"><font face=\"Arial, sans-serif\" color=\"white\">ASUNTO</font></th>
                                        <td width=\"80%\"><font face=\"Arial, sans-serif\" color=\"#222222\">" . $message . "</font></td>
                                    </tr>
                                </table>
                                </center>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
    ";
}

?>