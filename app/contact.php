<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>PRSWEBDEV.COM</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">

</head>

<body ng-app="app">

    <script src="js/angular.min.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/app.js"></script>
    <div class="container-fluid">
        <?php include( 'module/header.php'); ?>

        <!-- /header -->
        <h1>Contact</h1>
        <div ng-controller="ContactFormCtrl">
            <form class="form" novalidate name="contactForm" id="contactForm">
                <fieldset>
                    <legend>Fill this thing out...</legend>
                    <div class="form-group">
                        <label>First Name:
                            <input type="text" name="firstName" value="" required ng-model="contact.first">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Last Name:
                            <input type="text" name="lastName" value="" required ng-model="contact.last">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Email:
                            <input type="email" name="email" value="" required ng-model="contact.email">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>What?
                            <textarea name="comments" ng-model="contact.comments"></textarea>
                        </label>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn">Clear</button>
                    </div>

                    <div>
                        {{contact}}
                    </div>
                </fieldset>
            </form>
        </div>
        <footer id="footer" class="">
        </footer>
        <!-- /footer -->
    </div>
</body>

</html>