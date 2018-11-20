<!DOCTYPE html>
<!--
Artur Sokolov
RDIR 51
154637
-->

<?php

        class Group {

            private $groupName;
            private $groupCode;
            private $students;

            function __construct($groupName = "groupName", $groupCode = "groupCode", $students ="students") {
                $this->groupName = $groupName;
                $this->groupCode = $groupCode;
                $this->students = $students;
            }

            function printGroupName() {
                echo $this->groupName . " " . $this->groupCode . "" . $this->students .  "\n";
            }

            function getgroupName() {
                return $this->groupName;
            }

            function getgroupCode() {
                return $this->groupCode;
            }

            function getStudents() {
                return $this->students;
            }


            function setgroupName($groupName) {
                $this->groupName = $groupName;
            }


            function setgroupCode($groupCode) {
                $this->groupCode = $groupCode;
            }

            function setStudents($students) {
                $this->students = $students;
            }

            public function __toString() {
                return "{$this->groupName} {$this->groupCode} {$this->students}";
            }

        }
        ?>