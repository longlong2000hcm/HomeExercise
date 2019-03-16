<?php
  class Staff extends Person {
    private $vacancy;
    function __construct($fn=null,$ln=null,$yob=null) {
      $this->setFirstName($fn);
      $this->setLastName($ln);
      $this->setYearOfBirth($yob);
    }

    public function getVacancy()
    {
        return $this->vacancy;
    }

    public function setVacancy($vacancy)
    {
        $this->vacancy = $vacancy;

        return $this;
    }
    public function print_properties() {
      echo '<br>Staff :<ul><li>Name: '.$this->getFirstName().' '.$this->getLastName().'</li>';
      echo '<br><li>Year of birth: '.$this->getYearOfBirth().'</li>';
      echo '<br><li>Vacancy: '.$this->getVacancy().'</li>';
      echo '<br><li>Age: '.$this->getAge().'</li></ul>';
    }
}
?>
