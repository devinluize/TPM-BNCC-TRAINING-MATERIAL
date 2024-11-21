<?php

// OOP -> adalah suatu paradigma pemrograman coding -> yang mengimplementasikan dunia nyata 
// oop -> object oriented programming
// pemrograman berbasis object 
// nanti kalau kita uda pakai OOP kita cenderung gabakal punya lagi namanya  variable dan function 
// sekarang kita punanya data behavior ->data = property dan behavior = method 
//  object orang punya data : 
//  nama,
//  umur,
//  gender,

//  object mobil:
//  warna,
//  mesinnya,
//  tenanganya,
//  brand,

//  ini semua kita anggap sebagai data/property 

//  behavior -> kebiasaan dari suatu object 
//  konsep inheritance adalah salah 1 pilar dalam OOP 
//  1. Inheritance
//  2. Polymorphism -> berbagai bentuk 
//  3. Abtraction -> kita menyembunyikan seberapa rumit code kita menjadi suatu abstract 
//  4. Encapsulation -> control akses data -> masuknya access modifier -> private, public, protected.

class Person{
    //data -> atribute
    // public $nama;
    // public $umur;
    // public $gender;

    public $nama,$umur,$gender;

    //kita pakai constructor
    // dia ngecontruct class(blueprint kita) menjajadi object beneran 
    public function __construct($name,$age,$gender){
        $this->nama=$name;
        $this->umur=$age;
        $this->gender=$gender;

    }

    public function Introduction(){
        echo "my name is : " . $this->nama;
    }
}
//derived class
//aku punya contoh class mahasiswa
//aku punya class employee
//aku punya class student

class employee extends Person{
    public $salary,$jobPosition;
    public function __construct($name,$age,$gender,$salary,$jobPosition) {
        parent::__construct($name,$age,$gender);
        $this->salary=$salary;
        $this->jobPosition = $jobPosition;
    }
}


class student extends Person{
    public $GPA,$Semester;
    public function __construct($name,$age,$gender,$GPA,$Semester) {
        parent::__construct($name,$age,$gender);
        $this->GPA=$GPA;
        $this->Semester = $Semester;
    }
}


$devin = New Person("devin",21,"L");
$finley = New Person("finley",18,"L");
echo $devin->nama;

$Manager = New employee("devin",21,"L",1000000000.0000,"Manager");


echo "manager salary : " . $Manager->salary . "\n";

$Manager->Introduction();

$Student = New student("finley",21,"L",3.88,7);
$Student ->Introduction();
// var_dump( $devin );
// var_dump( $finley );







