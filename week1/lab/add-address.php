<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Address</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">

    </head>
    <body>
        <?php
        require_once '../lab/models/dbconnect.php';
        require_once '../lab/models/addressCRUD.php';
        include './models/validation.php';
        require_once '../lab/models/util.php';
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
        
        // Initialize errors array
        $errors = [];
        $states = getStates();
        
        $zipRegex = '/^[0-9]{5}$/';
        
        // Validation
        if ( isPostRequest() ) {
            if ( empty($fullname) ){
                $errors[] = 'Full name is required.';
            }
            
            if (isEmailValid($email) === false ) {
                $errors[] = 'Email is not valid.';
            }
            
            if ( empty($addressline1) ){
                $errors[] = 'Address Line 1 is required.';
            }
            
            if ( empty($city) ){
                $errors[] = 'City is required.';
            }
            
            if ( isZipValid($zip)=== false ) {
                $errors[] = 'Zip is required.';
            }
            
            if ( empty($state) ) {
                $errors[] = 'State needs to be selected.';
            }
            
            if (isDateValid($birthday)=== false) {
                $errors[] = 'Date is not valid.';
            }
            
            if (count($errors) === 0) {
                if (createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday)) {
                    $message = 'Address Added';
                    $fullname = '';
                    $email = '';
                    $addressline1 = '';
                    $city = '';
                    $state = '';
                    $zip = '';
                    $birthday = '';
                    
                } else {
                    $errors[] = 'Could not add to the database.';
                }
            }
        }
                
        
        include './templates/errors.html.php';
        include './templates/messages.html.php';
        include '../lab/templates/add-address.html.php';
        ?>
    </body>
</html>
