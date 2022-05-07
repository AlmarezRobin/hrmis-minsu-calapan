<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR . 'views/emp/includes\head.php'); ?>
<link rel="stylesheet" href=" <?php echo BASE_URL . PUBLIC_DIR ?>/pds/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo  BASE_URL . PUBLIC_DIR ?>/pds/pds.css">

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR . 'views/emp/includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR . 'views/emp/includes\sidebar.php'); ?>
            <!-- end side bar -->
            <!-- // * commented jcd april 23, 2022 -->
            <!-- <button id="print" onclick="print_pds()">
                Print
            </button>
            <script>
                function print_pds(){
                    window.print();
                }
            </script> -->
            <!-- // * commented jcd april 23, 2022 -->
            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Status: 
                        <strong>
                            <?php if(isset($get_stat_pds['pds_id'])): ?>
                                <?php echo $get_stat_pds['status_of_pds']?>  
                            <?php endif; ?>
                        </strong>
                    </h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start p-2">
                            <!-- Alert -->
                        </div>
                        <?php

                        require_once(APP_DIR . 'vendor/autoload.php');

                        use PhpOffice\PhpSpreadsheet\Spreadsheet;
                        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

                        $spreadsheet = new Spreadsheet();
                        $sheet = $spreadsheet->getActiveSheet();
                        $sheet->setCellValue('A1', 'Hello World !');

                        $writer = new Xlsx($spreadsheet);
                        $writer->save('hello world.xlsx');

                        ?>


<<<<<<< HEAD
                                    <!-- Q2 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">35.</span> a. Have you ever been found guilty of any administrative offense?
                                            </td>
                                            <td colspan="2">
                                                
                                            </td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5">If YES, give details:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> b. within the fourth degree (for Local Government Unit - Career Employees)?
                                            </td>
                                            <td colspan="2" style="border-top-width: 1px !important;"></td>
                                            <td colspan="3" style="border-top-width: 1px !important;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5">If YES, give details:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="2">Date Filed:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="2">Status of Case/s:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q3 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">36.</span> Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5">If YES, give details:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="5"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q4 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">37.</span> Have you ever been separated from the service in any of the following modes: resignation,<br>
                                                
                                                
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased<br>
                                            </td>
                                            <td colspan="5">If YES, give details:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> out (abolition) in the public or private sector?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q5 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">38.</span> a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span><br>
                                            </td>
                                            <td colspan="2">If YES, give details:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> b. Have you resigned from the government service during the three (3)-month period before the last
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span> election to promote/actively campaign for a national or local candidate?
                                            </td>
                                            <td colspan="2">If YES, give details:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q6 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">39.</span> Have you acquired the status of an immigrant or permanent resident of another country?
                                            </td>
                                            <td colspan="2">
                                                
                                            </td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                            </td>
                                            <td colspan="2">if YES, give details (country):</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- Q7 -->
                                    <tbody class="table-body question-block">
                                        <tr>
                                            <td colspan="7" class="s-label border-bottom-0">
                                                <span class="count">40.</span> Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA<br>
                                                <span class="count"></span> 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
                                            </td>
                                            <td colspan="2">
                                                
                                            </td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span>a. Are you a member of any indigenous group?<br>
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span><br>
                                            </td>
                                            <td colspan="2">If YES, please specify:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span>b. Are you a person with disability?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                            </td>
                                            <td colspan="2">If YES, please specify:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label">
                                                <span class="count"></span>c. Are you a solo parent?
                                            </td>
                                            <td colspan="2"></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7" class="s-label"></td>
                                            <td colspan="2">If YES, please specify:</td>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>

                                    <!-- End of Page 4 -->

                                    <tbody class="table-body">
                                        <tr>
                                            <td colspan="8" class="s-label">
                                                <span class="count">41.</span> REFERENCES <span class="text-danger">(Person not related by consanguinity or affinity to applicant /appointee)</span>
                                            </td>
                                            <td colspan="4" rowspan="5" class="p-5">
                                                <table class="w-75 mx-auto border-0">
                                                    <tbody class="border-0">
                                                        <tr>
                                                            <td class="text-center p-3">ID picture taken within the last  6 months3.5 cm. X 4.5 cm(passport size)With full and handwrittenname tag and signature overprinted nameComputer generated or photocopied picture is not acceptable</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-0 text-muted lead text-center">PHOTO</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td colspan="4" class="s-label">NAME</td>
                                            <td colspan="2" class="s-label">ADDRESS</td>
                                            <td colspan="2" class="s-label">TEL. NO.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="8">
                                                <span class="count">42.</span> I declare under oath that I have personally accomplished this Personal Data Sheet which is a true correct and<br><span class="count"></span> complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the<br><span class="count"></span> Philippines. I authorize the agency head / authorized representative t verify validate the contents stated herein.<br><span class="count"></span> I agree that any misrepresentation made in this document and its attachments shall cause the filing of<br><span class="count"></span> administrative/criminal case/s against me.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="12" class="border-0 p-0">
                                                <table class="border-0 w-100">
                                                    <tbody class="border-0">
                                                        <tr>
                                                            <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                                                <table class="border-0 w-100">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="s-label py-2">Government Issued ID(i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.)<br>                               PLEASE INDICATE ID Number and Date of Issuance</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 30%;">Government Issued ID:</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 30%;">ID/License/Passport No.:</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 30%;">Date/Place of Issuance:</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                                                <table class="border-0 w-100">
                                                                    <tbody class="border-0 text-center">
                                                                        <tr>
                                                                            <td class="py-4"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="s-label"><small>Signature (Sign inside the box)</small></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="s-label"><small>Date Accomplished</small></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td colspan="4" class="border-0 p-3">
                                                                <table class="border-0 w-100">
                                                                    <tbody class="border-0">
                                                                        <tr>
                                                                            <td class="py-5"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="s-label text-center">Right Thumbmark</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                    <tbody class="table-body">
                                                        <tr>
                                                            <td colspan="12" class="text-center py-2">
                                                                SUBSCRIBED AND SWORN to before me this <input type="text" class="border-top-0 border-left-0 border-right-0" style="width: 25%;"> , affiant exhibiting his/her validly issued government ID as indicated above.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="12" class="py-5">
                                                                <table class="w-25 mx-auto">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="py-5"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="s-label text-center">Person Administering Oath</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <!-- End of References -->



                                </table>
                            </form>
                        </div>
                        
                        <div class="row mb-2">
							<div class="d-flex justify-content-center">
                                <?php if(isset($get_stat_pds['pds_id'])): ?>
                                <form action="<?=site_url('Employee/update_pds');?>" method="post">
                                    <input type="hidden" name="" value ="<?= $get_stat_pds['pds_id'] ?>">
                                    <input type="hidden" name="stat" value="PENDING">
                                    <input type="submit" value=" UPDATE SUBMITTED PDS" class="btn btn-success" onclick="return confirm('You are about to send your personal data sheet in Human resource office.')">
                                </form>
                                <?php else: ?>

                                <form action="<?=site_url('Employee/submit_pds');?>" method="post">
                                    <input type="hidden" name="stat" value="PENDING">
                                    <input type="submit" value="SUBMIT PERSONAL DATA SHEET" class="btn btn-primary" onclick="return confirm('You are about to send your personal data sheet in Human resource office.')">
                                </form>
                                <?php endif; ?>
							</div>
                        </div>       
                    
=======
>>>>>>> db7acddc401f2ac4036452522a8004135a6d6257

                    </div>
                    <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR . 'views/emp/includes\footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once(APP_DIR . 'views/emp/includes\footer.php'); ?>