<!DOCTYPE html>
/*<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
* 
*/
<?php
include "top.php";
$query = 'SELECT fnkSectionId, fldLastName, fldFirstName FROM tblStudents JOIN tblEnrolls ON pmkStudentId = fnkStudentId WHERE fnkCourseId = 392';
$info2 = $thisDatabaseReader->select($query, "", 1, 0, 0, 0, false, false);
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
