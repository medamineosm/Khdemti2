var app = angular.module('app', ['ngMessages']);

app.controller('MainCtrl', MainCtrl);
// Controller function and passing $http service and $scope var.
function MainCtrl($scope, $http, $window) {
  // create a blank object to handle form data.
  $scope.user = {};
  // calling our submit function.
  $scope.submitForm = function() {
    // Posting data to php file
    console.log($scope.personForm);
    $http({
         method  : 'POST',
         url     : 'inc/insert.php',
         data    : $scope.personForm, //forms user object
         headers : {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .success(function(data) {
            if (data.errors) {
              // Showing errors.
              $scope.errorName = data.errors.name;
              $scope.errorUserName = data.errors.username;
              $scope.errorEmail = data.errors.email;
            } else {
              $scope.message = data.message;
              //$window.alert($scope.message);
              $('#myModal').modal('show');
            }
        });
      };

    }
