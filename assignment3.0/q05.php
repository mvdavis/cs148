<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include "top.php";
// put your code here
$query = 'SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName, count(tblStudents.fldFirstName) as total FROM tblSections JOIN tblEnrolls on tblSections.fldCRN = tblEnrolls.`fnkSectionId` JOIN tblStudents on pmkStudentId = fnkStudentId JOIN tblTeachers on tblSections.fnkTeacherNetId=pmkNetId WHERE fldType != "LAB" group by fnkTeacherNetId ORDER BY total desc';
$info2 = $thisDatabaseReader->select($query, "", 1, 2, 2, 0, false, false);
print "The total number of records is: ";
echo count($info2);
echo '<p>' . $query . '<p>';
print '<table>';
$columns = 3;

$highlight = 0; // used to highlight alternate rows
foreach ($info2 as $rec) {
    $highlight++;
    if ($highlight % 2 != 0) {
        $style = ' odd ';
    } else {
        $style = ' even ';
    }
    print '<tr class="' . $style . '">';
    for ($i = 0; $i < $columns; $i++) {
        print '<td>' . $rec[$i] . '</td>';
    }
    print '</tr>';
}

// all done
print '</table>';
include "footer.php";
?>.
?>
</body>
</html>

