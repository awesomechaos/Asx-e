var Lock = function () {

    return {
        //main function to initiate the module
        init: function () {

             $.backstretch([
		        "assets/admin/image/bg/1.jpg",
		        "assets/admin/image/bg/2.jpg",
		        "assets/admin/image/bg/3.jpg",
		        "assets/admin/image/bg/4.jpg"
		        ], {
		          fade: 1000,
		          duration: 8000
		      });
        }

    };

}();