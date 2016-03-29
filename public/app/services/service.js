app
.service('HttpService', function ($http) {

    return {
          getAjax: function(url,fn){
              $http({
                  method: 'GET',
                  url:  url
              })
              .success(function(data) {
                    fn(data);
              });
          },
          postAjax: function(url,data,fn){
            $http({
                method: 'POST',
                url:  url,
                data:  data
            })
            .success(function(data) {
                fn(data);
            });
        }
    }

});