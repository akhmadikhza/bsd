const flashData = $('.flash-data').data('flashdata');
console.log(flashData);

if (flashData) {
    Swal.fire({
        title: 'This Data',
        text: 'Was Successfully' + flashData,
        icon: 'success'
    });
}


$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Are you sure?',
        text: "This data will be deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!'
      }).then((result) => {
        if (result.isConfirmed) {
         
          document.location.href = href;
        }
      })

});



