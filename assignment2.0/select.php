<html>
    <h1> SELECT Statements </h1>
<nav>
    <ol> <a href="query1.php">Query 1</a> <print>  SELECT pmkNetId FROM tblTeachers; </print> <a href="q01.sql">q01.SQL</a> </ol> 
    <ol><a href="query02.php">Query 2 </a> <print> SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE 'Introduction%'; </print> <a href="q02.sql">q02.SQL</a></ol> 
     <ol><a href="q03.php">Query 3 </a><print> SELECT * FROM tblSections WHERE fldBuilding = "KALKIN" AND fldStart = '13:10:00'; </print> <a href="q03.sql">q03.SQL</a> </ol> 
  <ol><a href="q04.php">Query 4 </a><print> SELECT * FROM tblCourses WHERE fldCourseName = 'Database Design for the Web'; </print> <a href="q04.sql">q04.SQL</a> </ol> 
  <ol><a href="q05.php">Query 5 </a><print> SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId Like "r%" AND pmkNetId LIKE '%o'; </print> <a href="q05.sql">q05.SQL</a> </ol> 
  <ol><a href="q06.php">Query 6 </a><print> SELECT fldCourseName FROM tblCourses WHERE NOT (fldDepartment = "CS") AND fldCourseName LIKE '%data%'; </print> <a href="q06.sql">q06.SQL</a> </ol>
  <ol><a href="q07.php">Query 7 </a><print> SELECT DISTINCT fldDepartment FROM tblCourses;</print> <a href="q07.sql">q07.SQL</a> </ol>
  <ol><a href="q08.php">Query 8 </a><print> SELECT fldBuilding, COUNT(*) AS fldSection FROM tblSections GROUP BY fldBuilding;</print> <a href="q08.sql">q08.SQL</a> </ol>
  <ol><a href="q09.php">Query 9 </a><print> SELECT DISTINCT fldBuilding, fldNumStudents FROM tblSections WHERE fldDays LIKE '%W%' GROUP BY fldBuilding ORDER BY fldNumStudents; </print> <a href="q09.sql">q09.SQL</a> </ol>
  <ol><a href="q10.php">Query 10 </a><print>SELECT DISTINCT fldBuilding, fldNumStudents FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldNumStudents'; </print> <a href="q10.sql">q10.SQL</a> </ol>
</nav>
</html>