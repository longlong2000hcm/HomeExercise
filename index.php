<html>
<?php
  spl_autoload_register(function ($class_name) {
	     include $class_name . '.php';
	});

  $aStudent = new Student('Long','Vo',2000);
  $aStudent->setSelectedCourses('Mathematics');
  $aStudent->setSelectedCourses('History');
  $aStudent->setCreditPoints(5);

  $aTeacher = new Teacher('Jim','Smith',1970);
  $aTeacher->setTeachingSubject('Literature');
  $aTeacher->setTeachingSubject('Physics');
  $aTeacher->setDepartment('Kotkantie');

  $firstStaff = new Staff('Anna','Jones',1992);
  $firstStaff->setVacancy('Cleaner');

  $secondStaff = new Staff('Bill','Clint',1995);
  $secondStaff->setVacancy('Caretaker');

  $aStudent->print_properties();
  $aTeacher->print_properties();
  $firstStaff->print_properties();
  $secondStaff->print_properties();


?>
</html>
