<?php
  class Teacher extends Person {
    private $teachingSubject=array();
    private $department;
    function __construct($fn=null,$ln=null,$yob=null) {
      $this->setFirstName($fn);
      $this->setLastName($ln);
      $this->setYearOfBirth($yob);
    }

    public function getTeachingSubject()
    {
        return $this->teachingSubject;
    }

    public function setTeachingSubject($teachingSubject)
    {
        array_push($this->teachingSubject, $teachingSubject);

        return $this;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }
    public function print_properties() {
      echo '<br>Teacher :<ul><li>Name: '.$this->getFirstName().' '.$this->getLastName().'</li>';
      echo '<br><li>Year of birth: '.$this->getYearOfBirth().'</li>';
      echo '<br><li>Teaching subjects: ';
      foreach ($this->teachingSubject as $row) {
        echo $row.', ';
      }
      echo '</li><br><li>Department: '.$this->getDepartment().'</li>';
      echo '<br><li>Age: '.$this->getAge().'</li></ul>';
    }
}
?>
