<?php

/*
 Search Object
*/

class Search
{
    var $SearchToUse;
    var $Type;
    var $Context;
    var $count;
    var $Module;
    var $Criteria;
    var $OutputColumn;
    var $countoutput;
    var $Sortcolumn;
    var $countsort;
    var $GroupType;
    var $countgroup;

    public function __construct()
    {
        $this->SearchToUse = '';
        $this->Type = '';
        $this->Context = '';
        $this->count = 0;
        $this->countoutput = 0;
        $this->countsort = 0;
        $this->countgroup = 0;
        $this->Criteria = [];
        $this->OutputColumn = [];
        $this->Sortcolumn = [];
        $this->GroupType = [];
        $this->Module = '';
    }

    public function SearchOperationGroupType($GroupType)
    {
        $this->GroupType[$this->countsort] = ["GroupType" => $GroupType];
        $this->countgroup++;
    }

    public function AddSortColumn($ColoumnName, $isDescending = 'false')
    {
        $this->Sortcolumn[$this->countsort] = ["ColoumnName" => $ColoumnName, "isDescending" => $isDescending];
        $this->countsort++;
    }

    public function AddOutputColumn($ColoumnName, $Aggregate = "None")
    {
        $this->OutputColumn[$this->countoutput] = ["ColoumnName" => $ColoumnName, "Aggregate" => $Aggregate];
        $this->countoutput++;
    }

    public function AddCriteria($SearchOperation)
    {
        $this->Criteria[$this->count] = $SearchOperation;
        $this->count++;
    }

}
