<?php
declare(strict_types=1);

namespace Human;

class Student
{
     public string $name;
     public string $surname;
     public string $faculty;
     public string $course;
     public string $speciality;
     public string $phone;

     public function __construct(string $name, string $surname, string $faculty, string $course, string $speciality, string $phone)
     {
         $this->name = $name;
         $this->surname = $surname;
         $this->faculty = $faculty;
         $this->course = $course;
         $this->speciality = $speciality;
         $this->phone = $phone;
     }

     public function infoObject(): string
     {
         return (
             "<traits>
              <tr>
              <td>$this->name</td>
              <td>$this->surname</td>
              <td>$this->faculty</td>
              <td>$this->course</td>
              <td>$this->speciality</td>
              <td>$this->phone</td>
              </tr>
              </traits>"
         );
     }

     public function changeCourse(string $newCourse): string
     {
         return $this->course = $newCourse;
     }
}