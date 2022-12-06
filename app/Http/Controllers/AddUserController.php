<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Alert;

class AddUserController extends Controller
{
    
    public function addUser(Request $request){
    $user = new User;
    $data = request()-> all();        
    $user->firstName = $data['firstname'];
    $user->surname = $data['surname'];
    $user->dob= $data['dob'];
    $user->fatherName = $data['fatherName'];
    $user->motherName=$data['motherName'];
    $user->email=$data['email'];
    $user->position =$data['position'];
    $user->tel =$data['tel'];
    $user->telOfSpouse =$data['telOfSpouse'];
    $user->nameOfTheBankUsed =$data['nameOfTheBankUsed'];
    $user->cell =$data['cell'];
    $user->sector =$data['sector'];
    $user->district =$data['district'];
    $user->province =$data['province'];
    $user->country =$data['country'];
    $user->residenceVillage =$data['residenceVillage'];
    $user->residenceCell =$data['residenceCell'];
    $user->residenceSector =$data['residenceSector'];
    $user->residenceDistrict =$data['residenceDistrict'];
    $user->residenceProvince =$data['residenceProvince'];
    $user->martialStatus =$data['martialStatus'];
    $user->dependants =$data['dependants'];
    $user->university =$data['university'];
    $user->field =$data['field'];
    $user->secondary =$data['secondary'];
    $user->option =$data['option'];
    $user->primary =$data['primary'];
    $user->training =$data['training'];
    $user->languages =$data['languages'];
    $user->computerskills =$data['computerskills'];
    $user->drivingskills =$data['drivingskills'];
    $user->heritierFirstName =$data['heritierFirstName'];
    $user->heritierLastName =$data['heritierLastName'];
    $user->heritierAddress =$data['heritierAddress'];
    $user->heritierRelation =$data['heritierRelation'];
    $user->employerName =$data['employerName'];
    $user->employerAddress =$data['employerAddress'];
    $user->employerTel =$data['employerTel'];
    $user->employerPosition =$data['employerPosition'];
    $user->reason =$data['reason'];
    $user->prohibitedDrugs =$data['prohibitedDrugs'];
    $user->disabilities =$data['disabilities'];
    $user->contactFirstName =$data['contactFirstName'];
    $user->contactLastName =$data['contactLastName'];
    $user->contactAddress =$data['contactAddress'];
    $user->contactRelation =$data['contactRelation'];
    $user->contactTel =$data['contactTel'];
    $user->contactEmail =$data['contactEmail'];
    $user->staffName =$data['staffName'];
    $user->staffRelationship =$data['staffRelationship'];
    $user->otherStaffName =$data['otherStaffName'];
    $user->otherStaffRelationship =$data['otherStaffRelationship'];
    $user->save(); 
    Alert::success('Congrats', 'Your identification profile submited successfully'); 
    return redirect()->back();
}
}
