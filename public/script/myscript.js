const flashData = $(".flash-data").data("flashdata");
// console.log(flashData);
if (flashData) {
  Swal.fire({
    icon: "success",
    title: "Selamat",
    text: flashData,
    timer: 2000,
    timerProgressBar: true,
    showConfirmButton: false,
  });
}

$(".btn-hapus").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
    title: "Apakah anda yakin akan di hapus",
    text: "Data yang telah dihapus tidak dapat dikembalikan!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus!",
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  });
});


