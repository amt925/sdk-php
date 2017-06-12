<?php

class Expr
{

    public function Equals($FieldName, $value)
    {
        return ["Type" => "Equals", "FieldName" => $FieldName, "Value" => $value];
    }

    public function DoesNotEqual($FieldName, $value)
    {
        return ["Type" => "DoesNotEqual", "FieldName" => $FieldName, "Value" => $value];
    }

    public function IsGreaterThanOrEqualTo($FieldName, $value)
    {
        return ["Type" => "IsGreaterThanOrEqualTo", "FieldName" => $FieldName, "Value" => $value];
    }

    public function IsGreaterThan($FieldName, $value)
    {
        return ["Type" => "IsGreaterThan", "FieldName" => $FieldName, "Value" => $value];
    }

    public function IsLessThanOrEqual($FieldName, $value)
    {
        return ["Type" => "IsLessThanOrEqual", "FieldName" => $FieldName, "Value" => $value];
    }

    public function IsLessThan($FieldName, $value)
    {
        return ["Type" => "IsLessThan", "FieldName" => $FieldName, "Value" => $value];
    }

    public function Contains($FieldName, $value)
    {
        return ["Type" => "Contains", "FieldName" => $FieldName, "Value" => $value];
    }

    public function IsBlank($FieldName, $value)
    {
        return ["Type" => "IsBlank", "FieldName" => $FieldName, "Value" => $value];
    }

    public function IsNotBlank($FieldName, $value)
    {
        return ["Type" => "IsNotBlank", "FieldName" => $FieldName, "Value" => $value];
    }

    public function IsBetween($FieldName, $value)
    {
        return ["Type" => "IsBetween", "FieldName" => $FieldName, "Value" => $value];
    }

    public function IsOneOfTheFollowing($FieldName, $value)
    {
        return ["Type" => "IsOneOfTheFollowing", "FieldName" => $FieldName, "Value" => $value];
    }

}
