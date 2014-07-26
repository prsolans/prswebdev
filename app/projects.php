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
        <h1>Projects</h1>
        <div ng-controller="ProjectsCtrl">
            <ul ng-repeat="project in projects">
              <li><img src="{{project.image}}"><br/><strong>{{project.name}}</strong><br/>{{project.description}}</li>
            </ul>
        </div>
        <?php include('module/footer.php');?>

</body>

</html>
