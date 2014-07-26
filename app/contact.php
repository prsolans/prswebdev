<!DOCTYPE html>
<html>

<head>
        <title>PRSWEBDEV.COM</title>
        <?php include( 'module/head.php'); ?>
</head>

<body ng-app="app">
            <?php include( 'module/gtm.php'); ?>

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
        <?php include('module/footer.php');?>
    
</body>

</html>
