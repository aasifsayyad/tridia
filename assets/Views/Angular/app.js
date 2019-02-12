var app=
angular.module("myApp",["ngRoute"]);
app.config(function($routeProvider){
    $routeProvider.when("/",
    {controller:'summaryController',templateUrl:base_url + "Tridia/summary"})
    .when("/Master",{controller:"masterController",templateUrl:base_url + "Tridia/master"})
    .when("/Allocation",{controller:"allocationController",templateUrl:base_url + "Tridia/allocation"})
    .when("/AssetDesign",{controller:"assetdesignController",templateUrl:base_url + "Tridia/assetDesign"})
    .when("/BlockMagistral",{controller:"blockMagistralController",templateUrl:base_url + "Tridia/blockMagistral"})
    .when("/Chronicles",{controller:"chroniclesController",templateUrl:base_url + "Tridia/chronicles"})
    .when("/Ranking",{controller:"rankingController",templateUrl:base_url + "Tridia/ranking"})
    .otherwise({redirectTo:'/'})});

var processJsonContent=function(url,type,data){
    return $.ajax({
        url:encodeURI(url),
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        type:type,
        data:data,
        contentType:"application/json; charset=UTF-8",
        crossDomain: true,
        xhrFields: { withCredentials: true },
        beforeSend:function(xhr){
            xhr.setRequestHeader("Authorization",makeBasicAuth(user,pass))}
    })
};

var makeBasicAuth=function(user,password){
    var tok=user+':'+password;
    var hash=window.btoa(tok);
    return"Basic "+hash;
}

