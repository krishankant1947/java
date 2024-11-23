<?php
require "project.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="">
        <div class="card ">
            <div class="card-body p-5 m-auto border border-secondary-subtle">
            <div class="row my-3">
                    <div class="col-7">
                        <h5>Upload all documents in Image format only(JPEG, PNG, JPG, GIF)
                            Photo and Signature of the applicant - Size less than 100kb 
                            certificates/documents - Size less than 200 kb
                        </h5>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4">
                        <label for="Matriculation">Matriculation (10th Class Certificate) <span  class="text-amber-700 text-lg">*</span></label>
                        <input type="file" class="form-control" name="Matriculation (10th Class Certificate)" id="Matriculation"/>
                    </div>
                    <div class="col-4">
                        <label for=">Domicile/ResidenceCertificate ">Domicile/Residence Certificate *</label>
                        <input type="file" class="form-control" name="Residence Certificate " id=">Domicile/ResidenceCertificate "/>
                    </div>
                    <div class="col-4">
                        <label for="Baptism">Baptism Certificate *</label>
                        <input type="file" class="form-control" name="Baptism Certificate" id="Baptism"/>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4">
                        <label for="ChurchMembership">Church Membership *</label>
                        <input type="file" class="form-control" name="Church Membership" id="ChurchMembership"/>
                    </div>
                    <div class="col-4">
                        <label for="LetterofServiceCommitment">Letter of Service Commitment *</label>
                        <input type="file" class="form-control" name="Letter of Service" id="LetterofServiceCommitment"/>
                    </div>
                    <div class="col-4">
                        <label for="AadharCard">Aadhar Card *</label>
                        <input type="file" class="form-control" name="Aadhar Card12" id="AadharCard"/>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4">
                        <label for="profile_pic">Profile Pic *</label>
                        <input type="file" class="form-control" name="dp" id="profile_pic"/>
                    </div>
                    <div class="col-4">
                        <label for="SignaturePic">Signature Pic *</label>
                        <input type="file" class="form-control" name="Signature Pic" id="SignaturePic"/>
                    </div>
                    <div class="col-4">
                        <label for="OnlineDocumentverificationform">Online Document verification form (with signature & thumb impression) *</label>
                        <input type="file" class="form-control" name="Online Document verification form" id="OnlineDocumentverificationform"/>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4">
                        <label for="NEETUG-2024">NEET UG-2024 Admit Card</label>
                        <input type="file" class="form-control" name="NEET UG-2024" id="NEETUG-2024"/>
                    </div>
                    <div class="col-4">
                        <label for="ScoreCard">NEET UG-2024 Score Card</label>
                        <input type="file" class="form-control" name="Score Card" id="ScoreCard"/>
                    </div>
                    <div class="col-4">
                        <label for="DetailedMarksCard">10+1 Detailed Marks Card (with Eng /Phy /Chem /Bio)</label>
                        <input type="file" class="form-control" name="Detailed Marks Card" id="DetailedMarksCard"/>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4">
                        <label for="12DetailedMarksCard">10+2 Detailed Marks Card</label>
                        <input type="file" class="form-control" name="12 Detailed Marks Card" id="12DetailedMarksCard"/>
                    </div>
                    <div class="col-4">
                        <label for="profile_pic">10+1 and 10+2 Regular Study Certificate</label>
                        <input type="file" class="form-control" name="dp" id="profile_pic"/>
                    </div>
                    <div class="col-4">
                        <label for="Charactercertificate">Character certificate from School / College Principal</label>
                        <input type="file" class="form-control" name="Character certificate" id="Charactercertificate"/>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-4">
                        <label for="Migrationcertificate">Migration certificate</label>
                        <input type="file" class="form-control" name="Migration certificate" id="Migrationcertificate"/>
                    </div>
                    <div class="col-4">
                        <label for="BFUHSApplication">Copy of BFUHS Application</label>
                        <input type="file" class="form-control" name="BFUHS Application" id="BFUHSApplication"/>
                    </div>
                    <div class="col-4">
                        <label for="ExemptionCertificateifany">Exemption Certificate if any</label>
                        <input type="file" class="form-control" name="Exemption Certificate if any" id="ExemptionCertificateifany"/>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-7">
                        <h5>Upload all documents in Image format only(JPEG, PNG, JPG, GIF)
                            Photo and Signature of the applicant - Size less than 100kb 
                            certificates/documents - Size less than 200 kb
                        </h5>
                    </div>
                </div>
                <div class="row my-3">
                  <div class="col-12 text-center">
                     <button class="btn btn-outline-success " type="submit" >DOCUMENT UPLOAD</button>
                  </div>
               </div>
            </div>
        </div>
    </form>
</body>
</html>