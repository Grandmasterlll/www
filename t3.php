<?php
header("Content-Type: text/html; charset=UTF-8");

/*
Задача 1
Создайте класс Square,
который вычисляет квадрат передаваемого числа двумя способами:
статическим и нестатическими методами. Продемонстрируйте работу каждого из них.
*/

// [+]  Задача 1 
class Square{
   static function func_get_static($object){
        $get= pow($object,2);
         return $get;
     }
     static function func_get($object){
        $get= pow($object,2);
         echo $get;
     }
}
//
/*
echo"Задача 1";
echo"<br>";
echo"static";
echo"<br>";
echo Square::func_get_static(4);
echo"<br>";
echo"нестатическими методами";
echo"<br>";
$object_class_Square =new Square();
$object_class_Square->func_get(4);
echo"<br>";
*/
//

/*
Сделайте класс Worker, в котором будут следующие 
public поля - name (имя), age (возраст), salary (зарплата).
Создайте объект этого класса,
затем установите поля в следующие значения (не в __construct, а для созданного объекта)
- имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса,
 установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
*/


// [+/-]  Задача 2

/*
class Worker{
    public $name;
    public $age;
    public $salary;
    public function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
         
    }
    function get_salary(){
        return $this->salary;
    }
    function get_age(){
        return $this->age;
    }
    function get_name(){
        return $this->name;
    }
}
 //
 echo"---";
 echo"<br>";
 $object1_class_Worker = new Worker('Иван',25,1000);
 $object2_class_Worker = new Worker('Вася',26,2000);
 $sum_salary=($object1_class_Worker->get_salary())+($object2_class_Worker->get_salary());
 $sum_age=($object1_class_Worker->get_age())+($object2_class_Worker->get_age());
 echo ' суммa  зарплат '.$object1_class_Worker->get_name().' and '.$object2_class_Worker->get_name().' sum ='.$sum_salary;
 echo'<br>';
 echo ' суммa  возрастов '.$object1_class_Worker->get_name().' and '.$object2_class_Worker->get_name().' sum ='.$sum_age;
//
*/

class Worker{
    public $name;
    public $age;
    public $salary;
    }
 //
 /*
 echo"<br>";
 echo"Задача 2";
 echo"<br>";
 $object1_class_Worker = new Worker();
 $object1_class_Worker->name='Иван';
 $object1_class_Worker->age=25;
 $object1_class_Worker->salary=1000;
 $object2_class_Worker = new Worker('Вася',26,2000);
 $object2_class_Worker->name='Вася';
 $object2_class_Worker->age=26;
 $object2_class_Worker->salary=2000;

 $sum_salary=($object1_class_Worker->salary)+($object2_class_Worker->salary);
 $sum_age=($object1_class_Worker->age)+($object2_class_Worker->age);
 echo ' суммa  зарплат '.$object1_class_Worker->name.' and '.$object2_class_Worker->name.' sum ='.$sum_salary;
 echo'<br>';
 echo ' суммa  возрастов '.$object1_class_Worker->name.' and '.$object2_class_Worker->name.' sum ='.$sum_age;
 echo'<br>';
 */
//

/*
 Задача 3
Сделайте класс Worker, в котором будут следующие
private поля - name (имя), age (возраст), salary (зарплата) и 
следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.

Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.

Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
*/

// []  Задача 3


class Worker_2{
    private $name;
    private $age;
    private $salary;
    
    public function setName($name){
        $this->name = $name;        
    }
    public function getName(){
        return $this->name;
    }
    /*
    public function setAge(){
        $this->age[$Age] = $setAge;
        echo "Установка '$Age' в '$setAge'\n";
    }
    public function getAge(){
        return $this->name[$Name];
    }
    public function setSalary(){
        $this->salary[$Salary] = $set$Salary;
        echo "Установка '$Salary' в '$set$Salary'\n";
    }
    public function getSalary(){
        return $this->name[$Name];
    }
    
    //
    public function __get($Name){
        return $this->name[$Name];
    }
    */

   

}
//
//$object_class_Worker_2_1= new  Worker_2('Иван',25,1000);
//$object_class_Worker_2_2= new  Worker_2('Вася',26,2000);
$object_class_Worker_2_1= new  Worker_2();
//$object_class_Worker_2_1->name='Иван';
 $object_class_Worker_2_1->setName('Иван');
 //$name= $object_class_Worker_2_1->setName();
 //echo' $name '.$name;
echo'<br>';
//echo $object_class_Worker_2_1->name."\n\n";
//

/*
Задача 4
Дополните класс Worker из предыдущей
задачи private методом checkAge, 
который будет проверять возраст на корректность (от 1 до 100 лет).
Этот метод должен использовать метод setAge перед установкой нового возраста
(если возраст не корректный - он не должен меняться).

*/

// []  Задача 4

//class Worker{}
//

//

/*
Задача 5
Модифицируйте класс Worker так, чтобы имя и 
возраст заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). 
Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

*/

// []  Задача 5

//class Worker{}
//

//

/*
Задача 6
Реализовать подсчет котов в питомнике:
1. В класс Cat добавить статическую переменную cats 
2. При каждом создании кота (нового объекта Cat) в переменную cats добавлять +1
3. Создать 10 объектов Cat.
4. Метод printCats должен выводить всех котов на экран и их общее количество, используя переменную cats.
*/

// [+]  Задача 6

class Cat{
    public static $cats=0;
    public $name;
    public function __construct($name)
    {
        $this->name = $name;    
          (++self::$cats);  
    }
    public function printCats(){
       $cats=$cats+1;
        echo'name Cat '.$this->name;        
    }
}
/*
echo'<br>';
echo'Cat :';
echo'<br>';
$quantity_Cat=10;
for ($i=0; $i < $quantity_Cat ; $i++) { 
    $code_Cat=rand(100,999);
    $object_class_Cat[$i] = new Cat($code_Cat,$i);
    $object_class_Cat[$i]-> printCats();
    echo'<br>';
}
echo'fdg';
echo'quantity Cat = '. Cat::$cats;
*/