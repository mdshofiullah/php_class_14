<?php

namespace App\classes;

class Student
{
    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post = null)
    {
        if (isset($post['search']))
        {
            $this->text = $post['search'];
        }
    }

    public function getAllStudent()
    {
        return [
          0 => [
              'name' => 'Md. Shofiullah',
              'mobile'=> '123456487',
              'email' => 'shofi@gmail.com',
              'address' => 'lalbagh'
          ],
          1 => [
              'name' => 'Md. rafiq',
              'mobile'=> '9887654',
              'email' => 'rafiq@gmail.com',
              'address' => 'islambagh'
          ],
          2 => [
              'name' => 'Md. ehasan',
              'mobile'=> '94763431',
              'email' => 'ehasan@gmail.com',
              'address' => 'azimpur'
          ],
          3 => [
              'name' => 'Md. nuru',
              'mobile'=> '3464779433',
              'email' => 'nuru@gmail.com',
              'address' => 'sohid nogor'
          ],
          4 => [
              'name' => 'Md. sallu',
              'mobile'=> '6548721324',
              'email' => 'sallu@gmail.com',
              'address' => 'shekh saheb bazar'
          ],
          5 => [
              'name' => 'Md. topu',
              'mobile'=> '6547941344',
              'email' => 'topu@gmail.com',
              'address' => 'shekh saheb bazar'
          ]
        ];
    }
    public function getAllStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if ($this->text == $student['name'])
            {
                $this->result = $student;
                break;
            }
        }
        return $this->result;

    }
}