<?php


class denomination
{
    public static function getDenomination($genre){
        if ($genre == "male"){
            return "Monsieur";
        } else {
            $age = $_POST ['age'];
            if ($age <= 21) {
                return "Mademoiselle";
            } else {
                return "Madame";
            }
        }
    }
}