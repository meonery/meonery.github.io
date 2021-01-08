		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
        <script src="assets/js/application.js"></script>
        <script>
        	var app = {};
            app.ajax = null;
        	app.text = {


			    init:function(){
			        $(".main-hero h1").blast({
			            delimiter: "character",
			            tag: "span"
			        });
					
			        a = 0;
			        b= 0;
			        $(".main-hero .blast").each(function(){


			            if(a==300){

			                a=400;

			            }

			            if(a==1100){

			                a=1200;

			            }


			            var el = $(this);

			            if(a==400){

			                setTimeout(function(){

			                    $(".main-hero h1 img").addClass('animation-logo');


			                },800);
			            }

			            setTimeout(function(){

			                el.addClass('animated bounceIn');




			            },a);

			            if(a < 1200) {
			                a = a + 100;
			            }else {

			                a = a + 80;

			            }



			        });
			        setTimeout(function(){

			            $(".main-hero .blast").removeClass('animated bounceIn');
			            $(".main-hero .blast").css('opacity',1);

			            $(".main-hero .blast").mouseenter(function (){

			                var el = $(this);

			                $(this).addClass('animated rubberBand');
			                $(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){

			                    el.removeClass('animated rubberBand');

			                });

			            });


			        },3000);

			        $(".text-page h1").blast({
			            delimiter: "character",
			            tag: "span"
			        });


			        a = 0;


			        $(".text-page h1 .blast").each(function(){

			            var el = $(this);

			            setTimeout(function(){

			                el.addClass('animated bounceIn');


			            },a);


			            a = a + 50;

			        });


			        setTimeout(function(){

			            $(".text-page .blast").removeClass('animated bounceIn');
			            $(".text-page .blast").css('opacity',1);

			            $(".text-page .blast").mouseenter(function (){

			                var el = $(this);

			                $(this).addClass('animated rubberBand');
			                $(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){

			                    el.removeClass('animated rubberBand');

			                });

			            });


			        },1000);



			    }

			}
        </script>
    </body>
</html>