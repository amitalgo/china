var SubAdmin={
    initControls: function () {
        $('#profile-pic').on('change', function(){
            Common.imagePreview(this, 'image-preview');
        });
    }
};