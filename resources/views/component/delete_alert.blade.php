<script>
    $(document).ready(function(){
        $('.btnDelete').on('click', function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            swal({
                title: "Hapus ?",
                text: "Data yang di hapus tidak dapat di kembalikan!", 
                icon: "warning",
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