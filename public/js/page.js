var Page={
    initControls: function () {
        $('.summernote').summernote();
        $('#image').on('change', function () {
            Common.imagePreview(this, 'featured-image-preview');
        });
    }
};