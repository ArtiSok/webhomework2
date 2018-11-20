<!DOCTYPE html>
<!--
Artur Sokolov
RDIR 51
154637
-->

<?php

        class Student {

            private $studentId;
            private $name;
            private $lastname;
            private $code;

            function __construct($studentId = "studentId", $name = "name", $lastname = "lastname", $code = "code") {
                $this->studentId = $studentId;
                $this->name = $name;
                $this->lastname = $lastname;
                $this->code = $code;
            }

            function printname() {
                echo $this->studentId . " " . $this->name . " " . $this->lastname . " " . $this->code . "\n";
            }

            function getStudentId() {
                return $this->studentId;
            }

            function getName() {
                return $this->name;
            }

            function getLastname() {
                return $this->lastname;
            }

            function getCode() {
                return $this->code;
            }

            function setStudentId($StudentId) {
                $this->StudentId = $StudentId;
            }

            function setName($name) {
                $this->name = $name;
            }

            function setLastname($lastname) {
                $this->lastname = $lastname;
            }

            function setCode($code) {
                $this->code = $code;
            }

            public function __toString() {
                return " {$this->StudentId} {$this->name} {$this->lastname} {$this->code}";
            }

        }
        ?>

