<?php
  class Student extends Person {
    private $selectedCourses=array();
    private $creditPoints;
    function __construct($fn=null,$ln=null,$yob=null) {
      $this->setFirstName($fn);
      $this->setLastName($ln);
      $this->setYearOfBirth($yob);
    }
    public function setSelectedCourses($value) {
      array_push($this->selectedCourses,$value);
    }

    public function getSelectedCourses()
    {
        return $this->selectedCourses;
    }

    public function getCreditPoints()
    {
        return $this->creditPoints;
    }


    public function setCreditPoints($creditPoints)
    {
        if (is_numeric($creditPoints)) {
          $this->creditPoints = $creditPoints;
          return $this;
        }
        else {
          return "Error: Wrong type";
        }
    }

    public function print_properties() {
      echo '<br>Student :<ul><li>Name: '.$this->getFirstName().' '.$this->getLastName().'</li>';
      echo '<br><li>Year of birth: '.$this->getYearOfBirth().'</li>';
      echo '<br><li>Selected courses: ';
      foreach ($this->selectedCourses as $row) {
        echo $row.', ';
      }
      echo '</li><br><li>Credit points: '.$this->getCreditPoints().'</li>';
      echo '<br><li>Age: '.$this->getAge().'</li></ul>';
    }

}
?>
