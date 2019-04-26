<script>
    $(document).ready(function(){
        $('.btnPublish').on('click', function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            swal({
                title: "Sure you want to update this bill",
                text: "the data will be update soon after you approve", 
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