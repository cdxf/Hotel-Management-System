(function () {
  app = angular.module('app', ['ui.router', 'directive']);
  app.config(function ($stateProvider, $urlRouterProvider) {
    $stateProvider
      .state('home', {
        url: '/',
        templateUrl: "resources/header.html"
      })
      .state('index.state1', {
        url: "/state1",
        templateUrl: "resources/users/users.html"
      });
  });
})();