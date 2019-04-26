<script>
    $(document).ready(function(){
        $('.btnPublish').on('click', function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            swal({
                title: "Sure you want to publish this report",
                text: "the data will be published soon after you approve", 
                icon: "info",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location.href = href;
              }
            });
        });
    });
</script>