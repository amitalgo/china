var Words={
    initControls: function () {

        $("body").on('click','.add-meaning-box',function(){
            var div  ="<div class='col-lg-4 top-pdn'><input type='text' class='form-control' id='job-skill' name='job-skill' placeholder='Enter Type'><input type='text' class='form-control' id='job-skill' name='job-skill' placeholder='Enter Synonyms'>";
                div += "</div>";
            $('.box-append').append(div);
        });

        $(".alertify").delay(3000).fadeOut(1000);
        new Vue({
            el: '#example',
            data: {
                slides: 5
            },
            components: {
                'carousel-3d': Carousel3d.Carousel3d,
                'slide': Carousel3d.Slide
            }
        });
    }
};