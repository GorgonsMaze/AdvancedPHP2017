<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Address</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.min.css">
        <link rel='stylesheet' type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        require_once '../lab/models/dbconnect.php';
        require_once '../lab/models/addressCRUD.php';
        require_once '../lab/models/util.php';
        include './templates/navigation.html.php';
        include './models/validation.php';

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
        if (isPostRequest()) {
            if (empty($fullname)) {
                $errors[] = 'Full name is required.';
            }

            if (isEmailValid($email) === false) {
                $errors[] = 'Email is not valid.';
            }

            if (empty($addressline1)) {
                $errors[] = 'Address Line 1 is required.';
            }

            if (empty($city)) {
                $errors[] = 'City is required.';
            }

            if (isZipValid($zip) === false) {
                $errors[] = 'Zip is required.';
            }

            if (empty($state)) {
                $errors[] = 'State needs to be selected.';
            }

            if (isDateValid($birthday) === false) {
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

        <script type="text/javascript">

            // Method to allow user to x out of success alert
            function deleteAlert() {
                if (document.getElementById('successAlert').style.display === 'none') {
                    document.getElementById('successAlert').style.display = 'block';
                } else {
                    document.getElementById('successAlert').style.display = 'none';
                }
            }

        </script>

    </body>
</html>
