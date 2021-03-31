<h1> This is About us view</h1>
<?php
    $result = AboutUs::$page;

    print "<table class=\"table table-hover\">";
    print "<tr bgcolor='#eeeeee' align='center'><td>Application Acronym</td><td>Application Name</td>
    <td>Portfolio</td><td>SLC</td><td>AIP</td><td>Status</td><td>Notes</td></tr>";
    foreach ($result as $row)
    {
        print("<tr><td class=\"small\">".$row['Application Acronym']."</td>");
        print("<td class=\"small\">".$row['Application Name']."</td>");
        print("<td class=\"small\">".$row['Portfolio']."</td>");
        print("<td class=\"small\">".$row['SLC']."</td>");
        print("<td class=\"small\">".$row['AIP']."</td>");
        print("</tr>");
    }
    print("</table>");
?>